<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePoint;
use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\File;
class ServicePointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $service_point = ServicePoint::all();
        return view('admin.service_point.list', compact('service_point'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $food = Food::all();
        return view('admin.service_point.add',compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service_point = new ServicePoint;
        $this->validate($request,
        [
            'name' => 'required|max:225',

        ],
        [
            'name.required' => 'Bạn chưa nhập tên',
            'name.max' => 'Nhập tên tối đa 225 kí tự'

        ]);

        $service_point->name = $request->name;
        $service_point->description = $request->description;
        $service_point->address = $request->address;
        $service_point->open_time = $request->opening_time;
        $service_point->close_time = $request->close_time;
        $service_point->id_food = $request->food;
        $service_point->image = $request->image;
        if ($request->hasFile('image')) {
            $file= $request->file('image');
            $extension = $file->getClientOriginalExtension();//Lấy .jpg, png
            $filename = time().'.'.$extension;
            $file->move('admin/images/',$filename);
            $$service_point->image = $filename;
        }  
        $service_point->phone = $request->phone;
        $service_point->save();
        return redirect()->route('service-point.index');

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
        $service_point = ServicePoint::find($id);
        $food = Food::all();
        return view('admin.service_point.edit',compact('service_point','food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = Food::all();
        $service_point = ServicePoint::find($id);
        $service_point->name = $request->name;
        $service_point->description= $request->description;
        $service_point->address = $request->address;
        $service_point->open_time = $request->opening_time;
        $service_point->close_time= $request->close_time;
        $service_point->id_food = $request->food;
        if ($request->hasFile('image')) {
            $oldimage='admin/images/'.$service_point->image;

            if(File::exists($oldimage)){
                   File::delete($oldimage);
            }
            $file= $request->file('image');
            $extension = $file->getClientOriginalExtension();//Lấy .jpg, png
             $filename = time().'.'.$extension;
             $file->move('admin/images/',$filename);
             $service_point->image = $filename;
         }

        $service_point->phone = $request->phone;
        $service_point->update();
        return redirect()->route('service-point.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service_point = ServicePoint::find($id);
        $image='admin/images/'.$service_point->image;
        if(File::exists($image)){
            File::delete($image);
        }
        $service_point->delete();
        return redirect()->route('service-point.index');
    }
}
