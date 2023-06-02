<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItemsModel extends Model
{
    use HasFactory;
    protected $table = 'invoice_items';


    public function invoice()
    {
        return $this->belongsTo(InvoicesModel::class,'invoice_id');
    }
}
