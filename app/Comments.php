<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //Mass Assignment

    protected $fillable = [
            'post_id',
            'author',
            'email',
            'photo',
            'body',
            'is_active'

    ];


    //Set up relationship with replies table
    //a comment has many replies
    public function replies(){

        return $this->hasMany('App\CommentReplies');
    }


    public function post(){
        return $this->belongsTo('App\Post');
    }
}
