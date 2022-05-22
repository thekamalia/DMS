<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();

        return view('dashboard.products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $storeData = $request->validate([
            'imageproduct' => 'required',
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'marketprice' => 'required',
            'dsprice' => 'required',
        ]);

        $storeData = $request->all();
        //$input = $request->all();

        if ($image = $request->file('imageproduct')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['imageproduct'] = "$profileImage";
        }

        $product = Product::create($storeData);

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('dashboardds.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // $product = Product::findOrFail($id);
        return view('dashboard.products.edit', compact('product'));
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

        $PreviousPic = $request->Prev_pic;

        $data = array();
        $data['imageproduct'] = $request->imageproduct;
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['stock'] = $request->stock;
        $data['marketprice'] = $request->marketprice;
        $data['dsprice'] = $request->dsprice;

        $image = $request->file('imageproduct');

        if ($image != null){
            unlink($PreviousPic);
            $image_name = date('dmy_H_s_i');  // Yang ni based on your image..
            $ext = strtolower($image->getClientOriginalExtension());
            $imageFullName = $image_name.'.'.$ext;
            $uploadPath = 'image/';
            $imageURL = $uploadPath.$imageFullName;
            $success = $image->move($uploadPath,$imageFullName);

        $data['imageproduct'] = $imageURL;
        $Stdata = DB::table('products')->where('id', $id)->update($data);

        return redirect()->route('products.index')
                         ->with('success','Updated! The Product Data Updated Successfully');

        }
        else{
            unset($data['imageproduct']);

        }
        $Stdata = DB::table('products')->where('id', $id)->update($data);
        return redirect()->route('products.index')
                         ->with('success','Updated! The Product Data Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }

}
