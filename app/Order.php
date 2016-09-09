<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use SoftDeletes;

    protected $table = 'orders';

	protected $fillable = ['subtotal', 'shipping', 'user_id'];
	protected $dates = ['deleted_at'];

	// Relation with User
	public function user()
	{
	    return $this->belongsTo('App\User');
	}

	public function order_items()
	{
	    return $this->hasMany('App\OrderItem');
	}
}
