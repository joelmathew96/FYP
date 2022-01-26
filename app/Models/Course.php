<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['typeofStudent', 'first_name', 'last_name', 'dob', 'icNo', 'nationality', 'passport_num', 'gender', 'mobilenum', 'email_address', 'address','city/town', 'postcode', 'state', 'country', 'academicqualification', 'entrylevel', 'programmelevel', 'faculty/school', 'programmename'];
}
