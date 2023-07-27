<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Vehicle extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = 'vehicles';

    protected $fillable = [
        'merek',
        'nopol',
        'bahan_bakar',
        'nama_driver',
        'jenis',
        'status',
    ];

    public function vehicle()
    {
        return $this->hasOne(Transaction::class, 'id_vehicles', 'id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable();
    }
}
