<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Http\Controllers\Controller;
use App\Turistictypecompany;
use App\Category;
use Session;

class TuristictypecompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $turistictypecompanies = Turistictypecompany::all();
        return view('turistictypecompany.index')->withTuristictypecompanies($turistictypecompanies); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category   = new Category();
        $categories = Category::all();
        return view('turistictypecompany.create')->withCategory($category)->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, array(
            'name'         => 'required',
            'description'  => 'required',
            'service_type' => 'required',
            'slug'         => 'required'
        ));
        $turistictypecompany = new Turistictypecompany();

        $turistictypecompany->name = $request->name;
        $turistictypecompany->description = $request->description;
        $turistictypecompany->service_type = $request->service_type;
        $turistictypecompany->slug = $request->slug;

        $category = Category::Find($request->category_id);
        
        $turistictypecompany->categories()->attach($category);

        $turistictypecompany->save();

        return redirect()->route('turistictypecompany');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turistictypecompany = Turistictypecompany::find($id);
        return view('turistictypecompany.show')->withTuristictypecompany($turistictypecompany);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
