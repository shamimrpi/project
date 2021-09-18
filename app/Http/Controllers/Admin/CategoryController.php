<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    //

    public function index(){
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:categories',
            'image' => 'required|image:jpg,png,jpeg'
        ]);
        $category =new  Category();
        $slug = Str::slug($request->name);
        $category->name = $request->name;
        $category->slug = $slug;
       
        
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = rand(0000,9999).$file->getClientOriginalName();
            $file->move(public_path('admin/images/category'),$fileName);
            $category->image = $fileName;
          
        }
        $category->status = 'A';
        $category->save();
        return back()->with('success','Product successfully added.');
      
     
    }
    public function edit($id){
        $category = Category::where('id',$id)->first();
        return view('admin.categories.edit',compact('category'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|unique:categories,id',
            'image' => 'required'
        ]);

        $category = Category::where('id',$id)->first();
        $category->name = $request->name;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(('admin/images/category/'.$category->image));
            $fileName = rand(0000,9999).$file->getClientOriginalName();
            $file->move(public_path('admin/images/category'),$fileName);
            $category->image = $fileName;
        }
        $category->status = $request->status;
        $category->save();
        return redirect()->route('category')->with('success','Category updated successfully.');
    }

    public function active($id){
        $category = Category::where('id',$id)->first();
        if($category->status == 'A'){
            $category->status = 'D';
        }
        else{
            $category->status = 'A';
        }
        $category->save();
        return redirect()->route('category')->with('success','Category Activation successfully.');
    }
    public function destroy($id){
        $category = Category::where('id',$id)->first();
        @unlink(('admin/images/category/'.$category->image));
        $category->delete();
        return redirect()->route('category')->with('success','Category Deleted successfully.');
        
    }
}
