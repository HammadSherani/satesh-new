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
            <li><a href="{{ url('contact.html') }}">Contact</a></li>
        </ul>

        <!-- Login/Logout Button -->
        <div class="hero-btn m-0 p-0">
            <!-- If User is Not Logged In -->
            <a href="{{ route('login') }}">
                <button type="button" class="login-btn">Login</button>
            </a>
            <i id="menu" class="fas fa-bars"></i>
        </div>
    </header>
</div>
