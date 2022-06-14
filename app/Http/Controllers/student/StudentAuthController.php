<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Models\StudentInformation;
use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class StudentAuthController extends Controller
{
    public function showLogin(){
        return view('FrontEnd.auth.login');

    }

    public function login(Request $request){

        // return $request;
        //  $password = $request->password;
        //  $password = Hash::make($password);
        //  return $password;

        $studentID = $request->studentID;
        $password = $request->password;

        $studentCheck = StudentInformation::where('studentID', $studentID)->exists();
        
        if($studentCheck){
            $existingPassword = StudentInformation::select('password')->where('studentID',$studentID)->first(); 
            // return $existingPassword;
            $existingPassword = $existingPassword->password;
            // return $existingPassword;
            $check = Hash::check($password, $existingPassword);
            
            if($check){
                Session::put('studentID',$studentID);
                return redirect()->route('student.dashboard');
    
            }
            else{
                toast('Invalid Student ID/Password','error');
                return redirect()->back();
            }
        }
        else{
            toast('No Records Found','error');
            return redirect()->back();
        }
        
       

    }
    public function studentDashboard(){
        return view('layouts.FrontEnd.dashboard');
    }
    public function view(){
        $student = StudentInformation::where('studentID',session()->get('studentID'))->first();
        return view('FrontEnd.student.profile.view',compact('student'));
    }
    public function settings(){
        $student = StudentInformation::where('studentID',session()->get('studentID'))->first();
        return view('FrontEnd.student.profile.settings',compact('student'));
    }
    public function updateImage(Request $request){
        $request->validate([
            'image' => 'required'
        ]);

        $img = Image::make($request->image);
        $img->resize(150,150)->encode('png');
        $path = public_path('files/student/image/').session()->get('studentID').'.png';
        $img->save($path);
        StudentInformation::where('studentID',session()->get('studentID'))->update([
            'image' => session()->get('studentID').'.png'
        ]);
        toast('image updated successfully','success');
        return redirect()->route('student.dashboard');
    }
    public function updatePassword(Request $request){
        try {
            $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => ['required'],
                'new_confirm_password' => ['same:new_password'],
            ]);
       
            StudentInformation::where('studentID',session()->get('studentID'))->update(['password'=> Hash::make($request->new_password)]);
            toast('Password Changed Successfully','success');
            return redirect()->route('student.login');
    
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function logout(){
        Session::flush();
        toast('Logged Out Successfully','success');
        return redirect()->route('student.login');
    }


    
}
