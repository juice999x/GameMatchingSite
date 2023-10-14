<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'sex',
        'birthday',
        'game',
        'easy_introduction',
        'image_url',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function timelines()
    {
        return $this->hasMany('App\Models\Timeline'); 
    }
    
    public function likes()
    {
        return $this->belongsToMany('App\Models\Timeline','likes','user_id','timeline_id')->withTimestamps();
    }
    
    public function isLike($timelineId)
    {
      return $this->likes()->where('timeline_id',$timelineId)->exists();
    }
    
    public function like($timelineId)
    {
      if($this->isLike($timelineId)){
      } else {
        $this->likes()->attach($timelineId);
      }
    }
    
    public function unlike($timelineId)
    {
      if($this->isLike($timelineId)){
        $this->likes()->detach($timelineId);
      } else {
      }
    }

}
