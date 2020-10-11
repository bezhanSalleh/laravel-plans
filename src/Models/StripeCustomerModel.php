<?php

namespace BezhanSalleh\LaravelPlans\Models;

use Illuminate\Database\Eloquent\Model;

class StripeCustomerModel extends Model
{
    protected $table = 'stripe_customers';
    protected $guarded = [];
    protected $dates = [
        //
    ];

    public function model()
    {
        return $this->morphTo();
    }
}
