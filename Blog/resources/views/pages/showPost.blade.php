@extends('layouts.default')


@section('header')
<header class="masthead" style="background-image: url('{{ asset('assets/img/post-sample-image.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{$gel2->upTitle}}</h1>
                    <h2 class="subheading">{{$gel2->title}}</h2>
                    <span class="meta">
                        Posted by
                        <a href="#!">{{$gel2->userName}}</a>
                        {{$gel2->created_at}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')


<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                {!! $gel3->content !!}

                <img src="/images/{{$gel3->postImage}}" class="img-fluid" alt="...">
                
            </div>
        </div>
    </div>
</article>


@endsection