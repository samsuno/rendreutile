<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Atributes that are mass assignable; temporary adding user_id
    protected $fillable = [
        'nom_article',
        'etat_article',
        'type_article',
        'url_image',
        'user_id'];
    
    /**
     * An article is owned by a user
     * @return type
     */
    public function user(){
        
        return $this->belongsTo('App\User');
    }
    
    /**
     * Get the tags associated with a given articles
     * 
     * @return type
     */
    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    /**
     * Get list of tags ids associated with the current article
     * 
     * @return array
     */
    public function getTagListAttribute(){
        return $this->tags->lists('id')->all();
    }
}

