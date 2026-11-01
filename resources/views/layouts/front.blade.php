<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title>Blog Home - Twee Blog</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('blog-home/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column min-vh-100">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('index')}}">tWee Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                             
                               @php
                                    $categories = \App\Models\Category::all();
                               @endphp




                                @foreach($categories as $category)
                                     <li><a class="dropdown-item" href="{{route('posts.category', $category->id)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @guest
                        <a href="/login" class="btn mx-3 my-1 btn-secondary">Login</a>
                        <a href="/register" class="btn btn-primary my-1">Register</a>
                        @else
                        <div class=" dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{Auth::user()->name}}</a>
                            <ul class="dropdown-menu">
                                @if(Auth::user()->role == 'User')
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                @else
                                <li><a class="dropdown-item" href="/admin">Admin Pannel</a></li>
                                @endif
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
        
                        @endif
                    </ul>
                </div>
            </div>
        </nav>



        @yield('content')



        <!-- Footer-->
        <footer class="py-5 bg-dark mt-auto">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; All Right Reserved tWee Blog!</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('blog-home/js/scripts.js')}}"></script>

        
    </body>
</html>
