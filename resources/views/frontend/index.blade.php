@extends('frontend.layouts.includes.master')

@section('content')
    <style>
        .carousel-inner {
            padding-left: 50px;
            padding-right: 43px;
            padding-top: 95px;
            background-color: #d3d3d3;
        }

        #big_heading_text {
            color: white;
            font-size: 70px;
            font-style: italic;
            padding-top: 100px;
        }
#hr{
    color:rgb(255, 33, 33);
}
#first_row{

}

        #description {
            color: white;
            font-style: italic;
        }

        .border-rounded {
            border-radius: 20px;
            /* You can adjust the value to control the roundness */
        }

        h3 {
            color: rgb(70, 70, 70);

        }

        p {
            color: rgb(70, 70, 70);
            font-size: 14px;
            /* Set the font size to your desired value (e.g., 14px) */
        }



        h3,
        p {
            margin: 0;
            /* This will remove any margin around the h3 and p elements */
            padding: 0;
            /* This will remove any padding around the h3 and p elements */
        }

        #disease {
            border-radius: 50%;
            /* Make the image round (50% border-radius) */
            width: 130px;
            /* Set the width to your preferred size (e.g., 100px) */
            height: 130px;
            /* Set the height to your preferred size (e.g., 100px) */
        }

        #consult_now {
            font-size: 12px;
            color: red;
        }

        #appointment {

            width: 270px;
            /* Set the width to your preferred size (e.g., 100px) */
            height: 200px;
            /* Set the height to your preferred size (e.g., 100px) */
        }

        .comments {
            text-align: center;
            /* Center-align the text */
            color: rgb(49, 48, 48);
            /* Set the text color to black */
            padding-left: 160px;
            padding-right: 150px;

        }

        /* Default styles for larger screens */
        .col-2,
        .col-3 {
            float: left;
        }

        /* Media query for smaller screens (e.g., mobile) */
        @media (max-width: 768px) {

            .col-2,
            .col-3 {
                width: 100%;
                /* Make each column take up the full width */
                float: none;
                /* Remove the floating effect */
                margin: 0 auto;
                /* Center the items horizontally */
                text-align: center;
            }
        }
    </style>
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" id="alertMessage">
            <strong>{{ session()->get('message') }}</strong>

        </div>
    @endif
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row" id="first_row">
                    <div class="col-6">
                        <h1 id="big_heading_text">
                            Achieve a Lifetime
                            of Natural Beauty
                        </h1> <hr id="hr">
                        <h3 id="description">at Parakh Plastic Surgery in New Jersey
                            Dr. Shwetambara Parakh is a double board-certified plastic surgeon in New Jersey who offers the
                            full spectrum of aesthetic procedures.
                        </h3>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('ui/frontend') }}/assets/img/carosels/3.png"
                            class="d-block w-100 fixed-size-image" alt="...">
                    </div>

                </div>

            </div>
            {{--  <div class="carousel-item">
                <img src="{{ asset('ui/frontend') }}/assets/img/carosels/carosel-2.png"
                    class="d-block w-100 fixed-size-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('ui/frontend') }}/assets/img/carosels/carosel-1.jpg"
                    class="d-block w-100 fixed-size-image" alt="...">
            </div> --}}
        </div> <br>

        <div class="container mt-5">
            <div class="row ">
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-rounded">
                        <img src="{{ asset('ui/frontend') }}/assets/img" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Instant Video Consultation</h4>
                            <p class="card-text">Connect within 60 sec</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-rounded">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Find Doctor Near You</h4>
                            <p>Confirm appointment</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 d-none d-md-block">
                    <div class="card h-100 border-rounded">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Lab Tests</h4>
                            <p class="card-text">Sample pickup at your home</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 d-none d-md-block">
                    <div class="card h-100 border-rounded">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Surgeries</h4>
                            <p class="card-text">Safe and trusted surgeries center</p>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br> <br> <br>
            {{--  --}}
            <div class="container mt-5">
                <h3><b>Consult top doctors online for any health concern</b></h3>
                <p>Private online consultations with verified doctors in all specialists</p>
                <div class="row mt-5">
                    <div class="col-2">
                        <img src="{{ asset('ui/frontend') }}/assets/img/disease/1.webp" id="disease">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>
                            <p id="consult_now" class="mt-2">CONSULT NOW</p>
                        </div>

                    </div>
                    <div class="col-2">
                        <img src="{{ asset('ui/frontend') }}/assets/img/disease/1.webp" id="disease">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>
                            <p id="consult_now" class="mt-2">CONSULT NOW</p>
                        </div>

                    </div>
                    <div class="col-2">
                        <img src="{{ asset('ui/frontend') }}/assets/img/disease/1.webp" id="disease">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>
                            <p id="consult_now" class="mt-2">CONSULT NOW</p>
                        </div>

                    </div>
                    <div class="col-2">
                        <img src="{{ asset('ui/frontend') }}/assets/img/disease/1.webp" id="disease">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>
                            <p id="consult_now" class="mt-2">CONSULT NOW</p>
                        </div>

                    </div>
                    <div class="col-2">
                        <img src="{{ asset('ui/frontend') }}/assets/img/disease/1.webp" id="disease">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>
                            <p id="consult_now" class="mt-2">CONSULT NOW</p>
                        </div>

                    </div>
                    <div class="col-2">
                        <img src="{{ asset('ui/frontend') }}/assets/img/disease/1.webp" id="disease">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>
                            <p id="consult_now" class="mt-2">CONSULT NOW</p>
                        </div>

                    </div>

                </div>
            </div> <br> <br><br> <br>
            {{-- Book an appointment for an in-clinic consultation --}}
            <div class="mt-5">
                <h3><b>Book an appointment for an in-clinic consultation</b></h3>
                <p>Find experienced doctors across all specialties</p>
                <div class="row mt-5">
                    <div class="col-3">
                        <img src="{{ asset('ui/frontend') }}/assets/img/appointment/1.jpg" id="appointment">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>

                        </div>

                    </div>
                    <div class="col-3">
                        <img src="{{ asset('ui/frontend') }}/assets/img/appointment/1.jpg" id="appointment">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>

                        </div>

                    </div>
                    <div class="col-3">
                        <img src="{{ asset('ui/frontend') }}/assets/img/appointment/1.jpg" id="appointment">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>

                        </div>

                    </div>
                    <div class="col-3">
                        <img src="{{ asset('ui/frontend') }}/assets/img/appointment/1.jpg" id="appointment">
                        <div class="container">
                            <p class="mt-2 centered-text"><strong>details</strong></p>

                        </div>

                    </div>




                </div>
            </div> <br> <br><br>
            <hr><br><br>

            {{-- what our users say --}}
            <div class="comments">
                <h2> <strong>What our users have to say</strong></h2>
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, ullam velit! Reprehenderit nostrum ut,
                    dicta, nisi, corporis saepe aliquid adipisci officiis deserunt facere nobis magni quis labore obcaecati!
                    Blanditiis, iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptate tempore
                    atque minima laudantium nesciunt itaque voluptas rem reprehenderit? Deserunt, autem odio? Unde
                    necessitatibus deleniti exercitationem id facilis ab quo?</h4>
            </div>
        </div>

    </div>
@endsection
