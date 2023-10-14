<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
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