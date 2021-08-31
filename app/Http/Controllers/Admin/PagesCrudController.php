<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesCrudController extends Controller
{
    public function index($type){
        $data = Page::find(1)->first()->$type;
        return view("page-crud",['type'=>$type,'old'=>$data]);
    }

    public function store(Request $request,$type){

        $data=[
            $type=>$request->$type
        ];

        Page::where('id','=','1')->update($data);
        return redirect("/admin/page/edit/".$type)->with("success","Lưu thành công");
    }
}
