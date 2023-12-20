<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <li>
                    <a href="{{route('allappointments')}}">
                        <i class="bi bi-circle"></i><span>Appointment</span>
                    </a>
                </li> <hr>
                <li>
                    <a href="components-carousel.html">
                        <i class="bi bi-circle"></i><span>Carousel</span>
                    </a>
                </li>

                <hr>
                <a href="{{route('departments')}}">
                    <i class="bi bi-circle"></i><span>Departments</span>
                </a>
        </li>
        <li>
            <a href="{{route('adddepartment')}}">
                <i class="bi bi-circle"></i><span>Add Department</span>
            </a>
        </li>
        <hr>


        <li>
            <a href="{{route('alldoctors')}}">
                <i class="bi bi-circle"></i><span>All Doctors</span>
            </a>
        </li>

        <li>
            <a href="{{route('adddoctors')}}">
                <i class="bi bi-circle"></i><span>Add Doctor</span>
            </a>
        </li>




    </ul>



</aside>
