<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;


class Taxonomy extends Model
{
    public function dbGetTaxonomies($select, $limit, $orderBy, $order) {
        return DB::table('taxonomies')->select($select)->orderBy($orderBy, $order)->paginate($limit);
    } 

    public function dbCreateTaxonomy($data) {
        return DB::table('taxonomies')->insertGetId($data);
    } 
    public function dbEditTaxonomy($select, $id) {
        return DB::table('taxonomies')->select($select)->where('id', $id)->get();
    }

    public function dbUpdateTaxonomy($id, $data) {
        return DB::table('taxonomies')->where('id', $id)->update($data);
    }

    public function dbDeleteTaxonomy( $id) {
        return DB::table('taxonomies')->where('id', $id)->delete();
    }
}