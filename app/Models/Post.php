<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];

    public function archive()
    {
        $this->is_archived = true;
        $this->save();
    }

    public function unarchive()
    {
        $this->is_archived = false;
        $this->save();
    }
}
