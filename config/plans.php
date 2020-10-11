<?php

return [

    /*
     * The model which handles the plans tables.
     */

    'models' => [

        'plan' => \BezhanSalleh\LaravelPlans\Models\PlanModel::class,
        'subscription' => \BezhanSalleh\LaravelPlans\Models\PlanSubscriptionModel::class,
        'feature' => \BezhanSalleh\LaravelPlans\Models\PlanFeatureModel::class,
        'usage' => \BezhanSalleh\LaravelPlans\Models\PlanSubscriptionUsageModel::class,

        'stripeCustomer' => \BezhanSalleh\LaravelPlans\Models\StripeCustomerModel::class,

    ],

];
