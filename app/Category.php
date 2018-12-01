<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;


class Category extends Model
{
    public function dbGetCategories($select, $limit, $orderBy, $order) {
        return DB::table('categories')->select($select)->orderBy($orderBy, $order)->paginate($limit);
        
    } 

    public function dbGetCategory($select, $id) {
        return  DB::select('select ? from categories where id = ? ', [$select,  $id]);
    }

    public function dbCreateCategory($data) {
        return DB::table('categories')->insertGetId($data);
    } 

    public function dbUpdateCategory($id, $data) {
        return DB::table('categories')->update($data)->where('id', $id);
    }

    public function dbDeleteCategory( $id) {
        return DB::table('categories')->delete()->where('id', $id);
    }
}