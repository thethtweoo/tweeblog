@extends('layouts.front')
@section('content')


        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container ">
                <div class="text-center my-5 ">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    @if($lastPost = $posts->last())
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{$lastPost->image}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$lastPost->created_at->format('F d, Y')}}</div>
                            <h2 class="card-title">{{$lastPost->title}}</h2>
                            <p class="card-text">{{$lastPost->description}}</p>
                            <a class="btn btn-primary" href="{{route('read.more', $lastPost->id)}}">Read more →</a>
                        </div>
                    </div>
                    @endif
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                    
                    @foreach($posts as $post)
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{$post->image}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$post->created_at->format('F d, Y')}}</div>
                                    <h2 class="card-title h4">{{$post->title}}</h2>
                                    <p class="card-text">{{$post->description}}</p>
                                    <a class="btn btn-primary" href="{{route('read.more', $post->id)}}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    {{$posts->links()}}
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        
@endsection        
        
