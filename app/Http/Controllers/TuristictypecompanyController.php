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
        //dd($request);
        /*
        $this->validate($request, array(
            'name'         => 'required',
            'description'  => 'required',
            'service_type' => 'required',
            'slug'         => 'required'
        ));
        */
        $turistictypecompany                = new Turistictypecompany();
        $turistictypecompany->name          = $request->name;
        $turistictypecompany->description   = $request->description;
        $turistictypecompany->service_type  = $request->service_type;
        $turistictypecompany->slug          = $request->slug;

        $turistictypecompany->save();

        $category = Category::Find($request->category_id);
        $turistictypecompany->categories()->attach($category);
        

        //return redirect()->route('turistictypecompany');
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
        
        $categories = Category::all();

        $category = new Category();
        foreach ($turistictypecompany->categories as $category) 
        {
           $category->id.$category->name;
        }
        return view('turistictypecompany.show')->withTuristictypecompany($turistictypecompany)->withCategory($category)->withCategories($categories);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::all();
        $turistictypecompany = Turistictypecompany::find($id);
        foreach ($turistictypecompany->categories as $category) 
        {
            $category->id;
        }
        return view('turistictypecompany.edit')->withTuristictypecompany($turistictypecompany)->withCategory($category)->withCategories($categories);
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
        $turistictypecompany = Turistictypecompany::find($id);
        $categories = Category::all();
        foreach ($turistictypecompany->categories as $category) 
        {
            $category->id;
        }
        $this->validate($request,array(
            'name'         => 'require',
            'description'  => 'require',
            'service_type' => 'require',
            'slug'         => 'require|alpha_dash|min:5|max:255|unique:turistictypecompanies,slug'
        ));
        //guardar en la base de datos
        $turistictypecompany->name         = $request->input('name');
        $turistictypecompany->description  = $request->input('description'); 
        $turistictypecompany->service_type = $request->input('service_type');
        $turistictypecompany->slug         = $request->input('slug');
       // $turistictypecompany->recomendation      = $request->input('recomendation');

        $turistictypecompany->save();
        $turistictypecompany->categories()->detach();

        $category = Category::Find($request->category_id);
        $turistictypecompany->categories()->sync($category);

        return redirect()->route('turistictypecompany.show', $turistictypecompany->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = new Category();
        $turistictypecompany = Turistictypecompany::find($id);
        $turistictypecompany->categories()->detach($category);
        $turistictypecompany->delete();
        return redirect()->route('turistictypecompany.index');        
    }

    public function getSingle($slug){
        $turistictypecompany = Turistictypecompany::where('slug', '=', $slug)->first();

        return view('turistictypecompany.page')->withTuristictypecompany($turistictypecompany);
    }
}
