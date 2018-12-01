<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\User;
use View;


class UserController extends BaseController
{
    public function getUsers(Request $request) {
      $User = new User(); // khởi tạo model
      $limit = 2;
      $orderBy = $request->orderBy;
      $order = $request->order;
      $select = ['id','username', 'email'];
      $listUsers =  $User->dbGetUsers($select, $limit, $orderBy, $order); 
      return view('backend/users/users', compact('listUsers'));       
    }

    // public function getUser(Request $request) {
    //   $User = new User(); // khởi tạo model
    //   $id = $request->id;
    //   $select = ['id','username', 'email'];
    //   $userInfo =  $User->dbGetUser($select, $id);
    //   return view('backend/users/users', compact('userInfo'));       
    // }

    public function createUser(Request $request) {
        $User = new User(); // khởi tạo model
        $username =$request->username;
        $email =$request->email;
        $password=$request->password;
        $data = array();
        $data['username'] = $username;
        $data['email'] = $email;
        $data['password'] = $password;
        $User->dbCreateUser($data);

        return redirect('/admin/users?orderBy=created_at&order=DESC');
      }
      public function editUser(Request $request) {
        $User = new User(); // khởi tạo model
        $id =$request->id; 
        $select = ['id','username', 'email','password'];
        $userInfo = $User->dbEditUser($select, $id);
        return view('backend/users/edit', compact('userInfo'));    
      }
  
      public function updateUser(Request $request) {
        $User = new User(); // khởi tạo model
        $id =$request->id;
        $email =$request->email;
        $password =$request->password;
        $data = array();
        $data['email'] = $email;
        $data['password'] = $password;
        $User->dbUpdateUser($id, $data);
        return redirect('/admin/users/'.$id.'/edit');
      }
  
      public function deleteUser(Request $request) {
        $User = new User(); // khởi tạo model
        $id =$request->id;
        $User->dbDeleteUser($id);
        return redirect('/admin/users?orderBy=created_at&order=DESC');
      }
}