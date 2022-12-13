<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'authors_id',
    ];

}
/*
{
    "data": {
        "name": "Daniel Assani",
        "email": "cr7@gmail.com",
        "institution_id": "7",
        "phone": "0813309349",
        "avatar": "http://localhost:8000/storage/users/avatars/2JEWhc0NqDkKqqoBtVcaZezrBrqDtIVMTkzhdSKN.jpg"
    }
}



*/
