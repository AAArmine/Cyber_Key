<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'job_applicants';
    protected $fillable = [
        'name', 'email',  'job_title', 'attached_cv'
    ];
}
