<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'contact', 'email', 'preferred_mode_of_contact', 'gender'];
}
