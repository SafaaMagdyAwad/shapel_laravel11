<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'reciver_id',
    ];
    public function sender(){
        return $this->belongsTo(user::class);
    }
    public function reciver(){
        return $this->belongsTo(user::class);
    }
    public function users_messages(){
        return $this->belongsTo(UsersMessage::class);
    }
}
