<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
  protected $table = 'post_like';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['post_id', 'user_id', 'status'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
}
