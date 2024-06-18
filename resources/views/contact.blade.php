@extends('layout')
@section('base')
    <div class="cover-container d-flex w-auto h-100 flex-column col-md-12" style="background-image: url('../assets/img/Rectangle 58 (1).png')">
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
            <h1 style="font-size: 100px;font-weight: bold; color:white;">CONTACT</h1>
        </div>
    </div>

    <section>
        <div>
            <h2 style="color: #EB5757; text-align: center; font-weight: bold; margin: 50px auto;">HOW CAN WE HELP YOU</h2>
        </div> <br>
        <div class="row" style=" background-color: rgb(243, 241, 241); text-align: center; margin: auto;">
            <div class="card p-3 m-5" style="width: 30%; margin-left: 250px !important;">
                <p> <span style="border:solid 1px gray; border-radius: 50%; padding: 40px 10px;"><img style="background-color: #F2C94C; border-radius: 50%; padding: 5px;" height="80px" width="80px" src="../assets/img/Vector.png"
                    alt=""></span>
                <h6>GEOGRAPHIQUE LOCATION</h6>Calavi zokpa ,Maison Tossou</p>
            </div>
            <div class="card p-3 m-5" style="width: 30%">
                <p><span style="border:solid 1px gray; border-radius: 50%; padding: 40px 10px;">
                    <img style="background-color: #F2C94C; border-radius: 50%; padding: 5px;" height="80px" width="80px" src="../assets/img/Vector (1).png"
                        alt="">
                </span>
                <h6>LET'S TALK ON THE PHONE</h6>+229 96 00 22 36 <br> +229 95 00 22 36</p>
            </div>
            <div class="card p-3 m-5" style="width: 30%; margin-left: 250px !important;">
                <p> <span style="border:solid 1px gray; border-radius: 50%; padding: 40px 10px;"> <img style="background-color: #F2C94C; border-radius: 50%; padding: 5px;" height="80px" width="80px" src="../assets/img/Vector (2).png"
                    alt=""> </span>
                <h6>SEND US AN EMAIL</h6>africasamurai@gmail.com</p>
            </div>
            <div class="card p-3 m-5" style="width: 30%">
                <p>  <span style="border:solid 1px gray; border-radius: 50%; padding: 40px 10px;">   <img style="background-color: #F2C94C; border-radius: 50%; padding: 5px;" height="80px" width="80px" src="../assets/img/Vector (3).png"
                    alt=""></span>
                <h6>SCHEDULES</h6>Lun au Ven - 8h à 18h30</p>
            </div>
        </div><br><br>
        <div style="text-align: center;">
            <h2 style="color: #EB5757; font-weight: bold;">TELL US ABOUT YOUR PROJET</h2><br>

            <div class="container">
                <div class="row">
                    <div>
                        <form action="#" >
                            <div class="form-group row mb-3">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="Fisrt and Last name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Mail">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>

                            <div class="form-group row mb-3  mt-5">
                                <div class="col-md-12">
                                    <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5 m-0 mt-5"
                                        value="Send Message">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div><br>
            <h3 style="text-align: center; margin-top: 50px; font-weight:lighter;">TAKE A TOUR OF OUR PREMISES</h3><br>
            <img width="100%" src="../assets/img/Rectangle 86.png" alt="">
        </div>
    @endsection

