<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
	use SoftDeletes;

    protected $table = 'order_items';

	protected $fillable = ['price', 'quantity', 'product_id', 'order_id'];

	protected $dates = ['deleted_at'];

	public $timestamps = false;

	public function order()
	{
	    return $this->belongsTo('App\Order');
	}

	public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
