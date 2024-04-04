@extends('website.layouts.main')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h3 class="w3l_header">
                        INSP<span>ÍRATE</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="gallery-page">
    <div class="container">
        <div class="row masonary-layout custom-gallery-style">
            <!--Gallery Page Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 custom-gallery-style1">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento1.png')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento1.png"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 custom-gallery-style2">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento2.png')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento2.png"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 custom-gallery-style3">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento1.svg')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento1.svg"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 custom-gallery-style4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento2.svg')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento2.svg"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 custom-gallery-style5">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento2.svg')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento2.svg"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 custom-gallery-style6">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento4.svg')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento4.svg"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 custom-gallery-style7">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento5.svg')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento5.svg"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 custom-gallery-style8">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento7.svg')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento7.svg"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 custom-gallery-style9">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento6.svg')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento6.svg"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start-->
            <div class="col-xl-6 col-lg-6 col-md-6 custom-gallery-style10" >
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('images/tratamiento9.png')}}" alt="">
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="images/tratamiento9.png"><span class="fa fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
        </div>
    </div>
</section>

@section('scripts')
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/galeria.js')}}"></script>
@endsection
@endsection
