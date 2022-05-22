<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::inRandomOrder()->take(4)->get();

        return view('dashboardds.shop.index')->with('shops', $shops);

        // $shop = Shop::all();
        // return view('dashboardds.shop.index', compact('shop'));
    }

    public function create()
    {
        // return view('shop.create');
    }

    public function show($name)
    {
        // $product = Product::find($id);

        $shop = Shop::where('name', $name)->firstOrFail();
        return view('dashboardds.shop.viewshop',compact('shop'));
    }

    // public function store(Request $request)
    // {
    //     $shop = new Shop;
    //     $shop->shopname = $request->input('shopname');
    //     $shop->decription = $request->input('description');
    //     $shop->accountnumber = $request->input('accountnumber');
    //     if($request->hasfile('profile_image'))
    //     {
    //         $file = $request->file('image');
    //         $extention = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extention;
    //         $file->move('uploads/shops/', $filename);
    //         $shop->profile_image = $filename;
    //     }
    //     $shop->save();
    //     return redirect()->back()->with('status','Image Added Successfully');
    // }

    // public function edit($id)
    // {
    //     $shop = Shop::find($id);
    //     return view('shop.edit', compact('shop'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $shop = Shop::find($id);
    //     $shop->shopname = $request->input('shopname');
    //     $shop->decription = $request->input('description');
    //     $shop->accountnumber = $request->input('accountnumber');

    //     if($request->hasfile('profile_image'))
    //     {
    //         $destination = 'uploads/shops/'.$shop->profile_image;
    //         if(File::exists($destination))
    //         {
    //             File::delete($destination);
    //         }
    //         $file = $request->file('image');
    //         $extention = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extention;
    //         $file->move('uploads/shops/', $filename);
    //         $shop->profile_image = $filename;
    //     }

    //     $shop->update();
    //     return redirect()->back()->with('status','Image Updated Successfully');
    // }

    // public function destroy($id)
    // {
    //     $shop = Shop::find($id);
    //     $destination = 'uploads/shops/'.$shop->profile_image;
    //     if(File::exists($destination))
    //     {
    //         File::delete($destination);
    //     }
    //     $shop->delete();
    //     return redirect()->back()->with('status','Image Deleted Successfully');
    // }
}

