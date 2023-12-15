<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Category;

class CategoryController extends Controller
{
    public function category(){
        return view("frontend.category.category");

    }

    public function addcategory(Request $rqst){
        $cat = new Category;
        $cat->name = $rqst->name;
        $cat->des = $rqst->des;
        $cat->status = $rqst->status;
        $cat->save();
        
        return response()->json([
            'status'=>"SUCCESS"
        ]);
    }
    
    public function show(){
        $data = Category::all();
        return response()->json([
            'data' => $data
        ]);

    }

    public function delete($id){
        $delete = Category::find($id);
        $delete->delete();
        if($delete){
            return response()->json([
                'status'=> "200"
            ]);
        }
        else{
            return response()->json([
                'status'=>"404"
            ]);
        }
    }
    public function edit($id){
        $cat = Category::find($id);

        if($cat){
            return response()->json([
                'status' => "200",
                'data'=> $cat
            ]);
        }
        else{
            return response()->json([
                'status' => "404"
            ]);
        }
    }
    public function update(Request $rqst, $id){
        $data = Category::find($id);
        $data->name = $rqst->name;
        $data->des = $rqst->des;
        $data->status = $rqst->status;
        $data->update();
        if($data){
            return response()->json([
                'status' => "200"
            ]);
        }
        else{
            return response()->json([
                'status' => "404"
            ]);
        }
    }

    // ----------------------Active OR Inactive Method----------------------------------------

    public function active($id){
        $cat = Category::find($id);
        $cat->status=2;
        $cat->update();
        if($cat){
            return response()->json([
                'status' => "200"
            ]);
        }
        else{
            return response()->json([
                'status' => "404"
            ]);
        }

    }
    public function inactive($id){
        $cat = Category::find($id);
        $cat->status=1;
        $cat->update();
        if($cat){
            return response()->json([
                'status' => "200"
            ]);
        }
        else{
            return response()->json([
                'status' => "404"
            ]);
        }

    }
}
