<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Get the articles associated with the given tag
 * 
 */
class Tag extends Model
{
    /**
     *Fillable field for tags
     * 
     * @var type 
     */
    protected $fillable = [
        'tag_name'
    ];
    
    
    public function articles(){
        return $this->belongsToMany('App\Article');
    }
}
