<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class busnesCard extends Model
{
    use HasFactory;
   
    protected $fillable=[
'name',
'company',
'title',
'email',
'phone',
'user_id',
    ];
}
