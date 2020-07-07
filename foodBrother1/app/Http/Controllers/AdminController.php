<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\product;
use App\galleries;
class AdminController extends Controller
{

    public function getIndexAdmin()
    {
        $pro = DB::select('select p.id,title,image from galleries as g, products as p where g.product_id=p.id ');
        return view('Admin.homeAdmin', compact('pro'));
    }
    public function deleteProduct($id)
    {
        DB::table("galleries")->where("galleries.product_id", $id)->delete();
        DB::table("products")->where("products.id", $id)->delete();
        return redirect()->action('AdminController@getIndexAdmin');
    }
    public function getInsertProduct(){
        return view("Admin.insertProduct");
    }
    public function insertProduct(Request $request){
        $sp= new product;
        $sp ->title=$request->ten;
        $sp ->description=$request->mota;
        $sp->unit_price=$request->gia;
        $sp->promotion_price=$request->giagiam;
        $sp->quantity=$request->soluong;
        $sp->save();

        $ga = new galleries;
        $ga->product_id=$request->loai;
        $file_name = $request->file('myFile')->getClientOriginalName();
        $request->file('myFile')->move('public/img_food/food_content',$file_name);
        $ga ->image= $file_name;
        $ga->save();
        return redirect()->action('PageController@getIndexAdmin');
    }


    // public function updateProduct(Request $request, $id)
    // {
    //     $pro = products::find($id);
    //     $user = galleries::where('id', $id)->first();
    //     $user->name = $request->input('name');
    //     $user->save();

    //     $profile = Profile::find($id);
    //     $profile = Profile::where('id', $id)->first();
    //     $profile->user_id = $request->input('user_id');
    //     $profile->about = $request->input('about');
    //     $profile->website = $request->input('website');
    //     $profile->phone = $request->input('phone');
    //     $profile->state = $request->input('state');
    //     $profile->city = $request->input('city');

    //     if ($request->hasFile('photo')) {
    //         $photo = $request->file('photo');
    //         $filename = 'photo' . '-' . time() . '.' . $photo->getClientOriginalExtension();
    //         $location = public_path('images/' . $filename);
    //         Image::make($photo)->resize(1300, 362)->save($location);
    //         $profile->photo = $filename;

    //         $oldFilename = $profile->photo;
    //         $profile->photo = $filename;
    //         Storage::delete($oldFilename);
    //     }

    //     $profile->save();
    //     return redirect()->route('profile', $user->id)->with('success', 'Your info are updated');
    // }
}
