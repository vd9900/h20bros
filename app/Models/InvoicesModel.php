<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class InvoicesModel extends Model
{
    use HasFactory;
    protected $table = 'invoices';

    public function items(){
        return $this->hasMany(InvoiceItemsModel::class, 'invoice_id');
    }
}
