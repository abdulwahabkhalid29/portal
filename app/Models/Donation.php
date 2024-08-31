<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    public function member()
    {
        return $this->belongsTo(User::class,'member_id','id');
    }
    public function donation()
    {
        return $this->belongsTo(DonationType::class,'type_id','id');
    }

}
