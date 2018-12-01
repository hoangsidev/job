<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Post;
use View;


class PostController extends BaseController
{
    public function getPosts(Request $request) {
      $Post = new Post(); // khởi tạo model
      $limit = 2;
      $orderBy = $request->orderBy;
      $order = $request->order;
      $select = ['id','title', 'created_at'];
      $listPosts =  $Post->dbGetPosts($select, $limit, $orderBy, $order);
      return view('backend/posts/posts', compact('listPosts'));       
    }

    public function createPost(Request $request) {
      $Post = new Post(); // khởi tạo model
      $title =$request->title;
      $content =$request->content;
      $data = array();
      $data['title'] = $title;
      $data['content'] = $content;
      $postInfo = $Post->dbCreatePost($data);
      return redirect('/admin/posts/'.$postInfo.'/edit');
    }

    public function editPost(Request $request) {
      $Post = new Post(); // khởi tạo model
      $id =$request->id; 
      $select = ['id','title', 'content'];
      $postInfo = $Post->dbEditPost($select, $id);
      return view('backend/posts/edit', compact('postInfo'));    
    }

    public function updatePost(Request $request) {
      $Post = new Post(); // khởi tạo model
      $id =$request->id;
      $title =$request->title;
      $content =$request->content;
      $data = array();
      $data['title'] = $title;
      $data['content'] = $content;
      $Post->dbUpdatePost($id, $data);
      return redirect('/admin/posts/'.$id.'/edit');
    }

    public function deletePost(Request $request) {
      $Post = new Post(); // khởi tạo model
      $id =$request->id;
      $Post->dbDeletePost($id);
      return redirect('/admin/posts?orderBy=created_at&order=DESC');
    }
}
