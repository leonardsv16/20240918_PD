<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Http\Controllers\PlaylistController;
class Playlist extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'tag',
    ];
    // nomainj belongToMany uz hasMany
    public function songs(): BelongsToMany {
        return $this->belongsToMany(Song::class);
    }
}
