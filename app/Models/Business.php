<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'businesses';

    protected $fillable = ['member_id','name','email','address','introduction','phone_number','website','fb_link','insta_link','linkedin_link'];
    
    public function member()
    {
        return $this->belongsTo(User::class,'member_id','id');
    }
}
