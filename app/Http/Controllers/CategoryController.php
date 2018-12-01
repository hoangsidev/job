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
    public function createCategory(Request $request) {
      $Category = new Category(); // khởi tạo model
      $title =$request->title;
      $description =$request->description;
      
      $data = array();
      $data['title'] = $title;
      $data['description'] = $description;
      
      $Category->dbCreateCategory($data);

      return redirect('/admin/categories?orderBy=created_at&order=DESC');
    }
    public function editCategory(Request $request) {
      $Category = new Category(); // khởi tạo model
      $id =$request->id; 
      $select = ['id','title', 'description'];
      $categoryInfo = $Category->dbEditCategory($select, $id);
      return view('backend/categories/edit', compact('categoryInfo'));    
    }

    public function updateCategory(Request $request) {
      $Category = new Category(); // khởi tạo model
      $id =$request->id;
      $title =$request->title;
      $description =$request->description;
      $data = array();
      $data['title'] = $title;
      $data['description'] = $description;
      $Category->dbUpdateCategory($id, $data);
      return redirect('/admin/categories/'.$id.'/edit');
    }

    public function deleteCategory(Request $request) {
      $Category = new Category(); // khởi tạo model
      $id =$request->id;
      $Category->dbDeleteCategory($id);
      return redirect('/admin/categories?orderBy=created_at&order=DESC');
    }
}