<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Transaction extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = 'transactions';

    protected $fillable = [
        'id_vehicles',
        'id_users',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable();
    }
}
