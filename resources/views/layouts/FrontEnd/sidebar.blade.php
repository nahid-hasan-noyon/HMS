<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('student.dashboard')}}">
            {{-- <img src="{{asset('src/images/HMS.png')}}" alt="" class="dark-logo d-flex justify-content-center"> --}}
            <img src="{{asset('src/images/HMS.png')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{route('student.dashboard')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-dinner"></span><span class="mtext">Meal</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('book-meal.index')}}">Book My Meal</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{route('book-meal.show',session()->get('studentID'))}}">Meal History</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('student.bill.view')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-money"></span><span class="mtext">My Bills</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
