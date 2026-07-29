<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

#[Fillable([
    'booking_code',
    'customer_name',
    'customer_phone',
    'customer_email',
    'spa_service_id',
    'booking_date',
    'booking_time',
    'number_of_people',
    'total_price',
    'status',
    'notes',
])]
class Booking extends Model
{
    use HasFactory;

    protected $casts = [
        'booking_date' => 'date',
        'number_of_people' => 'integer',
        'total_price' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($booking) {
            if (empty($booking->booking_code)) {
                $booking->booking_code = 'MNR-' . strtoupper(Str::random(6));
            }
        });
    }

    public function spaService(): BelongsTo
    {
        return $this->belongsTo(SpaService::class, 'spa_service_id');
    }
}
