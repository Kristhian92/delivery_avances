<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_Record extends Model
{
    use HasFactory;
    protected $fillable = [

        'relevant_patient_info',
        'date_time',
        'record_number',
        'current_patient_status',
        'background_info',
        'final_evolution',
        'professional_concept',
        'recommendations',
    ];



    public function recordable()
    {
        return $this->morphTo();
    }

}
