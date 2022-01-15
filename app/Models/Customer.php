<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_furigana', 'birthday', 'email'];

    public static $rules = array(
        'name' => 'required',
        'name_furigana' => 'required',
        'birthday' => 'required|date',
        'email' => 'required|email'
    );
}
