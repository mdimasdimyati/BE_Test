<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
     // public $timestamps = false;
     protected $table = "religion";
     protected $guarded = ['id'];

    //  public function candidate()
    //  {
    //      return $this->belongsTo(Candidate::class);
    //  }
    //  public function candidate()
    //  {
    //      return $this->belongsTo(Candidate::class, 'foreign_key');
    //  }
}
