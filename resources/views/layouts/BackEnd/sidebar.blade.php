<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('home')}}">
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
                    <a href="{{route('home')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-checked"></span><span class="mtext">Prerequisite</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('hostel-seats.index')}}">Hostel Seat</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{route('hostel-meal.index')}}">Hostel Meal</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{route('monthly-bills.index')}}">Monthly Bills</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user1"></span><span class="mtext">Hostel Students</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('student-information.create')}}">Admit New Student</a></li>
                        <li><a href="{{route('student-information.index')}}">Student List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
