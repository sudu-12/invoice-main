<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'Account_Name','Account_no', 'Bank', 'Branch', 'SwiftCode', 'CorrespondingBank', 
    ];
}
