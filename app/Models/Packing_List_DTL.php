<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packing_List_DTL extends Model
{
    use HasFactory;

    protected $fillable = [
        'PlNo', 'Item_Id', 'Item_Description', 'NoofBoxes', 'GrossTotal','NetTotal',
    ];
}
