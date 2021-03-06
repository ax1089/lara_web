<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function show(Category $category,Request $request,Topic $topic){
        //读取分类ID 关联的话题，并按每 20条分页
        $topics = $topic->withOrder($request->order)->where('category_id',$category->id)->with('user','category')->paginate(20);
        //传参变量话题和分类到模版中
        return view('topics.index',compact('topics','category'));
    }


}
