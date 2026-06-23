<?php

namespace App\Models;

use Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'thumbnail',
        'video_url',
        'github_url',
        'demo_url',
        'status',
    ];

    public function getThumbnailUrlAttribute(): ?string
    {
        if (!$this->thumbnail) {
            return null;
        }

        $cloudName = config('filesystems.disks.cloudinary.cloud');
        if ($cloudName) {
            $publicId = pathinfo($this->thumbnail, PATHINFO_FILENAME);
            return "https://res.cloudinary.com/{$cloudName}/image/upload/{$publicId}";
        }

        return asset('storage/' . $this->thumbnail);
    }

    public function getYoutubeEmbedAttribute(): ?string
    {
        if (preg_match('/(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]+)/', $this->video_url ?? '', $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }
        return null;
    }

    protected function casts(): array
    {
        return [
            'status' => 'string',
        ];
    }
}
