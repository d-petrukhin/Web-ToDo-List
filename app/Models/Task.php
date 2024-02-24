<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'completed',
        'folder_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function folder()
    {
        return $this->belongsTo(Folder::class, 'folder_id', 'id');
    }
    public function isOwnedByUser()
    {
        return $this->user_id === Auth::id();
    }
}
