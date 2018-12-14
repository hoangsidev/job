<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Post;
use App\Category;
use App\Taxonomy;
use App\Relationship;
use View;


class PostController extends BaseController
{
    public function getPosts(Request $request) {
      $Post = new Post(); // khởi tạo model
      $limit = 5;
      $orderBy = $request->orderBy;
      $order = $request->order;
      $select = ['id','title','created_at'];
      $listPosts =  $Post->dbGetPosts($select, $limit, $orderBy, $order);
      return view('backend/posts/posts', compact('listPosts'));       
    }

    public function formCreatePost(Request $request) {
      $Post = new Post();
      $Taxonomy = new Taxonomy();
      $Category = new Category();
      $resultTaxonomiesCategories = array();
      $listTaxonomies =  $Taxonomy->dbGetTaxonomies(['id', 'title'], '1000', 'title', 'DESC');
      foreach($listTaxonomies as $taxonomy) {
        $listCategories =  $Category->dbGetCategoriesByTaxonomyId($taxonomy->id, ['id', 'title'], '1000', 'title', 'DESC');  
        $taxonomy->categories = $listCategories;
        array_push($resultTaxonomiesCategories, $taxonomy);
      }

      return view('backend/posts/create', compact('resultTaxonomiesCategories'));  
    }

    public function createPost(Request $request) {
      $Post = new Post(); // khởi tạo model
      $Relationship = new Relationship();
      $title = $request->title;
      $content = $request->content;
      $categories = $request->categories; // 7,8,9 
      $data = array();
      $data['title'] = $title;
      $data['content'] = $content;
      $postId = $Post->dbCreatePost($data);


      $arrCategories = explode(",",$categories);
      foreach($arrCategories as $categoryId) {
        if($categoryId!='') {
          $dataRelationship = array();
          $dataRelationship['post_id'] = $postId;
          $dataRelationship['category_id'] = $categoryId;
          $Relationship->dbCreateRelationship($dataRelationship);
        }
      }
      return redirect('/admin/posts/'.$postId.'/edit');
    }



    public function editPost(Request $request) {
      $Post = new Post(); // khởi tạo model
      $Taxonomy = new Taxonomy();
      $Category = new Category();
      $Relationship = new Relationship();
      $id =$request->id; 
      $select = ['id','title', 'content'];
      $postInfo = $Post->dbEditPost($select, $id);
      $categoriesOfPost = $Relationship->dbGetCategoriesOfPostByPostId($postInfo[0]->id);
      $catOfPost = array();
      foreach($categoriesOfPost as $cat) {
        array_push($catOfPost, $cat->category_id);
      }
     
      $resultTaxonomiesCategories = array();
      $listTaxonomies =  $Taxonomy->dbGetTaxonomies(['id', 'title'], '1000', 'title', 'DESC');
      foreach($listTaxonomies as $taxonomy) {
        $listCategories =  $Category->dbGetCategoriesByTaxonomyId($taxonomy->id, ['id', 'title'], '1000', 'title', 'DESC');  
        $taxonomy->categories = $listCategories;
        array_push($resultTaxonomiesCategories, $taxonomy);
      }
      return view('backend/posts/edit', compact('postInfo', 'resultTaxonomiesCategories', 'catOfPost'));    
    }

    public function updatePost(Request $request) {
      $Post = new Post(); // khởi tạo model
      $Taxonomy = new Taxonomy();
      $Category = new Category();
      $Relationship = new Relationship();
      $id =$request->id;
      $title =$request->title;
      $content =$request->content;
      $data = array();
      $data['title'] = $title;
      $data['content'] = $content;
      $Post->dbUpdatePost($id, $data);

      $Relationship->dbDeleteRelationship($id);
      $categories = $request->categories;
      $arrCategories = explode(",",$categories);
      foreach($arrCategories as $categoryId) {
        
        if($categoryId!='') {
          $dataRelationship = array();
          $dataRelationship['post_id'] = $id;
          $dataRelationship['category_id'] = $categoryId;
          $Relationship->dbCreateRelationship($dataRelationship);
        }
      }


      return redirect('/admin/posts/'.$id.'/edit');
    }

    public function deletePost(Request $request) {
      $Post = new Post(); // khởi tạo model
      $id =$request->id;
      $Post->dbDeletePost($id);
      return redirect('/admin/posts?orderBy=created_at&order=DESC');
    }
    //End backend
    public function searchPosts(Request $request) {
      $Post = new Post();
      $searchItem = $request->search;$select=['id','company','title','content','address', 'salary','description','created_at'];

      $listPosts =  $Post->dbSearchPosts($searchItem, $select, 10, 'created_at', 'DESC');
      return view('frontend/posts/search', compact('listPosts'));  
      
    }
    public function detailPosts(Request $request) {
      $Post = new Post();
      $id =$request->id;
      $select=['id','company','title','content','address', 'salary','description','created_at'];
      $detailPost =  $Post->dbDetailPosts($select,$id);
      return view('frontend/posts/detail', compact('detailPost'));       
    }
    
    public function formCreatePostEmployer(Request $request) {
      $Post = new Post();
      $Taxonomy = new Taxonomy();
      $Category = new Category();
      $resultTaxonomiesCategories = array();
      $listTaxonomies =  $Taxonomy->dbGetTaxonomies(['id', 'title'], '1000', 'title', 'DESC');
      foreach($listTaxonomies as $taxonomy) {
        $listCategories =  $Category->dbGetCategoriesByTaxonomyId($taxonomy->id, ['id', 'title'], '1000', 'title', 'DESC');  
        $taxonomy->categories = $listCategories;
        array_push($resultTaxonomiesCategories, $taxonomy);
      }

      return view('/frontend/posts/postEmployer', compact('resultTaxonomiesCategories'));  
    }

    public function createPostEmployer(Request $request) {
      $Post = new Post(); // khởi tạo model
      $Relationship = new Relationship();
      $title = $request->title;
      $company = $request->company;
      $content = $request->content;
      $address = $request->address;
      $salary = $request->salary;
      $description = $request->description;
      $categories = $request->categories;
      $data = array();
      $data['title'] = $title;
      $data['company'] = $company;
      $data['content'] = $content;
      $data['address'] = $address;
      $data['salary'] = $salary;
      $data['description'] = $description;
      $postId = $Post->dbCreatePost($data);


      $arrCategories = explode(",",$categories);
      foreach($arrCategories as $categoryId) {
        if($categoryId!='') {
          $dataRelationship = array();
          $dataRelationship['post_id'] = $postId;
          $dataRelationship['category_id'] = $categoryId;
          $Relationship->dbCreateRelationship($dataRelationship);
        }
      }
      return redirect('/postEmployer/'.$postId.'/edit');
    }
    
    
}
