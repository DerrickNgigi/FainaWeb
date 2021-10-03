<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scholarshipRegistration extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'email',
        'guarantor_name',
        'guarantor_email',
        'guarantor_phone',
        'course',
        'platform',
        'user_phone',
        'user_whatsapp',
        'county',
        'ward',
        'residence',
        'gender',
        'disability',
        'awareness',
        'linkedin',
        'internet_Connectivity',
        'internet_access',
        'education_level',
        'student_club',
        'employment_Status',
        'opportunities',
        'awareness',
        'why_you',
        'faculty',
        'year_Study',
        'specialization_area',
        'declaration',

    ];
}
