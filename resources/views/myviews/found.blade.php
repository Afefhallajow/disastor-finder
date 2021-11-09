@extends('layouts.app')
@section('content')
    <!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title style="text-align: center"
    >add ill</title>
    <style>

        .af{
            height:100px;

            line-height:30px;
            color:red;
            background-color:#e3e3e3;
            margin-top:0px;
            display:none;
        }
        .p
        {
            background-color:yellow;
            display:block;
            float:left;
            margin-top:0px;
            text-align:center;
            line-height:0px;
            height:50px;

            width:140px;
            font-size:20px;
            color:blue;

        }

        li
        {
            display:inline;
            padding:10px

        }

        table{
            background-color: black;
            vertical-align: center;
            text-align: center;
            font-size: 20px;
        }
        tr{
            text-align: center;
        }
        td{
            text-align: center;
        }
        label{
            color: red;
            font-size: 25px;
        }
        input{

            color: red;
        }
        body
        {
            background-color: #e2e8f0;
        }
    </style>

</head>
<body >
{{csrf_field()}}
<header class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 header-logo">
                <br>
                <a ><img src="{{ asset('images/logo.png') }}" alt="" class="img-responsive logo"></a>
            </div>

            <div class="col-md-7">
                <nav class="navbar navbar-default">
                    <div class="container-fluid nav-bar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="menu active" href="/" >Home</a></li>
                                <li><a class="menu" href="#about">about us</a></li>
                                <li><a class="menu"onclick="ShowAndHide()" href="#service">our services </a></li>
                                <li><a class="menu" onclick="ShowAndHide1()" href="#team">our team</a></li>
                                <li><a class="menu" onclick="ShowAndHide2()" href="#contact"> contact us</a></li>
                            </ul>
                        </div><!-- /navbar-collapse -->
                    </div><!-- / .container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header> <!-- end of header area -->
<section>
    <div style="text-align: center;padding-top: 175px" >
        <div  style="background-color: #4e555b;height: 200px;margin-top: 20px " class="container" >
            <div class="row"style="margin-top: 50px" >

                <h1 style="color: white"> illness found please try again with new parameter</h1>
            </div>
        </div>
    </div>
</section>  <!-- end of logic  -->

<SCRIPT>
    function ShowAndHide() {
        var x = document.getElementById('service');
        if (x.style.display == 'none') {
            x.style.display = 'block';

        } else {
            x.style.display = 'none';
        }
    }

</SCRIPT>
<SCRIPT>
    function ShowAndHide1() {
        var x = document.getElementById('team');
        if (x.style.display == 'none') {
            x.style.display = 'block';

        } else {
            x.style.display = 'none';
        }
    }

</SCRIPT>
<SCRIPT>
    function ShowAndHide2() {
        var x = document.getElementById('contact');
        if (x.style.display == 'none') {
            x.style.display = 'block';

        } else {
            x.style.display = 'none';
        }
    }

</SCRIPT>


<section style="display: none"  class="service text-center" id="service">

    <div class="container">
        <a class="row">


            <!-- guest service -->

            <h2>our services</h2>
            <h4>we ensure that every services we give is </h4>
            @guest()
                <a href="/search_name">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-service">
                            <div class="single-service-img">
                                <div class="service-img">
                                    <img class="knee img-responsive" src="{{ asset('images/service3.png') }}" alt="">
                                </div>
                            </div>
                            <h3>search for ill by name</h3>
                        </div>
                    </div>
                </a>

            @endif
            @if( (!\Illuminate\Support\Facades\Auth::guest() &&\Illuminate\Support\Facades\Auth::user()->isdoctor == 1) ||(!\Illuminate\Support\Facades\Auth::guest() &&\Illuminate\Support\Facades\Auth::user()->ispatent == 1) ||(!\Illuminate\Support\Facades\Auth::guest() &&\Illuminate\Support\Facades\Auth::user()->isadmin == 1) )

                <a href="/search_name">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-service">
                            <div class="single-service-img">
                                <div class="service-img">
                                    <img class="knee img-responsive" src="{{ asset('images/service3.png') }}" alt="">
                                </div>
                            </div>
                            <h3>search for ill by name</h3>
                        </div>
                    </div>
                </a>

            @endif



        <!-- doctor -->




            @if( (!\Illuminate\Support\Facades\Auth::guest() &&\Illuminate\Support\Facades\Auth::user()->isdoctor == 1) )

                <a href="/add">

                    <div class="col-md-3 col-sm-6">
                        <div class="single-service">
                            <div class="single-service-img">
                                <div class="service-img">
                                    <img class="heart img-responsive" src="{{ asset('images/service1.png') }}" alt="">
                                </div>
                            </div>
                            <h3>add  illnesses </h3>
                        </div>
                    </div>
                </a>
                <a href="/edit1">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-service">
                            <div class="single-service-img">
                                <div class="service-img">

                                    <img class="brain img-responsive" src="{{ asset('images/service2.png') }}" alt="">

                                </div>
                            </div>
                            <h3>edite illness</h3>
                        </div>
                    </div>
                </a>
                <a href="/sta">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-service">
                            <div class="single-service-img">
                                <div class="service-img">
                                    <img class="knee img-responsive" src="{{ asset('images/service3.png') }}" alt="">
                                </div>
                            </div>
                            <h3>Show Stactics</h3>
                        </div>
                    </div>
                </a>
                <a href="/del">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-service">
                            <div class="single-service-img">
                                <div class="service-img">
                                    <img class="bone img-responsive" src="{{ asset('images/service4.png') }}" alt="">
                                </div>
                            </div>
                            <h3>Dellet illness</h3>
                        </div>

                    </div>
                </a>
            @endif
        <!-- patent -->

            @if((!\Illuminate\Support\Facades\Auth::guest() &&\Illuminate\Support\Facades\Auth::user()->ispatent == 1)  )
                <a href="/search">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-service">
                            <div class="single-service-img">
                                <div class="service-img">
                                    <img class="brain img-responsive" src="{{ asset('images/service2.png') }}" alt="">

                                </div>
                            </div>
                            <h3>Search for ill by symptom</h3>
                        </div>
                    </div>
                </a>
            @endif


        <!-- admin -->
            @if((!\Illuminate\Support\Facades\Auth::guest() &&\Illuminate\Support\Facades\Auth::user()->isadmin == 1)  )

                <a href="/gets">


                    <div class="col-md-3 col-sm-6">
                        <div class="single-service">
                            <div class="single-service-img">
                                <div class="service-img">
                                    <img class="bone img-responsive" src="{{ asset('images/service4.png') }}" alt="">
                                </div>
                            </div>                                      <h3>Get doctor Request</h3>
                        </div>
                    </div>
                </a>



        @endif



    </div>
    </div>

</section><!-- end of service section -->
<section style="display: none" class="team" id="team">
    <div  class="container" >
        <div class="row">
            <div class="team-heading text-center">
                <h2>our team</h2>
                <h4>BAM is an expert company that produces intelligent and modern application  , stay safe be safe and keep safe together to save our world</h4>
            </div>
            <div style="float: right">
                <div  class="col-md-2 single-member col-sm-4">
                    <div class="person">
                    </div>
                </div>

                <div style="width: 100px" class="col-md-2 single-member col-sm-4">
                    <div class="person">
                    </div>
                </div>


                <div style="" class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img style="height: 200px;" class="img-responsive" src="{{ asset('images/3.jpg') }}" alt="member-3">
                    </div>
                    <div class="person-detail">
                        <div  class="arrow-bottom"></div>
                        <h3>Bassel abo mahmoud</h3>
                        <p>BAM is an expert company that produces intelligent and modern application  , stay safe be safe and keep safe together to save our world </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>afef hallajow

                        </h3>
                        <br>
                        <p>BAM is an expert company that produces intelligent and modern application  , stay safe be safe and keep safe together to save our world </p>
                    </div>
                    <div class="person">
                        <img style="height: 213px;" class="img-responsive" src="{{ asset('images/4.jpg') }}" alt="member-4">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img style="height: 200px;" class="img-responsive" src="{{ asset('images/5.jpg') }}" alt="member-5">
                    </div>
                    <div class="person-detail">
                        <div  class="arrow-bottom"></div>
                        <h3>Mhee aldeen Algzally</h3>
                        <p>BAM is an expert company that produces intelligent and modern application  , stay safe be safe and keep safe together to save our world </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of team section -->
<div style="display: none" class="api-map" id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 map" id="map"></div>
        </div>

        <section style="display: block" class="contact" id="" >
            @if( (!\Illuminate\Support\Facades\Auth::guest() &&\Illuminate\Support\Facades\Auth::user()->isdoctor == 0) && (!\Illuminate\Support\Facades\Auth::guest() &&\Illuminate\Support\Facades\Auth::user()->isadmin == 0)  )

                <div class="container">
                    <div class="row">

                        <div class="contact-caption clearfix">
                            <div class="contact-heading text-center">
                                <h2>contact us</h2>
                            </div>
                            <div class="col-md-5 contact-info text-left">
                                <h3>contact information</h3>
                                <div class="info-detail">
                                    <ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
                                    <ul><li><i class="fa fa-map-marker"></i><span>Address:</span>   , damascus, syria, </li></ul>
                                    <ul><li><i class="fa fa-phone"></i><span>Phone:</span> +963 953350315</li></ul>
                                    <ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
                                    <ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-1 contact-form">
                                <h3> add  new  doctor request</h3>

                                <form  action="/addnew" method="get" role="form">
                                    <input class="name" type="text" name="name" placeholder="Name">
                                    <input class="" type="text" name="country" placeholder="country">
                                    <input class="email" name="email" type="email" placeholder="Email">
                                    <input class="phone" name="phone" type="text" placeholder="Phone No:">
                                    <input class="" type="text" name="experience_year" placeholder="experience year">
                                    <input class="" type="text" name="study" placeholder="study">
                                    <input class="" type="text" name="university_name" placeholder="university name">
                                    <input class="message" name="additional_data" id="message" cols="30" rows="10" placeholder="additional data">
                                    <input class="submit-btn"  style="color: black" type="submit" value="SUBMIT"> </input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div  style="text-align: center" class="container">
                    <div class="row">
                        <br>
                        <br>
                        <h1  style="color: white;margin-top: 200px">you cant use this option</h1>
                    </div>
                </div>
            @endif
        </section><!-- end of contact section -->
    </div>
</div><!-- end of map section -->

</body>


</html>

@endsection
