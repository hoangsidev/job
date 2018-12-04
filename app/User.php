<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;


class User extends Model
{
    public function dbGetUsers($select, $limit, $orderBy, $order) {
        return DB::table('users')->select($select)->orderBy($orderBy, $order)->paginate($limit);
        
    } 

    public function dbCreateUser($data) {
        return DB::table('users')->insertGetId($data);
    } 

    public function dbEditUser($select, $id) {
        return DB::table('users')->select($select)->where('id', $id)->get();
        // return DB::table('users')->raw('select ? from users where id = ? ', [$select,  $id]);
    }

    public function dbUpdateUser($id, $data) {
        return DB::table('users')->where('id', $id)->update($data);
    }

    public function dbDeleteUser( $id) {
        return DB::table('users')->where('id', $id)->delete();
    }
    public function dbRegisterUser($data) {
        return DB::table('users')->insertGetId($data);
    } 
    public function dbLoginUser($data) {
        return DB::table('users')->select($data);
    }
    public function dbInformationUser($select, $id) {
        return DB::table('users')->select($select)->where('id', $id)->get();
        
    }
}