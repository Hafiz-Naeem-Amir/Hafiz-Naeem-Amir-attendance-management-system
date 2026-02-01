<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_id',
        'franchise_id',
        'type',
        'start_date',
        'end_date',
        'reason',
        'days',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'emp_id');
    }

    public function franchise()
    {
        return $this->belongsTo(Franchise::class, 'franchise_id');
    }

    public function setDaysAttribute($value)
    {
        if (!$value && $this->start_date && $this->end_date) {
            $this->attributes['days'] =
                Carbon::parse($this->start_date)
                ->diffInDays(Carbon::parse($this->end_date)) + 1;
        } else {
            $this->attributes['days'] = $value;
        }
    }
}
