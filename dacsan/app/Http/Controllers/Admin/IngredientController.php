<?php

namespace App\Http\Controllers\Admin;
use App\Models\Food;
use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $ingredients = Ingredient::all();
        return view('admin.ingredient.list', compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $food = Food::all();
        return view('admin.ingredient.add',compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required|min:1|max:225'
        ],
        [
            'name.required'=>'Bạn chưa nhập tên nguyên liệu',
            'name.min'=>'Hãy nhập tên nguyên liệu ít nhất 1 kí tự',
            'name.max'=>'Nhập tên nguyên liệu tối đa 255 kí tự'
        ]);
        $ingredient = new Ingredient;
        $ingredient->name = $request->name;
        $ingredient->id_food = $request->food;
        $ingredient->save();
        return redirect()->route('ingredients.index');
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
        $food = Food::all();
        $ingredient = Ingredient::find($id);
        return view('admin.ingredient.edit',compact('ingredient','food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = Food::all();
        $ingredient = Ingredient::find($id);
        $ingredient->name = $request->name;
        $ingredient->id_food = $request->food;
        $ingredient->update();
        return redirect()->route('ingredients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ingredient = Ingredient::find($id);
        $ingredient->delete();
        return redirect()->route('ingredients.index');
    }
}
