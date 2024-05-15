<?php

namespace App\Http\Controllers\Admin;
use App\Models\Food;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();
        return view('admin.food.list',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.food.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required|max:50|min:3',
            'price'=>'required'
        
        ],
        [
            'name.required'=>'Bạn chưa nhập tên món ăn. ',
            'name.max'=>'Nhập tối đa 50 ký tự. ',
            'name.min'=>'Nhập tối thiểu 3 ký tự. ',
            'price.required'=>'Bạn chưa nhập giá. ',
            
        ]);

        $food = new Food;
       
        $food->name = $request->name;
        $food->price = $request->price;
        $food->unit = $request->unit;
        $food->description = $request->description;
        $food->id_category = $request->input('category');
        $food->save();
        return redirect()->route('food.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $food = Food::find($id);
        $categories = Category::all();
        return view('admin.food.edit', compact('food','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = Food::find($id);
        $food->name = $request->name;
        $food->price = $request->price;
        $food->unit = $request->unit;
        $food->description = $request->description;
        $food->id_category = $request->category;
        $food->update();
        return redirect()->route('food.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect()->route('food.index');

    }
}
