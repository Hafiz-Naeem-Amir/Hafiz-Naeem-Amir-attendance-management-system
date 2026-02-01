<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_id',
        'name',
        'phone',
        'designation_id',
        'hire_date',
        'status',
        'franchise_id',
        'photo' // Add this for image
    ];

    public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
}
