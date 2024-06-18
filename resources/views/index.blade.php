@extends('layout')
@section('base')
    <div class="cover-container d-flex w-auto h-100 flex-column col-md-12" style="background-image: url('../assets/img/Rectangle 6.png')">
        <header class="mb-0">
            <div class="mx-5">
                <h3 class="float-md-start mx-5 px-5"><img src="../assets/img/logoasc.png" alt="" height="70"
                        width="60"></h3>
                <nav class="nav nav-masthead justify-content-center pt-3 float-md-end">
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="{{ route('home') }}">Home</a>
                    <a class="nav-link fw-bold py-1 px-0" href="{{ route('about') }}">About Us</a>
                    <a class="nav-link fw-bold py-1 px-0" href="{{route('services')}}">Our Services</a>
                    <a class="nav-link fw-bold py-1 px-0" href="{{ route('contact') }}">Contact</a>
                </nav>
            </div>
        </header>
        <div style="margin:auto;">
            <h1 style="font-size: 70px;font-weight: bold; color:white;">ARE YOU A PROJECT CARRIER ?</h1>
            <h4 style="font-weight: bold; color: #FB1111;">Africa Samurai accompanie you from the <br>
                idea its realization</h4>
            <a href="#" class="btn btn-primary px-5 py-3 mt-4 rounded-5 fw-bold"
                style="background-color: #F2994A; border: hidden"> GET IN TOUCH </a>
        </div>
    </div>

    <br><br>


    <div class="container">
        <div class="card-body">
            <h2 class="card-title fw-bold" style="font-size: 50px; color: #E6AA11;">ASC GOALS</h2>
            <br>
            <p class="text-center"> Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. <br>
                Corrupti inventore consequatur
                nisi necessitatibus modi consequuntur soluta id. <br> Enim autem est esse natus assumenda. Non sunt
                dignissimos

            </p>
        </div>
    </div><!-- End Default Card -->




    <br><br><br>
    <div class="container">
        <div class="row g-0">
            <div class="col-md-1">
                <span class="spinner-grow text-warning mb-5 mt-4"></span> <br>
                <span class="spinner-grow text-warning mb-5 mt-3"></span> <br>
                <br>
                <br>
                <br>
                <span class="spinner-grow text-warning mb-5 mt-3"></span><br>
                <span class="spinner-grow text-warning mb-5"></span>
            </div>
            <div class="col-md-5 text-left">
                <div class="card-body" style="text-align: left;">
                    <br>
                    <h3>  Foster the emergence of new generation of creators</h3>

                    <br>
                    <h3> Help to implementation of
                        innovate projects with added
                        technological and industrial
                        capitat gain</h3>

                    <br>
                    <h3> Sustaining supported
                        businesses </h3>

                    <br>
                    <h3>  Encourage synergy between
                        universities and the economic
                        environment</h3>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../assets/img/Rectangle 7.png" class="img-fluid rounded-start" alt="..."
                    style="height: 500px; width: auto;">
            </div>
        </div>
    </div><!-- End Card with an image on left -->



    <br><br><br>
    <div class="container">
        <div class="card-body">
            <h2 class="card-title" style="font-size: 50px; color: #E6AA11;">ASC GIVES YOU</h2>
            <br>
            <p class="text-center"> Inspiring training and exchange Workshops <br> on the search for idea faesability
                study
            </p>
        </div>
    </div><!-- End Default Card -->

    <br><br><br>

    <div class="container">
        <div class="card-body">

            <!-- Dark Table -->
            <table class="table table-secondary text-center">

                <tbody class="container">
                    <tr class="tab">

                        <td>Profil of business build</td>
                        <td>Evaluation of idea</td>
                    </tr>
                    <tr class="tab">

                        <td>Market reasearch of marketing</td>
                        <td>Technical study</td>
                    </tr>
                    <tr class="tab">

                        <td>Fiscality</td>
                        <td>Profitability study</td>
                    </tr>
                    <tr class="tab">

                        <td>Business plan</td>
                        <td>Commercial technique</td>
                    </tr>

                </tbody>
            </table>
            <!-- End Dark Table -->

        </div>
    </div>


    <br><br><br>
    <div class="container">
        <div class="card-body">
            <h1 class="card-title fw-bold" style="color: #E6AA11; font-size: 50px;">OVERVIEW OF OUR SERVICE</h1>
            <br>
            <p class="text-center"> Inspiring training and exchange Workshops on the search for idea faesability
                study
            </p>
        </div>
    </div><!-- End Default Card -->

    <br><br><br>


    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
        <div class="container">


            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card text-center">
                            <div class="card-header " style="background-color: #F2F2F2;">
                                <h2>Training / <br>Coaching</h2> <br>
                                <h1 class="acces" style=" font-size: 90px; margin-top: -20px;">50<sup
                                        class="expo">€</sup> <span class="polis">Per Month</span></h1>
                            </div>
                            <div class="card-body">
                                <h3 class="acces">1 to 2 hours</h3>
                                <p class="card-text">One Workshop / week</p>
                                <h3 class="acces">Terms of Access</h3>
                                <h1 class="bull">___________</h1>
                                <ul>
                                    <li>To carry an idea</li>
                                    <li>Be available</li>
                                </ul>
                            </div>
                            <div class="card-footer text-muted " style="background-color: #2D9CDB; ">
                                <h2>ORDER NOW</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card text-center">
                            <div class="card-header" style="background-color: #F2F2F2;">
                                <h2>Training / <br>Coaching</h2> <br> <br>
                                <h1 class="acces" style=" font-size: 50px;">ON REQUEST</h1>
                            </div>
                            <div class="card-body">
                                <h3 class="acces">3 to 6 months</h3>
                                <p class="card-text">Period: As required</p>
                                <h3 class="acces">Sectors concerned</h3>
                                <h1 class="bull">___________</h1>
                                <ul>
                                    <li>Transformation and <br> Industralization</li>
                                    <li>Technologie & robotic</li>
                                    <li>IA</li>
                                </ul>
                                <h3 class="acces">Terms of Access</h3>
                                <h1 class="bull">___________</h1>
                                <ul>
                                    <li>Have a business plan</li>
                                    <li>Have the approval comittee</li>
                                </ul>
                            </div>
                            <div class="card-footer text-muted " style="margin-top: -20px;background-color: #2D9CDB;">
                                <h2> GET IN TOUCH</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card text-center">
                            <div class="card-header" style="background-color: #F2F2F2;">
                                <h2>Training / <br>Coaching</h2> <br> <br>
                                <h1 class="acces" style=" font-size: 50px;">ON REQUEST</h1>
                            </div>
                            <div class="card-body">
                                <h3 class="acces">Permanent</h3>
                                <p class="card-text">Period: As required</p>
                                <h3 class="acces">Sectors concerned</h3>
                                <h1 class="bull">___________</h1>
                                <ul>
                                    <li>Transformation and <br> Industralization</li>
                                    <li>Technologie & robotic</li>
                                    <li>IA</li>
                                </ul>
                                <h3 class="acces">Terms of Access</h3>
                                <h1 class="bull">___________</h1>
                                <ul>
                                    <li>Have an innovate project</li>
                                    <li>Curly financial Scheme</li>
                                </ul>
                            </div>
                            <div class="card-footer text-muted " style="background-color: #2D9CDB;margin-top: 23px;">
                                <h2> GET IN TOUCH</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal Order Form -->


    </section>
@endsection
