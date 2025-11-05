<?php

 namespace App\Models\Cms;

use App\Models\Cms\SuperModel;

class PlanFeatureModel extends SuperModel
{
    protected $table = 'plan_features';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'price_id',
        'feature_text',
        'is_active',
        'is_blocked'
    ];
}
