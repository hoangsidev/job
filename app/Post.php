<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;


class Post extends Model
{
    public function dbGetPosts($select, $limit, $orderBy, $order) {
        return DB::table('posts')->select($select)->orderBy($orderBy, $order)->paginate($limit);
        
    } 

    public function dbCreatePost($data) {
        return DB::table('posts')->insertGetId($data);
    } 

    public function dbEditPost($select, $id) {
        return DB::table('posts')->select($select)->where('id', $id)->get();
        // return DB::table('posts')->raw('select ? from posts where id = ? ', [$select,  $id]);
    }

    public function dbUpdatePost($id, $data) {
        return DB::table('posts')->where('id', $id)->update($data);
    }

    public function dbDeletePost( $id) {
        return DB::table('posts')->where('id', $id)->delete();
    }
}