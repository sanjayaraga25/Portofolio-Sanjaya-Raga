<?php

namespace App\Services;

use App\Models\ContactMessage;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;

class DashboardService
{
    public function getStats(): array
    {
        return [
            'totalProjects' => Project::count(),
            'totalSkills' => Skill::count(),
            'totalExperiences' => Experience::count(),
            'totalServices' => Service::count(),
            'totalMessages' => ContactMessage::count(),
            'recentMessages' => ContactMessage::latest()->take(5)->get(),
            'recentProjects' => Project::latest()->take(5)->get(),
        ];
    }
}
