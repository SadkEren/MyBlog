@extends('layouts.default')


@section('header')

<header class="masthead" style="background-image: url('{{ asset('assets/img/contact-bg.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Contact Me</h1>
                    <span class="subheading">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>

@endsection

@section('content')

 <div style="text-align: center" class="container px-4 px-lg-5"> 
    <div class="row gx-4 gx-lg-5 justify-content-center">    
        <div class="col-md-10 col-lg-8 col-xl-7">
            @foreach ($gel as $a)
                <a href="mailto:{{$a->email}}"><p><b>Email</b> : {{$a->email}}</p></a><hr>
                <a>                            <p><b>Phone</b> : {{$a->phone}}</p></a><hr>
                <a target="_blank" href="{{$a->instagram}}"><p><b>Instagram</b></p></a><hr>
                <a target="_blank" href="{{$a->twitter}}"  ><p><b>Twitter  </b></p></a><hr>
                <a target="_blank" href="{{$a->linkedin}}" ><p><b>Linkedin </b> </p></a>
            @endforeach    
        </div>
    </div>
</div>

@endsection