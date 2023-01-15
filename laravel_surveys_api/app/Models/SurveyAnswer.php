<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Survey;

class SurveyAnswer extends Model
{
    use HasFactory;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $fillable = ['start_date','end_date','survey_id'];
    public function survey(){
        return $this->belongsTo(Survey::class,'survey_id', 'id');
    }
}
