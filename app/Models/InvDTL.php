<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvDTL extends Model
{
    use HasFactory;

    protected $fillable = [
        'No','InvNo', 'Item_Id', 'Item_Description', 'NoofBoxes', 'GrossWgt','UnitPrice','UnitValue',
    ];
}
