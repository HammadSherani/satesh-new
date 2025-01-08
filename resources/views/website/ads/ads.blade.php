<html lang="en">
@include('website.attachments.head')

<body data-new-gr-c-s-check-loaded="14.1196.0" data-gr-ext-installed="">
    @include('website.attachments.header')
    <!-- Blog Page Section Start -->
    <section class="artist-page-section">
        <div class="artist-main" style="margin-top: 7rem;">

            <!-- Blog Header -->
            <div class="artist-profile-img">
                <div class="artist-box">
                    <div class="artist-img">
                        <img src="{{ asset('website/images/extraffairslogo.webp') }}" alt="Extraffairs Logo">
                    </div>
                    <div class="artist-content">
                        <h1>Extraffairs Blog</h1>
                        <h4>Subscribe to Our Newsletter</h4>
                        <p>Follow Us:
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Blog Tabs Section -->
            <div class="artist-music-box">
                <div class="artist-row p-5">
                    {{-- @foreach ($ads as $ad) --}}
                        <div class="mb-5 p-5 border border-white rounded text-white row">
                            <div class="col-md-9 relative">
                                <a href="#" class="text-decoration-none">
                                    <h3>
                                        Lorem ipsum
                                    </h3>
                                </a>
                                <p>
                                    <span>Lorem ipsum </span>
                                    <span>Lorem ipsum </span>
                                    {{-- <span>| {{$ad->gender}} |</span> --}}
                                    <span>Visakhapatnam</span>
                                </p>
                                <h5>
                                    Lorem ipsum
                                </h5>
                                <div class="mt-3 d-flex align-items-center">
                                    <a href="tel:Lorem ipsum"
                                        {{-- style="width: 300px" --}}
                                        class="text-decoration-none bg-success px-3 py-3 text-white rounded  d-flex justify-item-center " style="font-size: 16px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill="#FFFFFF"
                                                d="M12 0C5.373 0 0 5.373 0 12c0 2.12.553 4.091 1.521 5.797L0 24l6.354-1.667A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22a9.94 9.94 0 01-5.019-1.364l-.357-.213-3.775 1L3.59 17.86l-.213-.357A9.942 9.942 0 012 12c0-5.523 4.478-10 10-10s10 4.477 10 10-4.478 10-10 10zm5.393-7.856c-.283-.142-1.679-.828-1.94-.922-.26-.095-.449-.142-.637.141-.188.283-.729.922-.894 1.11-.166.188-.33.213-.614.071-.283-.141-1.195-.44-2.275-1.404-.84-.75-1.404-1.677-1.57-1.96-.166-.283-.018-.437.124-.599.127-.127.283-.33.424-.495.141-.165.188-.283.283-.472.095-.188.048-.354-.023-.495-.071-.142-.637-1.533-.872-2.098-.23-.553-.467-.478-.637-.487-.166-.01-.354-.012-.543-.012s-.495.071-.754.354c-.26.283-.989.969-.989 2.363s1.013 2.74 1.156 2.929c.142.188 2.005 3.065 4.861 4.296 1.629.702 2.269.755 3.089.661.495-.06 1.678-.683 1.914-1.342.236-.66.236-1.224.165-1.342-.071-.118-.26-.188-.543-.33z" />
                                        </svg>
                                        
                                    </a>
                                    <button class="bg-info mx-3 p-3 text-white rounded ">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" fill="#e8eaed">
                                            <path
                                                d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                                        </svg>
                                    </button>
                                </div>

                            </div>
                            <div class="col-md-3 d-flex justify-content-end">
                                <img src="website/uploads/models/profile/1811189228879267.webp" alt=""
                                    loading="lazy" height="150x" width="150px" class="float-right">
                            </div>
                        </div>
                    {{-- @endforeach --}}


                </div>
            </div>

        </div>
    </section>
    <!-- Blog Page Section End -->
    @include('website.attachments.footer')
    @include('website.attachments.foot')

</body>

</html>
