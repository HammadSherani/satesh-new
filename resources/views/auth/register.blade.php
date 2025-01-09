<!DOCTYPE html>
<html lang="en">

    @include('website.attachments.head')
<body>

    <!-- header start-->
    @include('website.attachments.header')
    <!-- header-end -->
    <div style="{{ request()->is('/') ? '' : 'height:10rem; background-color:rgb(16, 27, 55);'}}"></div>
    <!-- user-register-form-->
    <div class="user-bgr">
        <div class="user-login m-0 pt-5 pb-5 px-5 w-100">
            <h1 class="user-title">Create Account</h1>
            <img src="" alt="">
            <form action="{{route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label user-label">Full Name:</label>
                        <input type="name" class="form-control user-input" required placeholder="Name" value="{{old('name')}}"
                            id="recipient-name" name="name">
                            @error('name')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="message-text" class="col-form-label user-label">Email:</label>
                        <input type="email" class="form-control user-input" required placeholder="Email" value="{{old('email')}}"
                            id="recipient-email" name="email">
                            @error('email')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label user-label">Phone no:</label>
                        <input type="text" class="form-control user-input" required placeholder="Phone" value="{{old('phone')}}"
                            id="recipient-phone" name="phone">
                            @error('phone')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="message-text" class="col-form-label user-label ">Profile Picture:</label>
                        <input type="file" class="form-control user-input" id="recipient-name" required name="profile_picture">
                        @error('message')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="message-text" class="col-form-label user-label">Password:</label>
                        <input type="password" class="form-control user-input" required hash placeholder="Password"
                            id="recipient-name" name="password">
                            @error('password')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="message-text" class="col-form-label user-label">Confirm Password:</label>
                        <input type="password" class="form-control user-input" required hash
                            placeholder="Confirm Password" id="recipient-name" name="password_confirmation">
                            @error('password_confirmation')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-1">
                        <!-- Left-aligned Login link -->
                        <div>
                            <a href="./login.html" style="color:#101b37; font-size: 18px; font-family: 'Jost', sans-serif;">Login</a>
                        </div>
                        
                        <!-- Right-aligned Create button -->
                        <div>
                            <input type="submit" name="User-Register" value="Create" class="user-btn">
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    <!-- user-register-form-->


    <!-- user-login-form-->
    
        <!-- end -->
        @include('website.attachments.footer')

        @include('website.attachments.foot')
</body>

</html>