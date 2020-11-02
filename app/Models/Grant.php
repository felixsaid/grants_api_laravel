<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    protected $table = 'grants';
    protected $fillable = ['grant_name', 'grant_status', 'grantor', 'grant_location', 'grant_desc', 'grant_amount', 'user_id'];
}
