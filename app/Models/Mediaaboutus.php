<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediaaboutus extends Model
{
    use HasFactory;
    protected $fillable=['applicant_name', 'applicant_email', 'applicant_email', 'applicant_cv'];
}
