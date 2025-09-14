<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'email',
        'phone',
    ];

    /**
     * Get the company that owns the employee.
     * Relasi: Satu karyawan dimiliki oleh satu perusahaan.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}