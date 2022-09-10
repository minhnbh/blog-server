<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'post';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title', 'description', 'content', 'thumbnail', 'category_id', 'created_by', 'num_of_view', 'slugify'
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
}
