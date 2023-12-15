<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Category;
use App\Models\Frontend\Subcat;
use Image;
use File;


class SubcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::all();
        return view("frontend.subcat.addsubcat",compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->pic){
            $img = $request->file('pic');
            $customName = rand().".".$img->getClientOriginalExtension();
            $location = public_path("frontend/subcatImage/".$customName);
            Image::make($img)->save($location);
        }

        $data = new Subcat;

        $data->cat_id = $request->cat_id;
        $data->name = $request->name;
        $data->des = $request->des;
        $data->image =$customName;
        $data->status = $request->status;
        $data->save();
        return redirect()->route("subcatshow");
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $subcats = Subcat::all();
        return view("frontend.subcat.manage",compact('subcats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats = Category::all();
        $subcat = Subcat::find($id);
        return view("frontend.subcat.edit",compact("subcat","cats"));
        return back();
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
        $subcat = Subcat::find($id);

        if($request->pic){
            if(File::exists("frontend/subcatImage/".$subcat->image)){
                File::delete("frontend/subcatImage/".$subcat->image);
  
             $img = $request->file('pic');
             $customName = rand().".".$img->getClientOriginalExtension();
             $location = public_path("frontend/subcatImage/".$customName);
             Image::make($img)->save($location);
             $subcat->image = $customName; 


            }
        }
        
            $subcat->cat_id = $request->cat_id;
            $subcat->name = $request->name;
            $subcat->des = $request->des;
            $subcat->status = $request->status;
            $subcat->update();
            return redirect()->route('subcatshow');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $subcat = Subcat::find($id);

        if(File::exists("frontend/subcatImage/".$subcat->image)){
            File::delete("frontend/subcatImage/".$subcat->image);
        }
        $subcat->delete();
        return back();
    }
}
