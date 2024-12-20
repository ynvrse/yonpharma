<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Product_transaction_id',
        'product_id',
        'price',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_transaction_id' => 'integer',
        'product_id' => 'integer',
    ];

    public function productTransaction(): BelongsTo
    {
        return $this->belongsTo(ProductTransaction::class, 'product_transaction_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }



}
