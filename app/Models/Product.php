<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Product extends Model
{
    use HasFactory;
    use AsSource, Filterable, Attachable;

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)
            ->withPivot('price', 'quantity');
    }

    // public function price(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => str_replace('.', ',', $value / 100) . '€'
    //     );
    // }

    public function getFormattedPriceAttribute(): string
    {
        return str_replace('.', ',', $this->price ) . ' XOF';
    }
}
