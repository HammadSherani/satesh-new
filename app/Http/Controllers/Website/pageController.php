<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class pageController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('website.index', compact('categories'));
    }

    function adsManage(Request $request)
    {
        $category = $request->category;
        $state = $request->state;
        $city = $request->city;

        if ($category && $state && $city) {
            return redirect()->to($category . '/' . $state . '/' . $city);
        }elseif ($category && $state) {
            return redirect()->to($category . '/' . $state);
        }else{
            return redirect()->to($category);
        }
    }

    public function ads($category, $state = null, $city = null)
    {
        $categoryId = DB::table('categories')->where('name', $category)->first();
        $stateId = DB::table('states')->where('name', $state)->first();
        $cityId = DB::table('cities')->where('name', $city)->first();

        $query = DB::table('ads');

        if ($categoryId) {
            $query->where('category_id', $categoryId->id);
        }
        if ($stateId) {
            $query->where('state_id', $stateId->id);
        }
        if ($cityId) {
            $query->where('city_id', $cityId->id);
        }
        $ads = $query->get();
        return view('website.ads.ads', compact('ads'));
    }


    public function adsDetail()
    {
        return view('website.ads.detail');
    }


    public function blogs()
    {
        try {
            $data = new stdClass();
            $data->title = "Blog";
            $data->meta_title = "Blog";
            $data->meta_description = "Blog";
            $data->meta_keywords = "Blog";
            $pages = DB::table('pages')->where('status', 1)->orderBy('priority')->get();
            $locations = DB::table('locations')->where('status', 1)->get();
            $last3Blogs = DB::table('blogs')
                ->where('status', 1)
                ->whereNull('deleted_at')
                ->latest()
                ->take(3)->get();

            $blogs = DB::table('blogs')->whereNull('deleted_at')->where('status', 1)->get();
            return view('website.blogs', compact('blogs', 'data', 'pages', 'locations', 'last3Blogs'));
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }


    public function blogDetail($slug)
    {
        try {
            $data = DB::table('blogs')
                ->leftJoin('locations', 'locations.id', '=', 'blogs.category_id')
                ->select('blogs.*', 'locations.name as category')
                ->whereNull('blogs.deleted_at')
                ->where('blogs.status', 1)
                ->where('blogs.slug', $slug)->first();
            if (!$data) {
                return redirect('404');
            }

            $pages = DB::table('pages')->where('status', 1)->orderBy('priority')->get();
            $locations = DB::table('locations')->where('status', 1)->get();
            $last3Blogs = DB::table('blogs')
                ->where('status', 1)
                ->whereNull('deleted_at')
                ->latest()
                ->take(3)->get();

            return view('website.blog-detail', compact('data', 'pages', 'locations', 'last3Blogs'));
        } catch (\Throwable $th) {
            // return redirect('under-development');
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }

    public function contact()
    {
        try {

            $pages = DB::table('pages')->where('status', 1)->orderBy('priority')->get();
            $locations = DB::table('locations')->where('status', 1)->get();
            $last3Blogs = DB::table('blogs')
                ->where('status', 1)
                ->whereNull('deleted_at')
                ->latest()
                ->take(3)->get();

            $data = new stdClass();
            $data->title = "Contact Us";
            $data->meta_title = "Do not hesitate to ask for sex";
            $data->meta_keywords = "Contact Us";
            $data->meta_description = "If you have any enquiry about call girl and escort service, feel free to ask us";
            return view('website.contact', compact('data', 'pages', 'locations', 'last3Blogs'));
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }

    public function login()
    {
        try {

            $pages = DB::table('pages')->where('status', 1)->orderBy('priority')->get();
            $locations = DB::table('locations')->where('status', 1)->get();
            $last3Blogs = DB::table('blogs')
                ->where('status', 1)
                ->whereNull('deleted_at')
                ->latest()
                ->take(3)->get();

            $data = new stdClass();
            $data->title = "Login";
            $data->meta_title = "Do not hesitate to ask for sex";
            $data->meta_keywords = "Login";
            $data->meta_description = "If you have any enquiry about call girl and escort service, feel free to ask us";
            return view('website.login', compact('data', 'pages', 'locations', 'last3Blogs'));
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }
    public function register()
    {
        try {

            $pages = DB::table('pages')->where('status', 1)->orderBy('priority')->get();
            $locations = DB::table('locations')->where('status', 1)->get();
            $last3Blogs = DB::table('blogs')
                ->where('status', 1)
                ->whereNull('deleted_at')
                ->latest()
                ->take(3)->get();

            $data = new stdClass();
            $data->title = "Register";
            $data->meta_title = "Do not hesitate to ask for sex";
            $data->meta_keywords = "Register";
            $data->meta_description = "If you have any enquiry about call girl and escort service, feel free to ask us";
            return view('website.register', compact('data', 'pages', 'locations', 'last3Blogs'));
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }

    public function contactMessage(Request $request)
    {
        try {
            $lastInsertId = DB::table('contact-messages')->insertGetId([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            DB::table('contact-messages')->where('id', $lastInsertId)->update([
                'code' => md5($lastInsertId)
            ]);
            return response()->json(['error' => false, 'message' => "Message Send Successfully"]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }

    public function modeldetail($id)
    {
        try {
            // Fetch the single model by ID with status check
            $model = DB::table('models')
                ->where('id', $id)
                ->where('deleted_at', null)
                ->where('status', 1)
                ->first(); // Use first() to get a single record

            // Check if the model exists
            if (!$model) {
                return view('website.modeldetail')->with('error', 'Model not found');
            }

            // Fetch additional data
            $pages = DB::table('pages')->where('status', 1)->orderBy('priority')->get();
            $locations = DB::table('locations')->where('status', 1)->get();

            // Prepare meta data for the view
            $data = new \stdClass();
            $data->title = $model->name . " Details";
            $data->meta_title = $model->name . " - Profile";
            $data->meta_keywords = $model->name . ', models, profile, escort service';
            $data->meta_description = "Learn more about " . $model->name . ". Discover their profile and details.";
            $data->canonical_url = url()->current();

            // Pass the model, data, pages, and locations to the view
            return view('website.modeldetail', compact('model', 'data', 'pages', 'locations'));
        } catch (\Throwable $th) {
            // Handle any errors
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }


    public function notFound()
    {
        try {
            $pages = DB::table('pages')->where('status', 1)->orderBy('priority')->get();
            $locations = DB::table('locations')->where('status', 1)->get();
            $last3Blogs = DB::table('blogs')
                ->where('status', 1)
                ->whereNull('deleted_at')
                ->latest()
                ->take(3)->get();

            $data = new stdClass();
            $data->title = "Page Not Found";
            $data->meta_title = "Do not hesitate to ask for sex";
            $data->meta_keywords = "Page Not Found";
            $data->meta_description = "If you have any enquiry about call girl and escort service, feel free to ask us";

            return view('website.not-found', compact('data', 'pages', 'locations', 'last3Blogs'));
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }

    public function getCities(Request $request)
    {
        try {
            if ($request->state) {
                $state = DB::table('states')->where('name', $request->state)->first();
                $cities = DB::table('cities')->where('state_id', $state->id)->get();
            } else {
                $cities = DB::table('cities')->get();
            }

            return response()->json(['error' => false, 'message' => "City founds successfully", 'cities' => $cities]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }

    // public function ads(Request $request)
    // {
    //     // try {
    //         $data = new stdClass();
    //         $data->title = "Ads";
    //         $data->meta_title = "Ads";
    //         $data->meta_description = "Ads";
    //         $data->meta_keywords = "Ads";
    //         $pages = DB::table('pages')->where('status', 1)->orderBy('priority')->get();
    //         $locations = DB::table('locations')->where('status', 1)->get();
    //         $last3Blogs = DB::table('blogs')
    //             ->where('status', 1)
    //             ->whereNull('deleted_at')
    //             ->latest()
    //             ->take(3)->get();

    //         $ads = DB::table('ads')->select('ads.*','models.age','models.name','models.phone','models.whatsapp')->join('models','models.id','=','ads.model_id')->get();
    //         return view('website.ads', compact('ads', 'data', 'pages', 'locations', 'last3Blogs'));
    //     // } catch (\Throwable $th) {
    //     //     return view('something-went-wrong');
    //     // }
    // }
    public function adDetail($slug)
    {
        try {
            $data = DB::table('ads')
                ->join('models', 'models.id', '=', 'ads.model_id')
                ->join('states', 'states.id', '=', 'ads.state_id')
                ->join('cities', 'cities.id', '=', 'ads.city_id')
                ->select('ads.*', 'models.name', 'models.age', 'models.phone', 'models.whatsapp', 'states.name as state', 'cities.name as city')
                ->where('ads.status', 1)
                ->where('ads.slug', $slug)->first();

            if (!$data) {
                return redirect('404');
            }

            $services = [];
            $serviceIds = json_decode($data->serviceIds) ?? [];
            foreach ($serviceIds as $serviceId) {
                $response = DB::table('services')->where('id', $serviceId)->first();
                $services[] = $response->name;
            }

            $pages = DB::table('pages')->where('status', 1)->orderBy('priority')->get();
            $locations = DB::table('locations')->where('status', 1)->get();
            $last3Blogs = DB::table('blogs')
                ->where('status', 1)
                ->whereNull('deleted_at')
                ->latest()
                ->take(3)->get();

            $data->meta_title = "";
            $data->meta_description = "";
            $data->meta_keywords = "";
            return view('website.ad-detail', compact('data', 'pages', 'locations', 'last3Blogs', 'services'));
        } catch (\Throwable $th) {
            // return redirect('under-development');
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
    }
}
