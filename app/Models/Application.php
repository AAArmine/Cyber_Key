<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'job_applicants';
    protected $fillable = [
        'name', 'email1',  'job_title', 'attached_cv'
    ];
}
