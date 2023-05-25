<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
  use HasFactory;
  protected $fillable = ['customer_id',  'amount',  'status',  'billed_date',  'paid_date'];
  /**
   * Get the customer that owns the Invoice
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function customer(): BelongsTo
  {
    return $this->belongsTo(Customer::class);
  }
}
