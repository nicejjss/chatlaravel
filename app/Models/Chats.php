<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    protected $table = 'Chats';

    public $timestamps = true;

    protected $fillable = [
      'User1',
      'User2',
    ];
}
