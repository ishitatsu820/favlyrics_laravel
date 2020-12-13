<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    //変更していいもの
    protected $fillable = ['title', 'lyrics', 'artist', 'music_title','delete_flg'];
    //変更してはいけないのならば
    //protected $guarded = ['id'];

}
