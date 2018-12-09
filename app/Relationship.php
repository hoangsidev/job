<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;


class Relationship extends Model
{

    public function dbGetCategoriesOfPostByPostId($postId) {
        return DB::table('relationships')->select(['category_id'])->where('post_id', $postId)->get();
    } 

    public function dbCreateRelationship($data) {
        return DB::table('relationships')->insertGetId($data);
    } 

    public function dbDeleteRelationship($postId) {
        return DB::table('relationships')->where('post_id', $postId)->delete();
    } 

  
}