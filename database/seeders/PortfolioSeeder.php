<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Service;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Skill::firstOrCreate(['name' => 'Python'], ['category' => 'Programming & Data', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'SQL'], ['category' => 'Programming & Data', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'Data Analysis'], ['category' => 'Programming & Data', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'Machine Learning'], ['category' => 'Programming & Data', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'Data Visualization'], ['category' => 'Programming & Data', 'percentage' => null, 'icon' => null]);

        Skill::firstOrCreate(['name' => 'VS Code'], ['category' => 'Tools', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'PyCharm'], ['category' => 'Tools', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'Jupyter Notebook'], ['category' => 'Tools', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'Figma'], ['category' => 'Tools', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'Microsoft Excel'], ['category' => 'Tools', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'OBS Studio'], ['category' => 'Tools', 'percentage' => null, 'icon' => null]);

        Skill::firstOrCreate(['name' => 'UI/UX Design'], ['category' => 'Other Skills', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'System Analysis'], ['category' => 'Other Skills', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'Problem Solving'], ['category' => 'Other Skills', 'percentage' => null, 'icon' => null]);
        Skill::firstOrCreate(['name' => 'Video Editing'], ['category' => 'Other Skills', 'percentage' => null, 'icon' => null]);

        Experience::firstOrCreate(
            ['title' => 'Program Director Streaming', 'company' => 'Unileague'],
            ['description' => 'Managed football match live streaming using OBS Studio. Coordinated production teams and camera placement. Ensured high-quality and smooth live broadcasting. Monitored audio and visual technical operations.', 'start_date' => '2026-04-01', 'end_date' => null, 'type' => 'work']
        );
        Experience::firstOrCreate(
            ['title' => 'IT Intern', 'company' => 'PT Bukit Asam Pelabuhan Tarahan'],
            ['description' => 'Performed hardware and software troubleshooting. Assisted server maintenance and monitoring. Analyzed company helpdesk ticketing systems. Documented workflows and technical issues.', 'start_date' => '2024-06-01', 'end_date' => '2024-08-01', 'type' => 'work']
        );
        Experience::firstOrCreate(
            ['title' => 'Content Creator', 'company' => 'OneRed'],
            ['description' => 'Optimized content strategy using SEO techniques. Produced multimedia content and visual assets. Improved audience engagement through digital campaigns.', 'start_date' => '2022-11-01', 'end_date' => '2023-06-01', 'type' => 'work']
        );
        Experience::firstOrCreate(
            ['title' => 'Videographer & Video Editor', 'company' => 'BinaBola'],
            ['description' => 'Produced educational football videos. Edited digital learning content and storytelling visuals.', 'start_date' => '2024-08-01', 'end_date' => '2025-01-01', 'type' => 'work']
        );
        Experience::firstOrCreate(
            ['title' => 'Coordinator 2', 'company' => 'Gereja Mahasiswa Bandung'],
            ['description' => 'Coordinated multiple divisions and supervised projects. Managed event planning and collaboration.', 'start_date' => '2023-01-01', 'end_date' => '2024-01-01', 'type' => 'organization']
        );
        Experience::firstOrCreate(
            ['title' => 'Media & Communication Member', 'company' => 'Gereja Mahasiswa Bandung'],
            ['description' => 'Managed social media content. Designed visual communication materials.', 'start_date' => '2022-01-01', 'end_date' => '2023-01-01', 'type' => 'organization']
        );

        Project::firstOrCreate(
            ['slug' => 'emotion-detection-indobertweet-bilstm'],
            ['title' => 'Emotion Detection Using IndoBERTweet-BiLSTM', 'description' => 'Developed a multilabel NLP model for emotion and hate speech detection. Combined IndoBERTweet with BiLSTM architecture. Integrated the model into a web-based opinion analysis platform.', 'category' => 'Data Science', 'thumbnail' => null, 'github_url' => null, 'demo_url' => null, 'status' => 'active']
        );
        Project::firstOrCreate(
            ['slug' => 'smart-parking-car'],
            ['title' => 'Smart Parking Car', 'description' => 'Built an IoT-based smart parking monitoring system. Integrated sensors for real-time parking detection.', 'category' => 'IoT', 'thumbnail' => null, 'github_url' => null, 'demo_url' => null, 'status' => 'active']
        );
        Project::firstOrCreate(
            ['slug' => 'smart-cat-feeding'],
            ['title' => 'Smart Cat Feeding', 'description' => 'Developed an automated cat feeding system integrated with Google Assistant.', 'category' => 'IoT', 'thumbnail' => null, 'github_url' => null, 'demo_url' => null, 'status' => 'active']
        );
        Project::firstOrCreate(
            ['slug' => 'astra-quest-ar-game'],
            ['title' => 'Astra Quest AR Game', 'description' => 'Developed an Augmented Reality educational game using Unity. Converted learning cards into interactive 3D objects.', 'category' => 'Game Development', 'thumbnail' => null, 'github_url' => null, 'demo_url' => null, 'status' => 'active']
        );

        Service::firstOrCreate(['title' => 'Data Analysis & Visualization'], ['description' => 'Process and analyze data to generate actionable business insights. Build interactive data visualizations using Python, SQL, and various analytical tools.', 'icon' => 'code']);
        Service::firstOrCreate(['title' => 'Machine Learning Development'], ['description' => 'Develop machine learning and NLP models for classification, prediction, and sentiment analysis. Experienced with IndoBERTweet, BiLSTM, and TensorFlow.', 'icon' => 'code']);
        Service::firstOrCreate(['title' => 'IT Support & Troubleshooting'], ['description' => 'Diagnose and resolve hardware/software issues. Perform server maintenance, technical documentation, and IT system analysis for business needs.', 'icon' => 'camera']);
        Service::firstOrCreate(['title' => 'Multimedia & Video Production'], ['description' => 'Professional video content production, live streaming with OBS Studio, video editing, and digital visual material creation for various platforms.', 'icon' => 'video']);
    }
}