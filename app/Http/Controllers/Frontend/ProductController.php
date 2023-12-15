<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproduct()
    {
        return view("frontend.product.addproduct");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view("home");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productstore(Request $request)
    {
       $prd = new ProductModel;
       $prd->pname = $request->pname;
       $prd->pdes = $request->pdes;
       $prd->barcode = $request->barcode;
       $prd->status = $request->status;
       $prd->save();
       return redirect()->route("showproduct");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showproduct()
    {
        $data = ProductModel::all();
        return view ("frontend.product.showproduct",compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editproduct($id)
    {
        $products = ProductModel::find($id);
        return view("frontend.product.editproduct",compact("products"));
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
        $data = ProductModel::find($id);

        $data->pname = $request->pname;
        $data->pdes = $request->pdes;
        $data->barcode = $request->barcode;
        $data->status = $request->status;

        $data->update();
        return redirect()->route("showproduct");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $del = ProductModel::find($id);

        $del->delete();

        return redirect()->route("showproduct");
    }

    public function status($id)
    {
        $status = ProductModel::find($id);
        if($status->status==1){
            $status->status=2;
        }
        else{
            $status->status=1;
        }
        $status->update();
        return redirect()->route("showproduct");
    }
}
