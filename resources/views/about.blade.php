@extends('layout')
@section('base')
    <div class="cover-container d-flex w-auto h-100 flex-column col-md-12">
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
            <h1 style="font-size: 100px;font-weight: bold; color:white;">ABOUT US</h1>
        </div>
    </div>

    <main>
        <div class="section1 pb-5">
            <h1 class="fw-bold">ASC</h1>
            <p class="lead">Africa Samurai is a partner in Africa to inform decisions with
                evidence, in order to improve the education and professional
                integration of African children and young people</p>
        </div>

        <div class="d-flex my-5 mx-auto pb-5">
            <div class="col-md-6 mx-3 text-justify my-auto">
                <h1 style="color: #EB5757;" class="fw-bold">OUR VISION</h1>
                <p class="col-md-6 text-justify mx-auto mt-5">Lorem Ipsum is simply dummy text of
                    the printing and typesetting industry.
                    Lorem Ipsum has been the industry's
                    standard dummy text ever since the
                    1500s, when an unknown printer took
                    a galley of type and scrambled it to
                    make a type specimen book. It has
                    survived not only five centuries, but
                    also the leap into electronic typesetting,
                    remaining essentially unchanged. It
                    was popularised in the 1960s with the
                    release of Letraset sheets containing
                    Lorem Ipsum passages, and more </p>
            </div>
            <div class="">
                <img src="../assets/img/Rectangle 59.png" alt="" height="600" width="500">
            </div>
        </div>

        <div class="d-flex my-5 mx-auto pt-5">
            <div class="mx-5">
                <img src="../assets/img/Rectangle 60.png" alt="" height="600" width="500">
            </div>
            <div class="col-md-6  text-justify my-auto">
                <h1 style="color: #EB5757;" class="fw-bold">OUR APPROCH</h1>
                <p class="col-md-6 text-justify mx-auto mt-5">Lorem Ipsum is simply dummy text of
                    the printing and typesetting industry.
                    Lorem Ipsum has been the industry's
                    standard dummy text ever since the
                    1500s, when an unknown printer took
                    a galley of type and scrambled it to
                    make a type specimen book. It has
                    survived not only five centuries, but
                    also the leap into electronic typesetting,
                    remaining essentially unchanged. It
                    was popularised in the 1960s with the
                    release of Letraset sheets containing
                    Lorem Ipsum passages, and more </p>
            </div>
        </div>

        <div class="col-md-10 mt-5 pt-5 mx-auto">

            <h1 style="color: #EB5757;" class="fw-bold">OUR TEAM</h1>
            <p class="col-md-6 text-justify mx-auto mt-5">Lorem Ipsum is simply dummy text of
                the printing and typesetting industry.</p>


            <div class="mx-auto d-flex mt-5">
                <div class="col-md-4 shadow-lg p-5 mx-3">
                    <img src="../assets/img/Group 4.png" alt="" width="150" height="130">
                    <h5>ATTO PAUL</h5>
                    <h6>Directeur Général</h6>
                    <p>
                        <img src="../assets/img/Group 1.png" alt="" width="10" height="20">
                        Cotonou Bénin
                    </p>
                </div>
                <div class="col-md-4 shadow-lg p-5 mx-3">
                    <img src="../assets/img/Group 4.png" alt="" width="150" height="130">
                    <h5>ATTO PAUL</h5>
                    <h6>Directeur Général</h6>
                    <p>
                        <img src="../assets/img/Group 1.png" alt="" width="10" height="20">
                        Cotonou Bénin
                    </p>
                </div>
                <div class="col-md-4 shadow-lg p-5 mx-3">
                    <img src="../assets/img/Group 4.png" alt="" width="150" height="130">
                    <h5>ATTO PAUL</h5>
                    <h6>Directeur Général</h6>
                    <p>
                        <img src="../assets/img/Group 1.png" alt="" width="10" height="20">
                        Cotonou Bénin
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
