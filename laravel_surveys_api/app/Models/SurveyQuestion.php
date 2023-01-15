<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Survey;

class SurveyQuestion extends Model
{
    use HasFactory;
    protected $fillable = ['question','type','description','data','survey_id'];
    public function survey(){
        return $this->belongsTo(Survey::class,'survey_id', 'id');
        
    }
}
