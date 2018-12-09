<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Post;
use App\User;
use App\Category;
use View;


class HomeController extends BaseController
{
    public function index(Request $request) {
      $Post = new Post();
      $User = new User();
      $Category = new Category();

    
      $listPosts =  $Post->dbGetPosts(['id','title', 'created_at'], 5, 'created_at', 'DESC');
      return view('frontend/index', compact('listPosts'));       
    }

    
}
