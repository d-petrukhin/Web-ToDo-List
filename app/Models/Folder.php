<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'color'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'folder_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function isOwnedByUser()
    {
        return $this->user_id === Auth::id();
    }
}
