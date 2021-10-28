<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'card_id',
        'card_number',
        'user_id',
        'card_type',
        'card_reference',
        'card_credit',
        'card_balance',
    ];
}
