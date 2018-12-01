<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;


class User extends Model
{
    public function dbGetUsers($select, $limit, $orderBy, $order) {
        return DB::table('users')->select($select)->orderBy($orderBy, $order)->paginate($limit);
        
    } 

    public function dbGetUser($select, $id) {
        return  DB::select('select ? from users where id = ? ', [$select,  $id]);
    }

    public function dbCreateUser($data) {
        return DB::table('users')->insertGetId($data);
    } 

    public function dbUpdateUser($id, $data) {
        return DB::table('users')->update($data)->where('id', $id);
    }

    public function dbDeleteUser( $id) {
        return DB::table('users')->delete()->where('id', $id);
    }
}