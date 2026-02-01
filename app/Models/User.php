<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'emp_id',
        'name',
        'email',
        'password',
        'phone',
        'hire_date',
        'designation_id',
        'franchise_id',
        'status',
        'profile_image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'hire_date' => 'date',
        'status' => 'boolean',
    ];

    // Auto hash password
    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {

            if (empty($user->emp_id)) {

                $lastEmp = DB::table('users')
                    ->where('emp_id', 'like', 'EMP-%')
                    ->orderBy('id', 'desc')
                    ->value('emp_id');

                if ($lastEmp) {
                    $number = (int) str_replace('EMP-', '', $lastEmp);
                    $nextNumber = $number + 1;
                } else {
                    $nextNumber = 1;
                }

                $user->emp_id = 'EMP-' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
            }
        });
    }


    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }
    public function leaves()
    {
        return $this->hasMany(Leave::class, 'emp_id', 'emp_id');
    }
}
