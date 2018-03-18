<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{

  protected $user;

  public function __construct(UserModel $user)
  {
    $this->user = $user;
  }

  public function register(Request $request)
  {
    // echo $request->name;
    // echo "  ";
    // echo $request->email;
    // echo "  ";
    // echo $request->password;
    // echo "  ";
    // return "success";
    $user = [
      "name"  => $request->name,
      "email"  => $request->email,
      "password"  => md5($request->password)
    ];

    // UserModel::save($user);
    $user = $this->user->create($user);

    if($user)
    {
      return "Successfully Created";
    }
    return "Failed";
  }

  public function all()
  {
    $user = $this->user->all();

    return view("all")->with('users', $user);
  }

  public function find($id)
  {
    $user = $this->user->find($id);
    // $user = $this->user->where("id", "=", $id);

    return $user;
  }
  public function delete($id)
  {
    $user = $this->user->find($id)->delete();

    return "Delete Successful";
  }
  public function update($id)
  {
    $user = $this->user->find($id);

    return view("updateForm")->with('user',$user);
  }
  public function updateData(Request $request,$id)
  {
    $user = $this->user->find($id);

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    if($user->password == $request->input('password'))
    {

    }
    else
    {
      $user->password = md5($request->input('password'));
    }

    $user->save();

    return "Update Successful";
  }
}


?>
