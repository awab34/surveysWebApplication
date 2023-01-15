<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Models\SurveyAnswer;
use App\Models\SurveyQuestion;

class Survey extends Model
{
    use HasFactory,HasSlug;
    const TYPE_TEXT = 'text';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_SELECT = 'select';
    const TYPE_RADIO = 'radio';
    const TYPE_CHECKBOX = 'checkbox';
    protected $fillable = ['title','image','slug','status','description','expire_date','user_id'];
    public function getSlugOptions(): SlugOptions{
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    public function questions(){
        return $this->hasMany(SurveyQuestion::class,'survey_id', 'id');
    }
    public function answers(): hasMany{
        return $this->hasMany(SurveyAnswer::class,'survey_id', 'id');
    }
}
