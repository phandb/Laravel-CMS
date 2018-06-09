<?php

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers; // We imported this

class Post extends Model 
{
    use Sluggable;
    use SluggableScopeHelpers; // Here we import the trait 

    /**
     * Sluggable configuration.
     *
     * @var array
     */
    public function sluggable() {
        return [
            'slug' => [
                'source'         => 'title',
                'separator'      => '-',
                'includeTrashed' => true,
            ]
        ];
    }



    //Mass Assignment
    protected $fillable = [
        'category_id',
        'photo_id',
        'title',
        'subtitle',
        'author',
        'excerpt',
        'content'


    ];


   

    

    /******Relationships****************************** */
    //Post has one user
    public function user(){
        return $this->belongsTo('App\User');
    }

    //Post has one photo
    public function photo(){

        return $this->belongsTo('App\Photo');
    }

    //Post has one category
    public function category(){

        return $this->belongsTo('App\Category');
    }

    //Set up relationship with comments table
    //a post has many comments
    public function comments(){

       // return $this->hasMany('App\Post');
        return $this->hasMany('App\Comments', 'post_id');
    }

    public function photoPlaceholder(){

        return "http://placehold.it/900x300";
    }

    //
    

    /**************************************************** */
}
