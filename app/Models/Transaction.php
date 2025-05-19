<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $fillable = [
        'stock_id',
        'quantity',
        'price',
    ];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
