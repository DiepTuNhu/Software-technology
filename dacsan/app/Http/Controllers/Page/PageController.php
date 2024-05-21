<?php

namespace App\Http\Controllers\Page;
use App\Models\Food;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Models\ServicePoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::where('id_category',1)->get();
        return view('user.index',compact('foods'));
    }
    public function introduce()
    {
        return view('user.layout.introduce');
    }
    public function servicePoint()
    {
        $service_point = ServicePoint::all();
        return view('user.layout.service_point',compact('service_point'));
    }

    public function food($id){
        $foods=Food::where('id_category',$id)->get();
        return view('user.index',compact('foods')); 
    }

    public function getSearch(Request $req){
        $foods=Food::where('name','like','%'.$req->key.'%')->get();
                            // ->orWhere('price','like','%'.$req->key.'%')                 
        return view('user.layout.page_search',compact('foods'));
   }
    
    public function getDetailFood(Request $req){
        $food= Food::where('id',$req->id)->first();//Dùng first tại vì sản phẩm chi tiết chỉ lấy ra từ một id.
       // $ingredients= Ingredient::where('id_food',$food->id);
       // $service_point = ServicePoint::where('id_food',$food->id);
        // $sp_tuongtu=products::where('id_type',$sanpham->id_type)->paginate(6);
       // $similar_dishes = Food::where('id_category', $food->id_category)->whereNotIn('id', [$food->id]);
        // ->paginate(6);
        return view('user.layout.detail_product', compact('food'));
    }

    public function getDetailServicePoint(Request $req){
        $service_point = ServicePoint::where('id',$req->id)->first();
        return view('user.layout.detail_service_point', compact('service_point'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
