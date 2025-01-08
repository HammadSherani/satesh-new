<div class="main-header">
    <header class="header {{ request()->is('/') ? '' : 'sticky' }}" id="music-header">

        <!-- Dynamic Logo -->
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('website/images/extraffairslogo.webp') }}" alt="extra-logo">
        </a>

        <!-- Navbar -->
        <ul class="navbar">
            <!-- Dynamic Pages -->
            {{-- @foreach ($pages as $page) --}}
            <li>
                <a href="/">Home</a>
            </li>

            <li>
                <a href="/">ADs</a>
            </li>

            <li>
                <a href="/">Contact Us</a>
            </li>
            {{-- @endforeach --}}

            <!-- Dynamic Locations Dropdown -->
            <li>
                <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Location <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu rounded-1">
                    {{-- @foreach ($locations as $location)
                    @if ($location->inHeader)
                    <li>
                        <a class="dropdown-item" href="{{ url($location->slug) }}">{{ $location->name }}</a>
                    </li>
                    @endif
                    @endforeach --}}

                    <li>
                        <a class="dropdown-item" href="#">Dedli</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Noida</a>
                    </li>
                </ul>
            </li>

            <!-- Static Links -->
            <li><a href="{{ url('blog.html') }}">Blog</a></li>
            <li><a href="{{ url('contact.html') }}">Contact</a></li>
        </ul>

        <!-- Login/Logout Button -->
        <div class="hero-btn m-0 p-0">
            <!-- If User is Not Logged In -->
            <a href="{{url('login.html')}}">
                <button type="button" class="login-btn">Login</button>
            </a>
            <i id="menu" class="fas fa-bars"></i>
        </div>
    </header>
</div>