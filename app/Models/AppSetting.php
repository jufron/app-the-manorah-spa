<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

#[Fillable([
    'key',
    'label',
    'value',
    'type',
    'group',
])]
class AppSetting extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($setting) {
            if (empty($setting->key) && ! empty($setting->label)) {
                $setting->key = Str::slug($setting->label, '_');
            }
        });
    }
}
