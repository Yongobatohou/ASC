@extends('layout')
@section('base')
    <div class="cover-container d-flex w-auto h-100 flex-column col-md-12"
        style="background-image: url('../assets/img/Rectangle 58 (1).png')">
        <header class="mb-0">
            <div class="mx-5">
                <h3 class="float-md-start mx-5 px-5"><img src="../assets/img/logoasc.png" alt="" height="70"
                        width="60"></h3>
                <nav class="nav nav-masthead justify-content-center pt-3 float-md-end">
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="{{ route('home') }}">Home</a>
                    <a class="nav-link fw-bold py-1 px-0" href="{{ route('about') }}">About Us</a>
                    <a class="nav-link fw-bold py-1 px-0" href="{{ route('services') }}">Our Services</a>
                    <a class="nav-link fw-bold py-1 px-0" href="{{ route('contact') }}">Contact</a>
                </nav>
            </div>
        </header>
        <div style="margin:auto;">
            <h1 style="font-size: 100px;font-weight: bold; color:white;">OUR SERVICES</h1>
        </div>
    </div>

    <h1 style="color: #EB5757; text-align: center; font-weight: bold; margin: 50px auto;"> OUR SERVICES </h1>


    <div class="row mb-5" style=" background-color: #F2F2F2; text-align: center; margin: 50px auto;">
        <div class="col-md-12 d-flex">
            <div class="card p-3 m-5 rounded-5 shadow-lg"
                style="width: 30%; margin-left: 170px !important; background-color: #F2C94C">
                <h4 class="mb-2">Training / Coaching</h4>
                <hr class="mt-5 mb-4 bg-secondary" style="height: 5px;">
                <p>Lorem ipsum dolor sit amet</p>
                <p>Lorem ipsum dolor sit amet</p>
                <p>Lorem ipsum dolor sit amet</p>
                <button class="btn btn-light mt-4">Learn more <img src="../assets/img/Vector (4).png" width="20"
                        height="20" alt=""></button>
            </div>
            <div class="card p-3 m-5 rounded-5 shadow-lg" style="width: 30%; margin-left: 170px !important;">
                <h4 class="mb-2">Training / Coaching <br> Request</h4>
                <hr class="mt-5 mb-4" style="height: 5px; background-color:gray;">
                <p>Lorem ipsum dolor sit amet</p>
                <p>Lorem ipsum dolor sit amet</p>
                <p>Lorem ipsum dolor sit amet</p>
                <button class="btn btn-light mt-4">Learn more <img src="../assets/img/Vector (4).png" width="20"
                        height="20" alt=""></button>
            </div>
        </div>
        <div class="col-md-12 d-flex">
            <div class="card p-3 m-5 rounded-5 shadow-lg" style="width: 30%; margin-left: 170px !important;">
                <h4 class="mb-2">Accommodation</h4>
                <hr class="mt-5 mb-4" style="height: 5px; background-color:gray;">
                <p>Lorem ipsum dolor sit amet</p>
                <p>Lorem ipsum dolor sit amet</p>
                <p>Lorem ipsum dolor sit amet</p>
                <button class="btn btn-light mt-4">Learn more <img src="../assets/img/Vector (4).png" width="20"
                        height="20" alt=""></button>
            </div>
            <div class="card p-3 m-5 rounded-5 shadow-lg" style="width: 30%; margin-left: 170px !important;">
                <h4 class="mb-2">Accompagnement</h4>
                <hr class="mt-5 mb-4" style="height: 5px; background-color:gray;">
                <p>Lorem ipsum dolor sit amet</p>
                <p>Lorem ipsum dolor sit amet</p>
                <p>Lorem ipsum dolor sit amet</p>
                <button class="btn btn-light mt-4">Learn more <img src="../assets/img/Vector (4).png" width="20"
                        height="20" alt=""></button>
            </div>
        </div>
    </div>


    <div class="row mb-5 py-5 mx-0" style="background-color: #F2F2F2; margin-top:150px">
        <div class="col-md-3" style="padding:0px !important; border-right:solid 3px rgba(128, 128, 128, 0.404);">
            <img width="50" height="50" src="../assets/img/Vector (5).png" alt="">
            <h1 class="my-3" style="color:#EB5757;">120</h1>
            <h6>Happy Clients</h6>
        </div>
        <div class="col-md-3" style="padding:0px !important; border-right:solid 3px rgba(128, 128, 128, 0.404);">
            <img width="50" height="50" src="../assets/img/Vector (6).png" alt="">
            <h1 class="my-3" style="color:#EB5757;">289</h1>
            <h6>Customers</h6>
        </div>
        <div class="col-md-3" style="padding:0px !important; border-right:solid 3px rgba(128, 128, 128, 0.404);">
            <img width="50" height="50" src="../assets/img/Vector (7).png" alt="">
            <h1 class="my-3" style="color:#EB5757;">56</h1>
            <h6>Our Branches</h6>
        </div>
        <div class="col-md-3" style="padding:0px ;">
            <img width="50" height="50" src="../assets/img/Vector (8).png" alt="">
            <h1 class="my-3" style="color:#EB5757;">1250</h1>
            <h6>Successfully</h6>
        </div>
    </div>

    <div class="row last mx-0">
        <div class="col-md-5">
            <img class="imge" src="../assets/img/Rectangle 99.png" alt="">
        </div>
        <div class="col-md-7 mt-5 pt-4">
            <h2 class="fw-light">TESTIMONIALS</h2>
            <h2 class="fw-bold">Happy Client Say’s About Our Company</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryand ty</p>

            <div class="p-5 experience" style="background-color: #F2F2F2;">
                <h2 class="fw-bold">Wonderful Experience </h2>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
                <p>Lorem Ipsum is simply dummy</p>
                <div class="d-flex text-center my-auto" style="background-color: white;">
                    <div class="d-flex mx-5 my-5">
                        <img class="px-2" src="../assets/img/Vector (9).png" width="50" height="35"
                            alt="">
                        <img class="px-2" src="../assets/img/Vector (9).png" width="50" height="35"
                            alt="">
                        <img class="px-2" src="../assets/img/Vector (9).png" width="50" height="35"
                            alt="">
                        <img class="px-2" src="../assets/img/Vector (9).png" width="50" height="35"
                            alt="">
                    </div>
                    <div class="text-center my-auto">
                        <h2>ASSOU Firmina</h2>
                        <p>Comunity Manager</p>
                    </div>

                </div>
                <img class="pro" src="../assets/img/Ellipse 18.png" width="200px" height="200px"
                        alt="">
            </div>
        </div>
    </div>
@endsection
