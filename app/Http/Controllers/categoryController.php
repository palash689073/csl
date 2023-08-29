<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class categoryController extends Controller
{
    public function index(){
        $data = DB::table('category')->get();
        return view('category.index',compact('data'));
    }

    public function create(){

        return view('category.create');
    }

    public function edit($id){
        $data = DB::table('category')->where(['id'=>$id])->get()->first();
        return view('category.edit',compact('data'));
    }

    public function store(Request $request){


        $this->validate($request,[
            'category_name'=>'required|string| min:10|max:30',
            'description'=>'required',

        ]);

        DB::table('category')->insert([
            'name'=>$request->category_name,
            'description'=>$request->description,
            'updated_at'=>now(),
            'created_at'=>now(),
        ]);
       

       Session::flash('success',"Data saved successfully");
       return redirect ('category/create');
    }


    public function update(Request $request){
        DB::table('category')->where('id','=',$request->id)->update([
            'name'=>$request->category_name,
            'description'=>$request->description,
            'updated_at'=>now(),
            'created_at'=>now(),
        ]);
       

       Session::flash('success',"Data Updated successfully");
       return redirect ('category');
    }

     public function delete($id){

         DB::table('category')->where(['id'=>$id])->delete();
         Session::flash('success',"Data Delete successfully");
       return redirect ('category');
    }
}
