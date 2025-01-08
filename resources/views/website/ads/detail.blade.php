<!DOCTYPE html>
<html lang="en">

@include('website.attachments.head')

<body>

    <!-- header start-->
    @include('website.attachments.header')
    <!-- header-end -->
    <div style="{{ request()->is('/') ? '' : 'height:10rem; background-color:rgb(16, 27, 55);' }}"></div>

    <!-- single-product-start -->
    <section class="product-page">
        <div class="container pb-5" style="margin-top: 7rem;">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3 rounded-5 bg-transparent">
                        <img class="card-img img-fluid" src="#" alt="#"
                            id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center rounded-1 pt-4 pb-4 px-2"
                            style="background-color:#02C9ED;font-size: medium;border-radius: 5px;">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left px-1"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item"
                            data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        {{-- @if ($data->images) --}}
                                            {{-- @php
                                                $images = json_decode($data->images);
                                            @endphp --}}
                                            {{-- @foreach ($images as $image) --}}
                                                <div class="col-4 rounded-5 bg-transparent">
                                                    <a href="#">
                                                        <img class="card-img img-fluid" src="#"
                                                            alt="Product Image 1">
                                                    </a>
                                                </div>
                                            {{-- @endforeach --}}
                                        {{-- @endif --}}
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4 rounded-5 bg-transparent">
                                            <a href="#">
                                                <img class="card-img img-fluid"
                                                    src="#" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4 rounded-5 bg-transparent">
                                            <a href="#">
                                                <img class="card-img img-fluid"
                                                    src="#" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4 rounded-5 bg-transparent">
                                            <a href="#">
                                                <img class="card-img img-fluid"
                                                    src="#" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center rounded-1 pt-4 pb-4 px-2"
                            style="background-color: #02C9ED;font-size: medium;border-radius: 5px;">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right px-1"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card productcard-info">
                        <div class="card-body">
                            <h1 class="h2">Lorem</h1>
                            <p class="py-2">
                                <span class="list-inline-item">Dehli India</span>
                            </p>
                            <h6 class="dscp-h6">Description:</h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt in hic, molestias recusandae dolorum voluptatibus asperiores libero minima ipsa deserunt veritatis repudiandae ducimus harum at eius sequi ad optio ullam.
                            </p>


                            <form action="#" method="post">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row mb-2">
                                    <div class="col-md-6 col-sm-12 mb-1 d-grid">
                                        <button type="button" class="product-btn btn-lg" name="submit">
                                            <a href="tel:213213"
                                                style="text-decoration: none; color: #101B37;">
                                                Call Now
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-1 d-grid">
                                        <button type="button" class="product-btn btn-lg" name="submit">
                                            <a href="#"
                                                style="text-decoration: none; color: #101B37;">
                                                Whatsapp me
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <br>
                    <div class="card productcard-info mt-5">
                        <div class="card-body">
                            <h1 class="h2">Services</h1>
                            <div class="row">
                                {{-- @foreach ($services as $service) --}}
                                    <div class="col-md-6">
                                        <p class="text-white">
                                            <i class="fa-solid fa-venus"></i> services
                                        </p>
                                    </div>
                                {{-- @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single-product-end -->


    {{-- <section class="product-page">
        <div class="container pb-5" style="margin-top: 7rem;">
            <div class="row">
                <h1 class="text-white text-center mt-3">{{ $model->name }}</h1>
    
                <!-- Image Carousel Section -->
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3 rounded-5 bg-transparent shadow">
                        <img class="card-img img-fluid" src="{{ asset($model->profile) }}" alt="{{ $model->alt_profile }}">
                    </div>
    
                    <!-- Carousel Controls -->
                    <div id="multi-item-example" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($model->images as $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img class="d-block w-100 rounded-3" src="{{ asset($image->url) }}" alt="Model Image">
                            </div>
                            @endforeach
                        </div>
    
                        <!-- Carousel Navigation -->
                        <a class="carousel-control-prev" href="#multi-item-example" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#multi-item-example" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
    
                <!-- Model Info Section -->
                <div class="col-lg-7 mt-5">
                    <div class="card bg-dark text-white shadow rounded-4 p-4">
                        <h1 class="h2">{{ $model->name }}</h1>
                        <p class="h4 py-2">{{ $model->price }} USD</p>
    
                        <!-- Rating -->
                        <p class="py-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa fa-star {{ $i <= $model->rating ? 'text-warning' : 'text-secondary' }}"></i>
                            @endfor
                            <span class="ms-2">{{ $model->rating }} | {{ $model->reviews_count }} Reviews</span>
                        </p>
    
                        <!-- Details -->
                        <ul class="list-unstyled">
                            <li><strong>Location:</strong> {{ $model->location }}</li>
                            <li><strong>Contact:</strong> {{ $model->contact_number }}</li>
                        </ul>
    
                        <!-- Description -->
                        <p class="mt-3">{{ $model->description }}</p>
    
                        <!-- Call-to-Action -->
                        <div class="d-grid gap-2 mt-4">
                            <a href="tel:{{ $model->contact_number }}" class="btn btn-primary btn-lg">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- end -->
    @include('website.attachments.footer')

    @include('website.attachments.foot')
</body>

</html>
