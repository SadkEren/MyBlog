@extends('layouts.default')


@section('header')

<header class="masthead" style="background-image: url('{{ asset('assets/img/about-bg.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>About Me</h1>
                    <span class="subheading">This is what I do.</span>
                </div>
            </div>
        </div>
    </div>
</header>

@endsection

@section('content')

<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

                
                <p>{{$gel2->aboutTitle }}</p>

                <p>{!! $gel2->aboutContent !!}</p>

                <img src="/images/{{$gel2->aboutImage}}" class="img-fluid" >
                
                
            </div>
        </div>
    </div>
</main>

@endsection