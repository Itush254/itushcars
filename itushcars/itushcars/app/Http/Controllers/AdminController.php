<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Cars;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new category;

        $data ->category_name=$request ->category;

        $data->save();

        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function delete_category($id)
    {
        $data = category::find($id);

        $data->delete();

        return redirect()->back()->with('message','Category Deleted Successfully');
    }

    public function view_cars()
    {
        $category = category::all();

        return view('admin.cars', compact('category'));
    }

    public function add_car(Request $request)
    {
        $cars = new cars;
        
        $cars->title= $request->title;
        $cars->description= $request->description;
        $cars->make= $request->make;
        $cars->model= $request->model;
        $cars->seats= $request->seats;
        $cars->period= $request->period;
        $cars->price= $request->price;
        $cars->discount_price= $request->discount_price;
        $cars->category= $request->category;

        $image1=$request->image1;
        $imagename1= 1+ time().'.'.$image1->getClientOriginalExtension();
        $request->image1->move('cars', $imagename1);   
        $cars->image1=  $imagename1;

        $image2=$request->image2;
        $imagename2= 2+ time().'.'.$image2->getClientOriginalExtension();
        $request->image2->move('cars', $imagename2);   
        $cars->image2=  $imagename2;

        $image3=$request->image3;
        $imagename3= 3+ time().'.'.$image3->getClientOriginalExtension();
        $request->image3->move('cars', $imagename3);   
        $cars->image3=  $imagename3;

        
        $cars->save();

        return redirect()->back()->with('message','Car Added Successfully');
    }

    public function show_cars()
    {
        $cars = cars::all();
        
        return view('admin.show_cars', compact('cars'));
    }

    public function delete_car($id)
    {
        $cars = cars::find($id);

        $cars->delete();
        
        return redirect()->back()->with('message','Car Deleted Successfully');
    }

    public function update_car($id)
    {     
        $cars = cars::find($id); $cars = cars::find($id);
        
        $category = category::all();
        
        return view('admin.update_car', compact('cars','category'));
    }

    public function update_car_confirm(Request $request,$id)
    {
        $cars = cars::find($id);

        $cars->title= $request->title;
        $cars->description= $request->description;
        $cars->make= $request->make;
        $cars->model= $request->model;
        $cars->seats= $request->seats;
        $cars->period= $request->period;
        $cars->price= $request->price;
        $cars->discount_price= $request->discount_price;
        $cars->category= $request->category;

        $image1=$request->image1;

        if($image1)
        {
            $imagename1= 1+ time().'.'.$image1->getClientOriginalExtension();
            $request->image1->move('cars', $imagename1);   
            $cars->image1=  $imagename1;
        }
       

        $image2=$request->image2;

        if($image2)
        {
        $imagename2= 2+ time().'.'.$image2->getClientOriginalExtension();
        $request->image2->move('cars', $imagename2);   
        $cars->image2=  $imagename2;
        }

        $image3=$request->image3;

        if($image3)
        {
        $imagename3= 3+ time().'.'.$image3->getClientOriginalExtension();
        $request->image3->move('cars', $imagename3);   
        $cars->image3=  $imagename3;
        }

        
        $cars->save();

        return redirect()->back()->with('message','Car Updated Successfully');
        
    }
    //
}