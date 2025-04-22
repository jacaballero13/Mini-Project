<?php

namespace  App\Models;
use Illuminate\Database\Admin\Factories\HasFactory;
use Illuminate\Database\Admin\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'birthday',
        'monthly_salary',
    ];
}