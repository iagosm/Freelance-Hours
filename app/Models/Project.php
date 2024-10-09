<?php

namespace App\Models;

use App\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    public function casts() {
        return [
            'tech_stack' => 'array',
            'status' => ProjectStatus::class,
            'ends_at' => 'datetime'
        ];
    }
}
