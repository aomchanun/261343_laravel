<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PersonalityType extends Model
{
    use HasFactory;
    protected $table = 'personality_types';
    protected $fillable = ['type', 'description'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'personality_type_id');
    }
}
