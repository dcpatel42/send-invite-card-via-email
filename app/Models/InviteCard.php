<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InviteCard extends Model
{
    use HasFactory;
    protected $table = "invited_cards";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
