<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
  protected $table = 'post_comment';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['post_id', 'user_id', 'parent_id', 'content'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
}
