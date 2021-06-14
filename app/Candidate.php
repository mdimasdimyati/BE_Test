<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Status;
use App\Religion;
use App\Bank;
use App\Education;
use App\University;
use App\CandidateOrganization;
use App\SourceInformation;


class Candidate extends Model
{
    
    // public $timestamps = false;
    protected $table = "candidate";
    protected $guarded = ['id'];

    public function stat()
    {
        // return $this->belongsTo(Status::class);
        return $this->belongsTo(Status::class,'candidate_status_id','id');
    }
    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function organi()
    {
        return $this->hasOne(CandidateOrganization::class);
    }
    public function infor()
    {
        return $this->belongsTo(SourceInformation::class,'source_information_id','id');
    }

   
}
