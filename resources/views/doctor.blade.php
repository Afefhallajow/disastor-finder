@extends('layouts.app')

@section('content')

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
                                    <li><a class="menu active" href="#home" >Home</a></li>
                                    <li><a class="menu" href="#about">about us</a></li>
                                    <li><a class="menu" onclick="ShowAndHide()" href="#service">our services </a></li>
                                    <li><a class="menu" href="#team">our team</a></li>
                                    <li><a class="menu" href="#contact"> contact us</a></li>


                                </ul>
                                <div style="  margin-right: -27px;  margin-top: -140px; ;display: inline-block;float: right">
                                    <ul class="nav navbar-nav navbar-right">
                                    @guest
                                        @if (Route::has('login'))
                                            <li style=" display:inline-block;" class="n">
                                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li style="display: inline-block" class="">
                                                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="">
                                            <a id="navbarDropdown" class="nav navbar-nav navbar-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu drown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <h3 style="background-color: #4e555b ;color: wheat">
                                                    {{ __('Logout') }}
                                                        </h3>

                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest

                                    </ul>

                                </div>





                            </div><!-- /navbar-collapse -->
                        </div><!-- / .container-fluid -->
                    </nav>
                </div>
            </div>
        </div>

    </header> <!-- end of header area -->

    <section class="slider" id="home">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="header-backup"></div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('images/slide-one.jpg') }}" alt="">
                            <div class="carousel-caption">
                                <h1>providing</h1>
                                <p>highquality service for men &amp; women</p>
                                <button>learn more</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/slide-two.jpg') }}" alt="">
                            <div class="carousel-caption">
                                <h1>providing</h1>
                                <p>highquality service for men &amp; women</p>
                                <button>learn more</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/slide-three.jpg') }}" alt="">
                            <div class="carousel-caption">
                                <h1>providing</h1>
                                <p>highquality service for men &amp; women</p>
                                <button>learn more</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/slide-four.jpg') }}" alt="">
                            <div class="carousel-caption">
                                <h1>providing</h1>
                                <p>highquality service for men &amp; women</p>
                                <button>learn more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section><!-- end of slider section -->


    <!-- about section -->
    <section class="about text-center" id="about">
        <div class="container">
            <div class="row">
                <h2>about us</h2>
                <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail clearfix">
                        <div class="about-img">
                            <img class="img-responsive" src="{{ asset('images/item1.jpg') }}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>C</h1>
                            </div>
                            <h3>Children’s specialist</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="{{ asset('images/item2.jpg') }}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>W</h1>
                            </div>

                            <h3>Children’s specialist</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="{{ asset('images/item3.jpg') }}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>M</h1>
                            </div>
                            <h3>Children’s specialist</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of about section -->


    <!-- service section starts here -->
    <section  class="service text-center" id="service">

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


    <!-- team section -->
    <section  class="team" id="team">
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

    <!-- map section -->
    <div class="api-map" id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 map" id="map"></div>
            </div>
        </div>
    </div><!-- end of map section -->

    <!-- contact section starts here -->
    <section class="contact"  >
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

    <!-- footer starts here -->
    <footer class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 footer-para">
                    <p>&copy;B A M All right reserved</p>
                </div>
                <div class="col-xs-6 text-right">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-skype"></i></a>
                </div>
            </div>
        </div>
    </footer>



@endsection
