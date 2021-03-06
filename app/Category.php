<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;


class Category extends Model
{
    public function dbGetCategories($select, $limit, $orderBy, $order) {
        return DB::table('categories')->select($select)->orderBy($orderBy, $order)->paginate($limit);
        
    } 
    public function dbCreateCategory($data) {
        return DB::table('categories')->insertGetId($data);
    } 
    
    public function dbEditCategory($select, $id) {
        return DB::table('categories')->select($select)->where('id', $id)->get();
    }

    public function dbUpdateCategory($id, $data) {
        return DB::table('categories')->where('id', $id)->update($data);
    }

    public function dbDeleteCategory( $id) {
        return DB::table('categories')->where('id', $id)->delete();
    }

    public function dbGetCategoriesByTaxonomyId($taxonomy_id, $select, $limit, $orderBy, $order) {
        return DB::table('categories')->select($select)->where('taxonomy_id', $taxonomy_id)->orderBy($orderBy, $order)->paginate($limit);
    }
  
    public function dbGetCategoriesForHome($select, $limit, $orderBy, $order) {
        return DB::table('categories')->select($select)->where('taxonomy_id', 1)->orderBy($orderBy, $order)->paginate($limit);
        
    } 
}