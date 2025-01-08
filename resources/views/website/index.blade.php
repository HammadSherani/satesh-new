<!DOCTYPE html>
<html lang="en">

@include('website.attachments.head')


<body>

    @include('website.attachments.header')
    <div style="{{ request()->is('/') ? '' : 'height:10rem; background-color:rgb(16, 27, 55);' }}"></div>

    <!-- <main class="hdjs"> -->
    {{-- @foreach ($sections as $index => $section)
                {!! html_entity_decode($section->content) !!}
        @endforeach --}}
    <!-- </main> -->


    <main>
        <section class="hero-section" id="home">
            <div class="hero-overlay"></div>
            <div class="hero-container">
                <div class="hero-content">
                    <h1>EXTRAFFAIRS <span>FOR LIFE</span></h1>
                    <p>Our Call Girl From Noida Will Give You Horny Nights!.</p>
                    {{-- <!-- <button type="button" id="callButton" class="hero-btn">{{ $request->phone }}</button> --> --}}

                    {{-- <script>
                        document.getElementById("callButton").addEventListener("click", function() {
                            window.location.href = "tel:{{ $request->phone }}"
                        });
                        document.getElementById("whatsappButton").addEventListener("click", function() {
                            window.open("https://wa.me/{{ $request->whatsapp }}")
                        }); 
                    </script> --}}
                </div>
                <div class="hero-searchbar">
                    <form action="{{ url('ads') }}" method="GET">
                        <div class="row d-flex align-items-center justify-content-center searchBar">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="hero-form">
                                    <select class="form-select" aria-label="Default select example" name="category">
                                        <option selected value="">Select A Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                                        @endforeach

                                        {{-- @foreach ($categories as $category)
                                        <li>{{ $category->name }}</li> 
                                    @endforeach --}}

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="hero-form">
                                    <select class="form-select" aria-label="Default select example"
                                        onchange="getCities(this)" name="state">
                                        <option selected value="">Select State</option>
                                        {{-- @foreach ($states as $state)
                                            <option value="{{ $state->name }}">{{ $state->name }}</option>
                                        @endforeach --}}


                                        <option value="state">state</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="hero-form">
                                    <select class="form-select" aria-label="Default select example" id="city-dropdown"
                                        name="city">
                                        <option selected value="">Select A City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="hero-form">
                                    <button type="submit" class="form-btn seacrh-btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="about-section location-section mb-5" id="about">
            <h1 class="heading mb-5 my-3">Call Girls In India 10000+ Classified Ads</h1>
            <div class="location-div">
                <div class="location-tag">
                    <a href="/locations/visakhapatnam">Visakhapatnam (16)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/gurgaon">Gurgaon (35)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/bhopal">Bhopal (44)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/nagpur">Nagpur (25)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/jalandhar">Jalandhar (16)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/jaipur">Jaipur (33)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/lucknow">Lucknow (9)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/allahabad">Allahabad (3)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/delhi">Delhi (215)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/goa">Goa (52)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/rajkot">Rajkot (42)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/kochi">Kochi (35)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/mangalore">Mangalore (13)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/meerut">Meerut (2)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/mussoorie">Mussoorie (3)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/faridabad">Faridabad (8)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/bijnor">Bijnor (4)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/darjeeling">Darjeeling (3)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/guwahati">Guwahati (23)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/ambala">Ambala (6)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/indore">Indore (32)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/nashik">Nashik (12)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/patiala">Patiala (10)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/jodhpur">Jodhpur (11)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/kanpur">Kanpur (8)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/ghaziabad">Ghaziabad (19)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/hyderabad">Hyderabad (41)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/zirakpur">Zirakpur (17)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/bhubaneswar">Bhubaneswar (16)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/noida">Noida (33)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/mysore">Mysore (11)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/aligarh">Aligarh (7)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/vijayawada">Vijayawada (12)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/gwalior">Gwalior (17)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/rishikesh">Rishikesh (3)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/patna">Patna (25)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/panipat">Panipat (6)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/mumbai">Mumbai (87)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/amritsar">Amritsar (18)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/bathinda">Bathinda (4)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/kota">Kota (12)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/agra">Agra (6)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/bareilly">Bareilly (8)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/kolkata">Kolkata (36)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/ahmedabad">Ahmedabad (42)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/dehradun">Dehradun (16)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/ranchi">Ranchi (38)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/chandigarh">Chandigarh (35)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/jhansi">Jhansi (2)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/nainital">Nainital (1)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/shimla">Shimla (16)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/raipur">Raipur (28)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/rohtak">Rohtak (3)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/pune">Pune (106)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/ludhiana">Ludhiana (25)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/mohali">Mohali (31)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/ajmer">Ajmer (6)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/varanasi">Varanasi (4)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/bangalore">Bangalore (164)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/chennai">Chennai (38)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/surat">Surat (18)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/cuttack">Cuttack (16)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/udaipur">Udaipur (15)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/manali">Manali (20)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/haridwar">Haridwar (5)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/vadodara">Vadodara (25)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/mathura">Mathura (3)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/siliguri">Siliguri (3)</a>
                </div>
                <div class="location-tag">
                    <a href="/locations/gangtok">Gangtok (4)</a>
                </div>
            </div>

        </section>

        <section class="artist-section" id="artist">
            <h1 class="heading pt-5">Post Your Adult Advertisement or Search Hot Advertisers</h1>
            <div class="box-container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box">
                            <div class="image"> <img src="/uploads/models/profile/1811438827125006.webp"
                                    alt="A woman with long dark hair, wearing a white tank top, sits on a beige couch. The image features a red circular overlay text that reads, "
                                    extraffairs="" -="" your="" bedtime="" partner."="" width="100%"
                                    loading="lazy"></div>
                            <div class="content">
                                <h2 class="card-heading">
                                    <a href="#"> Male Escort</a>
                                </h2>
                                <p class="text-white fs-5">
                                    Hot and independent escorts ads. Sexy girls ready with their escort services to make
                                    you feel satisfied sexually.Women seeking men for a great session with their erotic
                                    services.
                                </p>
                                {{-- <h3>Age: 27</h3> <a href="http://127.0.0.1:8000/modeldetail/2"> <button type="button"
                                        class="art-btn">View Profile</button> </a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="box">
                            <div class="image"> <img src="/uploads/models/profile/1811438827125006.webp"
                                    alt="A woman with long dark hair, wearing a white tank top, sits on a beige couch. The image features a red circular overlay text that reads, "
                                    extraffairs="" -="" your="" bedtime="" partner."="" width="100%"
                                    loading="lazy"></div>
                            <div class="content">
                                <h1>Latika</h1>
                                <h2>hot model</h2>
                                <h3>Age: 27</h3> <a href="http://127.0.0.1:8000/modeldetail/2"> <button type="button"
                                        class="art-btn">View Profile</button> </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="box">
                            <div class="image"> <img src="/uploads/models/profile/1811438827125006.webp"
                                    alt="A woman with long dark hair, wearing a white tank top, sits on a beige couch. The image features a red circular overlay text that reads, "
                                    extraffairs="" -="" your="" bedtime="" partner."="" width="100%"
                                    loading="lazy"></div>
                            <div class="content">
                                <h1>Latika</h1>
                                <h2>hot model</h2>
                                <h3>Age: 27</h3> <a href="http://127.0.0.1:8000/modeldetail/2"> <button type="button"
                                        class="art-btn">View Profile</button> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="box">
                            <div class="image"> <img src="/uploads/models/profile/1811438827125006.webp"
                                    alt="A woman with long dark hair, wearing a white tank top, sits on a beige couch. The image features a red circular overlay text that reads, "
                                    extraffairs="" -="" your="" bedtime="" partner."="" width="100%"
                                    loading="lazy"></div>
                            <div class="content">
                                <h1>Latika</h1>
                                <h2>hot model</h2>
                                <h3>Age: 27</h3> <a href="http://127.0.0.1:8000/modeldetail/2"> <button type="button"
                                        class="art-btn">View Profile</button> </a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>

        <section class="about-section" id="about">
            
            <div class="about-row">
                <div class="content">
                    <h1>Classified Indian Call Girls service for prestigious customers</h1>
                    <p>What a young man like you is missing out on rather than living your fantasy in some beauty’s
                        tightness? Of course, your dreams and desires are worth experiencing in real life. All you need
                        to do is contact our agency. Our company “Extraffairs” is a place where you will come across
                        amazing hot ladies with a variety of backgrounds and kinks. You deserve so many choices to bring
                        yourself to a heavenly pleasure. Our are extraordinary with their skills at satisfying you. If
                        you are planning to get addicted, how about you get addicted to our girls? We focus on making
                        your lustful dreams and desires come true. At first you need to contact us via our mentioned
                        contact details and then mention your needs. Our representatives will ask you about your
                        preferences, time, and the rates you are comfortable with. This whole process will then continue
                        with sending you the pictures of our hot chicks. It is on you to decide the sexy you want to
                        enjoy. Extraffairs’s topmost priority is to provide you with the best companion or pleasure
                        partner for a toe-curling release.</p> <a href="#" class="about-btn">Post free ad</a>
                </div>
                <div class="image"> <img src="/uploads/banners/images/1817252461901061.webp" alt=""> </div>
            </div>
        </section>



    </main>

    @include('website.attachments.footer')

    @include('website.attachments.foot')

    <script>
        function getCities(param) {
            let state = $(param).val();
            console.warn(state);

            $.ajax({
                type: "GET",
                url: "{{ url('get-cities') }}",
                data: {
                    state: state
                },
                success: function(response) {

                    $("#city-dropdown").empty();
                    if (response.error) {
                        console.log(response.message);
                        return;
                    }
                    let cities = response.cities;
                    cities.forEach(city => {
                        let option = `<option value="${city.name}">${city.name}</option>`;
                        $('#city-dropdown').append(option);
                    });
                }
            });
        }
    </script>

</body>

</html>
