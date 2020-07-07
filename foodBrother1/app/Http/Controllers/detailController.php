<?php
namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use DB;

class detailController extends Controller
{
    public function getChitiet(Request $req,$id){
        $sanpham = DB::select('select p.id,title,description,unit_price, promotion_price, image from galleries as g, products as p where g.product_id=p.id and p.id='.$id);
    //    echo json_encode($sanpham);
        return view( 'detail',compact('sanpham'));
    }
}
