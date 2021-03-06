<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMembership extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_code', 'code');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_username', 'username');
    }
}
