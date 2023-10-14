<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'looking_for_sex',
        'number_of_people',
        'intrested_in',
        'self_introduction',
        'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    protected static function boot()
    {
        parent::boot();

        // 保存時user_idをログインユーザーに設定
        self::saving(function($timeline) {
            $timeline->user_id = \Auth::id();
        });
    }
    
}
