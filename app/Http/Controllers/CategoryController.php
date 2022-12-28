<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Request;

class CategoryController extends Controller
{
    public function index(){
        $title = 'All Category';
        $all_category = Category::select('id','name','category_slug','status')->paginate(5);
        return view('category/index',compact('title','all_category'));
    }
    public function add(){
        $title = 'Create Category';
        $all_category = Category::select('id','name','category_slug','status')->paginate(5);
        return view('category/create',compact('title','all_category'));
    }

    public function save(Request $request){
        $title = 'Create Category';
        $category_name = $request->input('category');
        $status = $request->input('status');
        $category_slug = Str::slug($category_name);
        $all_category = Category::select('id','name','category_slug','status')->paginate(5);
        try{
            Category::create(['name'=>$category_name,'category_slug'=>$category_slug,'status'=>$status]);
            session()->flash('message','Successfully Added');
            return view('category/index',compact('title','all_category'));
        }catch(Exception $e){
            session()->flash('message',$e->getMessage());
            return redirect()->back()->withInput();
        }
    }
    public function show($id){
        $title = 'All Category';
        $single_category = Category::select('id','name','category_slug','status')->where('id',$id)->get();
        return view('category/show',compact('title','single_category'));
    }
    public function edit($id){
        $title = 'Edit Category';
        $single_category = Category::select('id','name','category_slug','status')->where('id',$id)->get();
        return view('category/edit',compact('title','single_category'));
    }

    public function update(Request $request){
        $title = 'Update Category';
        $id = $request->input('id');
        $category_name = $request->input('category');
        $status = $request->input('status');
        $category_slug = Str::slug($category_name);
        try{
            Category::where('id',$id)->update(['name'=>$category_name,'category_slug'=>$category_slug,'status'=>$status]);
            session()->flash('message','Successfully Added');
            $all_category = Category::select('id','name','category_slug','status')->paginate(5);
            return view('category/index',compact('title','all_category'));
        }catch(Exception $e){
            session()->flash('message',$e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function delete($id){
        $title = 'All Category';
        $single_category = Category::where('id',$id)->delete();
        $all_category = Category::all();
        return view('category/index',compact('title','all_category'));
    }
}
