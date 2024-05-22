<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.image.list',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $food = Food::all();
        return view('admin.image.add', compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'image'=>'required',
        ],
        [
            'image.required'=>'Bạn chưa chọn ảnh. ', 
        ]);
       $images = new Image;
       $images->image = $request->image;
       if ($request->hasFile('image')) {
            $file= $request->file('image');
            $extension = $file->getClientOriginalExtension();//Lấy .jpg, png
            $filename = time().'.'.$extension;
            $file->move('admin/images/',$filename);
            $images->image = $filename;
        }  
        $images->id_food = $request->food;
        $images->save();
        return redirect()->route('images.index');
    
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
        $images = Image::find($id);
        $food = Food::all();
        return view('admin.image.edit',compact('images','food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image=Image::find($id);
        if ($request->hasFile('image')) {
            $oldimage='admin/images/'.$image->image;

            if(File::exists($oldimage)){
                   File::delete($oldimage);
            }
            $file= $request->file('image');
            $extension = $file->getClientOriginalExtension();//Lấy .jpg, png
             $filename = time().'.'.$extension;
             $file->move('admin/images/',$filename);//upload lên thu muc upload:giaodien_admin/upload/images/
             $image->hinh_anh = $filename;
         }
                                        
      $image->update();
      return redirect()->route('images.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $images = Image::find($id);
        $image='admin/images/'.$images->hinh_anh;
        if(File::exists($image)){
            File::delete($image);
        }
        $images->delete();
        return redirect()->route('images.index');
    }
}
