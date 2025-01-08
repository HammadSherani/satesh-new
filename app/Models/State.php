<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'states'; // Ensure this matches the name of your table
    protected $fillable = ['name', 'status']; // Add any columns that are mass-assignable
}
