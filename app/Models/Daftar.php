<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Daftar extends Model
{
    use HasFactory;

    protected $table = 'daftars';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'user_id', 'nama', 'email', 'nohp', 'semester', 'ipk', 'status', 'dok', 'tgl'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}