<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "candidate_status";
    protected $guarded = ['id'];
}
