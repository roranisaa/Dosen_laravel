<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $table = 'lecturers'; // Nama tabel di database
    protected $fillable = ['name', 'email', 'phone']; // Kolom yang bisa diisi secara massal
}
