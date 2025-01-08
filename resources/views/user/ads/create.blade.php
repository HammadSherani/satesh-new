@section('title', 'Add Ad')
@push('script')
    <script>
        $(document).ready(function() {
            $('#addProduct').submit(function(e) {
                e.preventDefault();
                const requiredFields = ["title", "slug", "description"];
                insertData(requiredFields, this);
            });

            $('#title').on('input', function() {
                let title = $(this).val();
                let slug = title.trim()
                    .toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                $('#slug').val(slug);

            });

            $('#state').change(function(e) {
                e.preventDefault();
                let stateId = $(this).val();

                $.ajax({
                    type: "GET",
                    url: "{{ url('get-cities') }}",
                    data: {
                        stateId: stateId
                    },
                    success: function(response) {
                        console.log(response);

                        if (response.error) {
                            console.log(response.message);
                            return;
                        }
                        $('#city').empty();
                        let option = `<option value="">Select city</option>`;
                        $('#city').append(option);
                        let cities = response.cities;
                        cities.forEach(city => {
                            let option =
                                `<option value="${city.id}">${city.name}</option>`;
                            $('#city').append(option);
                        });
                    }
                });
            });
        });
    </script>
@endpush
<x-app-layout>
    <x-slot name="header">
        {{ __('Add Ad') }}
    </x-slot>


    <div class="rounded-xl shadow-2xl bg-white p-3">
        <form action="{{ route('ads.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-3">
                <div class="mb-3">
                    <label for="" class="form-label">Main Banner</label>
                    <input type="file" class="block border border-slate-300 rounded w-full p-2" id="banner"
                        name="banner" placeholder="Main banner" accept="image/*" />
                    @error('banner')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="" class="form-label">Images</label>
                    <input type="file" class="block border border-slate-300 rounded w-full p-2" id="images"
                        name="images[]" multiple placeholder="More images" accept="image/*" />
                    @error('images')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" class="block border border-slate-300 rounded w-full p-2" id="title"
                    name="title" placeholder="Ad title" />
                @error('title')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="grid grid-cols-3 gap-2">
                <div class="mb-3 col-md-4">
                    <label for="" class="form-label">Select Category</label>
                    <select name="category_id" id="category_id"
                        class="block border border-slate-300 rounded w-full p-2">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category_id')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-md-4">
                    <label for="" class="form-label">Select State</label>
                    <select name="state_id" id="state" class="block border border-slate-300 rounded w-full p-2">
                        <option value="">Select state</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>

                    @error('state_id')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-md-4">
                    <label for="" class="form-label">Select City</label>
                    <select name="city_id" id="city" class="block border border-slate-300 rounded w-full p-2">
                        <option value="">Select city</option>
                    </select>

                    @error('city_id')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Services</label>
                <div class="grid grid-cols-3">
                    @foreach ($services as $service)
                        <div class="form-check gap-2">
                            <input class="form-check-input" type="checkbox" name="serviceIds[]" id="serviceIds[]"
                                value="{{ $service->id }}" />
                            <label class="form-check-label" for="serviceIds[]">{{ $service->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="block border border-slate-300 rounded w-full p-2" name="description" rows="5"></textarea>

                @error('description')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="col-12">
                <x-primary-button>
                    Add Ad
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
