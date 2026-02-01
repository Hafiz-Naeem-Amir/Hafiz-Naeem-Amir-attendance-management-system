<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_id',
        'franchise_id',
        'date',
        'check_in',
        'check_out',
    ];

    public function employee()
    {
        return $this->belongsTo(User::class, 'emp_id');
    }

    public function franchise()
    {
        return $this->belongsTo(Franchise::class, 'franchise_id');
    }
}
