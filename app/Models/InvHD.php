<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvHD extends Model
{
    use HasFactory;

    protected $fillable = [
        'InvNo','ConsigneeId', 'PlNo', 'InvTerm', 'GrossVlue', 'Total_Gross_Wgt','FreightRate','FrieghtValue', 'DiscountRate','Discount_Value','NetTotal',
    ];
}
