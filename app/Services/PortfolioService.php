<?php

namespace App\Services;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;

class PortfolioService
{
    public function getHomeData(): array
    {
        $categoryOrder = ['Programming & Data', 'Tools', 'Other Skills'];
        $skills = Skill::all()->sortBy(function ($skill) use ($categoryOrder) {
            $idx = array_search($skill->category, $categoryOrder);
            return $idx !== false ? $idx : 99;
        });

        return [
            'projects' => Project::where('status', 'active')->latest()->get(),
            'skills' => $skills,
            'experiences' => Experience::where('type', 'work')->latest('start_date')->get(),
            'organizations' => Experience::where('type', 'organization')->latest('start_date')->get(),
            'services' => Service::all(),
            'skillCategories' => $categoryOrder,
        ];
    }

    public function getProjectCategories(): array
    {
        return Project::where('status', 'active')->get()->pluck('title')->toArray();
    }
}
