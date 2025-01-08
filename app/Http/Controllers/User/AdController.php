<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Service;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::paginate(10);
        return view('user.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $states = State::get();
        $services = Service::get();
        return view('user.ads.create', compact('categories','states','services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'category_id' => 'required|exists:categories,id',
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'description' => 'required',
            'serviceIds.*' => 'required'
        ]);
        $validatedData['slug'] = str_replace(' ', '-', strtolower($request->title));
        $validatedData['user_id'] = Auth::user()->id; 
        $validatedData['serviceIds'] = json_encode($request->serviceIds); 
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $name_gen = hexdec(uniqid()) . '.' . $banner->getClientOriginalExtension();
            $banner->move('uploads/', $name_gen);
            $validatedData['banner'] = $name_gen;
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $images = is_array($images) ? $images : [$images];
        
            $imageNames = [];       
            foreach ($images as $image) {
                $name_gen = hexdec(uniqid()) . '.webp';
                $image->move('uploads/', $name_gen);
                $imageNames[] = $name_gen;
            }

            $validatedData['images'] = json_encode($imageNames);
        }

        Ad::create($validatedData);
        return redirect()->route('ads.index')->with('success','Ad created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
