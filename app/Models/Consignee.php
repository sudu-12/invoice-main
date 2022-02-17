<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignee extends Model
{
    use HasFactory;

    protected $fillable = [
        'InvNo','ConsigneeId', 'PlNo', 'InvTerm', 'GrossVlue', 'FrieghtValue','FreightRate','DiscountRate','Discount_Value','NetTotal',
    ];
}
