<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditPlanType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'default_flow_key', 'state'];

    public function plans()
    {
        return $this->hasMany(AuditPlan::class);
    }
}
