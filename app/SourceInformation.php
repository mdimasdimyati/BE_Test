<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SourceInformation extends Model
{
    // public $timestamps = false;
    protected $table = "source_information";
    protected $guarded = ['id'];

}
