<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $guarded = [];

    protected $casts = [
        'tech_stack' => 'array',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
    ];
}
