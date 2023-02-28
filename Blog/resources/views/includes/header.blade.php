 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        @isset($gel2)
          <a class="navbar-brand" href="{{url('/')}}">{{$gel2->navbarTitle}}</a>
        @endisset
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('/page/about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('/page/contact')}}">Contact</a></li>
                <li class="nav-item">

                    @if (Route::has('login'))
                   
                        @auth
                          
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Home
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <br>
                                <x-dropdown-link :href="url('page.addPost')">
                                    Add Post
                                </x-dropdown-link>

                              <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                              </form>
                            </ul>
                          </div>

                          
                        @else


                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Login/Register
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li> <a href="{{ route('login') }}" class="nav-link ">Log in</a></li>
                              <li>
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link ">Register</a>
                                    @endif
                              </li>
                             
                            </ul>
                          </div>
                 
                        @endauth
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header-->
