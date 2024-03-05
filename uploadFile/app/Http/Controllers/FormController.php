<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
        //BÀI 1:
        public function post(Request $request){
            return back()->withInput(
                $request->only('username')
            );
        }
    
        //BÀI 2
        public function upload(Request $request) {
            if($request->hasFile('photo')){
                $file = $request->file('photo'); 
                $fileExtension = $file->getClientOriginalExtension();
                $fileName = 'phamthihi.'.$fileExtension;
                $file->storeAs('image', $fileName);
                $array = [
                    'fileExtension' => $fileExtension,
                    'fileName' => $fileName
                ];
                return view('formUpload',compact('array') );
            }
            else {
                $error = 'Bạn vui lòng chọn tệp cần upload';
                return view('formUpload', compact('error'));
            }
        }
}
