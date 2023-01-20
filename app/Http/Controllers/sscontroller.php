<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class sscontroller extends Controller
{
    //
    public function ss(){
        return view('welcome');
    }
    public function fs(){
        $datas=data::get();
        return view('fs',compact('datas'));
    }
    public function search(Request $request){
        $search = $request->input('search');
        $posts = data::query()
            ->where('id', 'LIKE', "%{$search}%")
            ->orWhere('name', 'LIKE', "%{$search}%")
            ->get();
    
        return view('search', compact('posts','search'));
        }
        public function uu(){
            $uu=data::where('id','=','7')->first();
            return view('uu',compact('uu'));
        }
        public function vn(Request $request){
            $title=$request->input('title');
            $content=$request->input('content');
            return view('vn',compact('title','content'));
        }

}