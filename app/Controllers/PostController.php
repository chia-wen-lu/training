<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post; //引入 model Post

class PostController extends BaseController
{
	public function index()
	{
		$model = new Post();
        $data = 
        [
        'posts'  => $model->findAll()//model 抓資料的方法(抓全部)
        ];
		return view('posts/index',$data);
	}
	public function create()
	{
		return view('posts/create');
	}
	public function store()
	{
		/*$date=
       		[
                'title' => $this->request->getVar('title'),   
                'content'  => $this->request->getVar('content')
            ];
       //print_r($date);*/

	   	$model = new Post(); //呼叫Post model
      	$YN=$model->save([   //CI4 model存資料的寫法
                        'title' => $this->request->getVar('title'),
                        'content'  => $this->request->getVar('content') 
                    ]);
		return redirect('PostController');
	}

	public function show($post_id)
	{
		$model = new Post();
        $data = 
        [
        'post'  => $model->find($post_id) ////model 抓資料的方法(只抓id=$post_id的那一筆)
        ];
        return view('posts/show',$data);
	}
}