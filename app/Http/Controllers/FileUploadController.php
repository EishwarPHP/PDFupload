<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Pdffile;
class FileUploadController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('fileUpload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        
        // $request->validate([
        //     'title' => 'required',
        //     'pdffile' => 'required|mimes:pdf,xlx,csv|max:2048'
        // ]);
        // return $request;
        $file = $request->file('pdffile');

        $fileName=rand().'.'.$file->extension();
        $file->move(public_path('/uploads/'), $fileName);
        
        Pdffile::create([
            'title' => $request->title,
            'pdffile'=>$fileName
          ]);

        return back()
            ->with('message','You have successfully upload file.');
            // ->with('pdffile', $fileName);
   
    }

    public function fetchfiles()
    {
        $res=Pdffile::all();
        // return $res;
        return view('admin/home', compact('res'));
    }
    public function viewUploadedfile($id)
    {
        $res=Pdffile::all();
        // return $res;
        // return view('admin/home', compact('res'));

        $view=Pdffile::select('*')->where('id', $id)->get();
        // return $view;
        return view('admin/document', compact('view','res'));
    }
}
