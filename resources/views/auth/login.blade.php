<!DOCTYPE html>
<html lang="en">

@include('website.attachments.head')

<body>

    <!-- header start-->
    @include('website.attachments.header')
    <!-- header-end -->
    <div style="{{ request()->is('/') ? '' : 'height:10rem; background-color:rgb(16, 27, 55);' }}"></div>


    <!-- User Login Form -->
    <div class="user-bgr">
        <div class="user-login m-0 pt-5 pb-5 px-5">
            <h1 class="user-title">Login Here</h1>
            <form method="POST" action="{{ route('login') }}" class="mt-4">
                @csrf
                <div class="row">
                    <!-- Email Input -->
                    <div class="col-md-12 mb-3">
                        <label for="email" class="col-form-label user-label">Email:</label>
                        <input type="email" class="form-control user-input" required placeholder="Enter Your Email"
                            id="email" name="email" value="{{old('email')}}">
                        @session('error')
                            <span class="text-danger">
                                {{ session('error') }}
                            </span>
                        @endsession
                    </div>

                    <!-- Password Input -->
                    <div class="col-md-12 mb-3">
                        <label for="password" class="col-form-label user-label">Password:</label>
                        <input type="password" class="form-control user-input" required
                            placeholder="Enter Your Password" id="password" name="password">
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-4 mb-1">
                        <!-- Register Link (Left-Aligned) -->
                        <div>
                            <a href="{{ route('register') }}"
                                style="color:#101b37; font-size: 18px; font-family: 'Jost', sans-serif;">Register</a>
                        </div>

                        <!-- Login Button (Right-Aligned) -->
                        <div>
                            <input type="submit" name="User-Login" value="Login" class="user-btn">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- user-login-form-->

    <!-- end -->
    @include('website.attachments.footer')

    @include('website.attachments.foot')
</body>

</html>
