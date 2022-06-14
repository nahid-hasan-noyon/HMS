<?php
  
namespace App\Rules;
  
use App\Models\StudentInformation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;
  
class MatchOldPassword implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $student = StudentInformation::where('studentID',session()->get('studentID'))->first();
        return Hash::check($value, $student->password);
    }
   
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is match with old password.';
    }
}