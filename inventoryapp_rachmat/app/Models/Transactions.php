<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = "transactions";

    protected $fillable = ['product_id', 'user_id', 'type', 'amount', 'notes'];
}
