<?php

namespace App\Http\Controllers\User;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verify.user'])->except('testFunc');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('product.add_product'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

         $this->validate($request, array(
            'product_name' => 'required',
            'procuct_type' => 'required',
            'procuct_size' => 'required',
            'stext' => 'required_if:selection,2|required_if:selection,3',
            'quantity' => 'required|numeric',
            'procuct_color' => 'required',
        ));

       
        $product = new Product();
        $product->product_title = $request->product_name;
        $product->procuct_type = $request->procuct_type;
        $product->procuct_size =  json_encode($request->procuct_size);
        $product->quantity = $request->quantity;
        $product->procuct_color = $request->procuct_color;
        $product->save();

         return redirect('user/product-create')->with('message', 'Product Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('parent_id','=','0')->pluck('category_name','id')->toArray();   
        $product_get = Product::where('id', $id)->first();
        return view('product.edit_product', compact('product_get','category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        return redirect('product-list')->with('message', 'Successfully Product Updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
       
    }

    
}