<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Category;
use View;


class CategoryController extends BaseController
{
    public function getCategories(Request $request) {
      $Category = new Category(); // khởi tạo model
      $limit = 2;
      $orderBy = $request->orderBy;
      $order = $request->order;
      $select = ['id','title','description'];
      $listCategories =  $Category->dbGetCategories($select, $limit, $orderBy, $order);
      $titlePage = 'List Categories';
      return view('backend/categories/categories', compact('listCategories', 'titlePage'));       
    }
}