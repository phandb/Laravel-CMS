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
            'body',
            'is_active'

    ];


    //Set up relationship with replies table
    //a comment has many replies
    public function replies(){

        return $this->hasMany('App\CommentReply');
    }


    public function post(){
        return $this->belongsTo('App\Post');
    }
}
