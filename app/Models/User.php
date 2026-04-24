<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

   protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Added this line!
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function cooperative(): HasOne
    {
        return $this->hasOne(Cooperative::class);
    }

    // Role Checkers
    public function isAdmin(): bool { return $this->role->slug === 'admin'; }
    public function isSeller(): bool { return $this->role->slug === 'seller'; }
    public function isCustomer(): bool { return $this->role->slug === 'customer'; }
}