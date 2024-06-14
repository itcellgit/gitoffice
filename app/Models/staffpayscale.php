<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffsalary extends Model
{
    use HasFactory;
    protected $fillable = [
        'staff_id',
        'payband',
        'agp',
        'rate',
        'basic',
        'da',
        'hra',
        'cca',
        'special_incen',
        'salary_arrears',
        'special_allowances',
        'allowance_value',
        'gross_salary',
        'pf',
        'pfarrear',
        'income_tax',
        'professional_tax',
        'LIC',
        'GSLI',
        'bank_loan',
        'credit_society',
        'credit_society_loan',
        'temple',
        'forward_charges',
        'salary_recovery',
        'IR',
        'HRA_recovery',
        'laptop_advance',
        'total_deductions',
        'net_salary',
    ];
}
