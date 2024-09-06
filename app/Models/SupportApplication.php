<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id',
        'title',
        'description',
    ];
    public function member()
    {
        return $this->belongsTo(User::class,'member_id','id');
    }
}
