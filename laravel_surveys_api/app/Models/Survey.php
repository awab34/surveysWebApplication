<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

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
        return SlugOptions::create()->generateSlugsForm('title')->saveSlugsTo('slug');
    }
    public function questions(){
        return $this->hasMany(SurveyQuestion::class);
        
    }
}
