<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProgramUnggulan extends Model
{
    use HasFactory;

    protected $table = 'program_unggulan';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($program) {
            if (empty($program->slug)) {
                $program->slug = Str::slug($program->title);
            }
        });
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset($this->image) : null;
    }
} 