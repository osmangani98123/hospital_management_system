<style>
    .header {
    transition: all 0.5s;
    z-index: 997;
    height: 85px;
    box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
    background-color: #181818;
    padding-left: 20px;
}
.header-scrolled {
  height: 60px; /* Adjust the desired smaller height */
  /* Add any other style changes you want */
}
    @media (min-width: 992px) {
        .toggle-sidebar-btn {
            display: none;
        }
    }

    @media (max-width: 991px) {
        #navbar_items_2 {
            display: none;
        }
    }

    #caretdown {
        color: #28a745;
        font-size: 14px;

    }

    #navbar_items_2 {
        background-color:  #181818;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 15px;
        padding: 10px;
        padding-bottom: 7px;
    }

    #navbar_items_2 ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        /* Make the list items display in a row */
    }

    #navbar_items_2 li {
        margin-right: 25px;
    }

    #navbar_items_2 a {
        text-decoration: none;
        color: rgb(255, 255, 255);
    }

    #navbar_items_2 ul li {
        position: relative;
        padding: 10px 0;
        transition: transform 0.3s ease;
    }

    #navbar_items_2 ul li a {

        /* Set your desired text color */
        text-decoration: none;
        transition: color 0.3s;
        /* Add a smooth color transition */
    }

    #navbar_items_2 ul li:hover {
        border-bottom: 1px solid #ff2d2d;
        transform: scale(1.1);
        /* Add a green border on hover (Bootstrap "success" color) */
    }

    #navbar_items_2 ul li:hover a {
        color: #ff4800;

        /* Change the text color on hover to match the border color */
    }

    #secrect-item {
        margin-right: 0.7rem !important;
        background-color: #181818;

        font-size: 15px;
        color: #28a745;
    }

    #secrect-item:hover {
        color: #ff4800;
    }

    .fa-rocket:before {
        content: "\f135";
        font-size: 26px;
        transition: font-size 0.5s ease, color 0.5s ease;
    }

    .fa-rocket:hover:before {
        font-size: 40px;
        color: red;
    }

    .header-nav .nav-link.nav-icon i {
        font-size: 24px;
        /* Set the initial font size */
        color: #000;
        /* Set the initial color */
        transition: all 0.3s ease;
        /* Add a smooth transition effect for all properties */
    }

    /* On hover, change the font size to make the icon bigger and change the color to red */
    .header-nav .nav-link.nav-icon i:hover {
        font-size: 40px;
        /* Set the larger font size on hover */
        color: red;
        /* Change the color to red on hover */
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        color: #fff;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    .dropdown-item {
        transition: all 0.5s ease;

    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #41f1e8;
        /* Change the background color on hover */

        text-decoration: none;
        /* Remove underlines on hover (if any) */
    }

    .dropdown-item:hover {
        color: red;
        /* Set the text color to red on hover */
        font-size: 18px;
        /* Increase the font size on hover */

    }

    #secrect-item {
        margin-right: 0.7rem !important;
        background-color: #181818;
    }

    .logo img {
        max-height: 60px;
        margin-right: 6px;
        transition: all 0.5s ease;
        /* Add a smooth transition effect */
    }

    .logo img:hover {
        max-height: 80px;
        /* Increase the max-height on hover */
        border-radius: 50%;
        /* Make it round on hover */
    }

    .logo span {
        font-size: 24px;
        font-weight: 700;
        color: #ffffff;
        font-family: "Nunito", sans-serif;
    }

    .d-none.d-lg-block {
        /* Your existing styles here */
        font-size: 21.5px;
        /* Set the initial font size */
        transition: all 0.6s ease;
        /* Add a smooth transition effect */
    }

    /* On hover, increase the font size to make it bigger */
    .d-none.d-lg-block:hover {
        /* Your existing styles here */
        font-size: 28px;
        /* Set the larger font size on hover */
        color: rgb(245, 0, 0)
    }

    #make_appointment{
        margin-right:8px;

    }
    #make_appointment_large-device{
        margin-right: 10px;
        font-size: 10px;
    }
    #logo{
        border-radius: 50%; width: 50px; height: 50px;
    }
</style>
<header id="header" class="header header-scrolled fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
            <img src="{{ asset('ui/backend') }}/assets/img/logo/1.jpg" alt="" id="logo">
            <span class="d-none d-lg-block">Hospital name</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- End Search Bar -->

    <div id="navbar_items_2">
        <style>
            @media (max-width: 991px) {
                #navbar_items_2 {
                    display: none;
                }
            }
        </style>
        <ul>
            <li><a href="#">Cosmetic Surgery </a></li>
            <li><a href="#">Reconstructive Surgery</a></li>
            <li><a href="#">Burn </a></li>
            <li><a href="#">Wound</a></li>
            <li><a href="#">Hand</a></li>
            <li><a href="#">Foot</a></li>
            <li><a href="#">Craniofacial</a></li>
            <li><a href="#">Microsurgery</a></li>
            <li><a href="#">Contact</a></li>

        </ul>
    </div>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">

                </a>
            </li><!-- End Search Icon-->


            {{-- secret items  --}}



            <!-- Your Dropdown HTML -->
            <div id="secrect-item">
                <a href="{{route('addappointments')}}" class="btn btn-danger fa-beat-fade" id="make_appointment_large-device"> <strong>Make Appointment !</strong> </a>
            </div>


            <!-- JavaScript to toggle dropdown -->


            {{-- end secret items  --}}




            <div id="navbar_items_4">
                <style>
                    .hidden-on-small {
                        display: none;
                    }

                    /* Media query for small screens (e.g., mobile) */
                    @media (max-width: 991px) {
                        .hidden-on-small {
                            display: block;

                            /* Show the list for small screens */
                        }
                    }
                </style>

            </div>




        </ul>


    </nav><!-- End Icons Navigation -->

</header>



