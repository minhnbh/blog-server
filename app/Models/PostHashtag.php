<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostHashtag extends Model
{
  protected $table = 'post_hashtag';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['post_id', 'content'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
}
