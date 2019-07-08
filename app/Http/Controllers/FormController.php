<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function get(Request $request)
    {
        
        return view('form');
    }
    public function post(Request $request)
    {
        $attr = $request->all([
        
        ]);
        $request->validate([
            'title' => 'required|max:10'
        ], [
            'title.max' => 'Nhiều ký tự quá'
        ]);
        if($request->has('class_php')){
            echo 'PHP Checked';
        }
        if($request->has('class_laravel')){
            echo 'Laravel Checked';
        }
        print_r($attr);die;
        if(strlen($request->title()) > 10){
            return response()->json([
                'message' => "Too Long My Friend",

            ]);
        }
    }
}
