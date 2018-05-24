<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReplies extends Model
{
    //Mass Assignment
    protected $fillable = [
        'comment_id',
        'author',
        'email',
        'photo',
        'body',
        'is_active'

    ];

    //Setup relationship with comment table
    //One reply belongs to on comment
    public function comment(){
        return $this->belongsTo('App\Comments');
    }
}
