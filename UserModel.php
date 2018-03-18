<?php

namespace App\Models;

use Illuminate\Database\Eloquesnt\Model;

class UserModel extends Model{
  public $timespace = false;
  protected $table ="users";
  protected $fillable = ['name','email', 'password'];
  protected $guarded = [];
}

 ?>
