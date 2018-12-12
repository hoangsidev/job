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
      $limit = 4;
      $orderBy = $request->orderBy;
      $order = $request->order;
      $select = ['id','username', 'email','first_name','last_name'];
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
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $password=$request->password;
        $data = array();
        $data['username'] = $username;
        $data['email'] = $email;
        $data['first_name'] = $firstname;
        $data['last_name'] = $lastname;
        $data['password'] = $password;
        $User->dbCreateUser($data);

        return redirect('/admin/users?orderBy=created_at&order=DESC');
      }
      public function editUser(Request $request) {
        $User = new User(); // khởi tạo model
        $id =$request->id; 
        $select = ['id','username', 'email','first_name','last_name','password'];
        $userInfo = $User->dbEditUser($select, $id);
        return view('backend/users/edit', compact('userInfo'));    
      }
  
      public function updateUser(Request $request) {
        $User = new User(); // khởi tạo model
        $id =$request->id;
        $email =$request->email;
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $password =$request->password;
        $data = array();
        $data['email'] = $email;
        $data['first_name'] = $firstname;
        $data['last_name'] = $lastname;
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
      public function registerUser(Request $request){
        $User = new User(); // khởi tạo model
        $username =$request->username;
        $email =$request->email;
        $password=$request->password;
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $data = array();
        $data['username'] = $username;
        $data['email'] = $email;
        $data['password'] = $password;
        $data['first_name'] = $firstname;
        $data['last_name'] = $lastname;
        $User->dbRegisterUser($data);

        return redirect('/');

      }
      public function loginUser(Request $request)
      {
        $User = new User(); // khởi tạo model
        $username =$request->username;
        $password=$request->password;


      $userInfo =  $User->dbLoginUser($username, $password); 

      
        if(count($userInfo) > 0) {
          return redirect('/');
          //return redirect('/information/'.$userInfo[0]->id);
        }  else {
          $error = 'Sai tài khoản hoặc mật khẩu, vui lòng kiểm tra lại!';
          return view('frontend/users/login', compact('error'));  
        }
        
      }


      public function informationUser(Request $request) {
        $User = new User(); // khởi tạo model
        $id =$request->id; 
        $select = ['id','username', 'first_name', 'last_name', 'email','password'];
        $information = $User->dbInformationUser($select, $id);
        return view('frontend/users/information', compact('information'));   
      }
      
      public function updateInformation(Request $request) {
        $User = new User(); // khởi tạo model
        $id =$request->id;
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $email =$request->email;
        $password =$request->password;
        $data = array();
        $data['email'] = $email;
        $data['first_name'] = $firstname;
        $data['last_name'] = $lastname;
        $data['password'] = $password;
        $User->dbUpdateInformation($id, $data);
        return redirect('/information/'.$id.'/');
      }
}