<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateOrganization extends Model
{
     // public $timestamps = false;
     protected $table = "candidate_organization";
     protected $guarded = ['id'];

//      public function CandidateOrganization()
//     {
//         return $this->hasOne(Candidate::class);
//     }
}
