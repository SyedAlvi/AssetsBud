<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
    public function CreateProduct()
    {
        $categories=Category::all();
        return view('product.create_product',compact('categories'));
    }
    public function Search_ProductList()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $productlist = Product::  where('name','LIKE','%'.$key.'%')
           
                ->orWhere('category','LIKE','%'.$key.'%')
                ->get();
            return view('product.product_list',compact('productlist','key'));
        }
        
        $productlist = product::with('Category')->get();
        return view ('product.product_list', compact('productlist'));
     
    }
  
    // public function User_view_product()
    // {
    //     $productlist = product::all();
    //     return view('product.view_product',compact('productlist'));
    // }
    public function viewproduct($product_id)
    {
        $productlist = product::find($product_id);
        return view('product.product_view',compact('productlist'));
    }

    
    public function ProductStore(Request $request)
    {
        // dd($request->all());
        //for image upload
        $image_name=null;
        //step 1: check image exist in this request.
        if($request->hasFile('product_image'))
         // step 2: generate file name
        {
            $image_name=date('Ymdhis').'.'. $request->file('product_image')->getClientOriginalExtension();
             //step 3 : store into project directory
            $request->file('product_image')->storeAs('/uploads/products',$image_name);
        }
        //  dd($request->all());
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'Cname'=>'required',
            'quantity'=>'required' ,
            'price'=>'required',
            'details'=> 'required',
            
        ]);
        Product::create([
            //'id'=>$request->id,
            'name'=> $request->name,
            'Cname'=> $request->Cname,
            'quantity'=> $request->quantity,
            'price'=> $request->price,
            'details'=> $request->details,
            'image'=>$image_name
           
        ]);
        return redirect()->back()->with('success', 'Asset Created Successfully');
    }
   
    public function deleteproduct($product_id)
    {
        Product::find($product_id)->delete();
        return redirect()->back()->with('sucecess', 'Product has beeen Deleted Successfully');
    }
  

    public function Product_update(Request $request,$product_id)
    {
        $image_name=null;
        //step 1: check image exist in this request.
        if($request->hasFile('product_image'))
         // step 2: generate file name
        {
            $image_name=date('Ymdhis').'.'. $request->file('product_image')->getClientOriginalExtension();
             //step 3 : store into project directory
            $request->file('product_image')->storeAs('/uploads/products',$image_name);
        }
        //  dd($request->all());
       
        
        Product::find($product_id)->update([
            //'id'=>$request->id,
            'name'=> $request->name,
            // 'Cname'=> $request->Cname,
            'quantity'=> $request->quantity,
            'price'=> $request->price,
            'details'=> $request->details,
            'image'=>$image_name
           
        ]);
        return redirect()->route('product.list')->with('success', 'Asset Updated Successfully');
        
    }
    public function product_edit($product_id)
        {
    $product=Product::find($product_id);
   return view('product.product_update', compact('product'));
        }

}
