<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'imageName', 'directory', 'description', 'gallery_id'
  ];

  public function image(){
    return $this->belongsTo('App\Gallery', 'gallery_id');
  }
}
