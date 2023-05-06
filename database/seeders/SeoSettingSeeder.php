<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeoSetting::truncate();

        SeoSetting::create([
            'home_page_seo_title' => 'An digital service company enables IT for the future',
            'home_page_seo_description' => 'home description',
            'home_page_seo_keywords' => 'home keywords',
            
            'work_page_seo_title' => 'Work Page',
            'work_page_seo_description' => 'work description',
            'work_page_seo_keywords' => 'work keywords',
            
            'agency_page_seo_title' => 'Agency Page',
            'agency_page_seo_description' => 'Agency description',
            'agency_page_seo_keywords' => 'Agency keywords',
            
            'blog_page_seo_title' => 'Blog Page',
            'blog_page_seo_description' => 'Blog description',
            'blog_page_seo_keywords' => 'Blog keywords',

            'service_page_seo_title' => 'Service Page',
            'service_page_seo_description' => 'service description',
            'service_page_seo_keywords' => 'service keywords',

            'gallery_page_seo_title' => 'Gallery Page',
            'gallery_page_seo_description' => 'gallery description',
            'gallery_page_seo_keywords' => 'gallery keywords',

            'career_page_seo_title' => 'Career Page',
            'career_page_seo_description' => 'career description',
            'career_page_seo_keywords' => 'career keywords',

            'contact_page_seo_title' => 'Contact Page',
            'contact_page_seo_description' => 'contact description',
            'contact_page_seo_keywords' => 'contact keywords',

            'team_page_seo_title' => 'Team Page',
            'team_page_seo_description' => 'team description',
            'team_page_seo_keywords' => 'team keywords',

            'training_page_seo_title' => 'Training Page',
            'training_page_seo_description' => 'training description',
            'training_page_seo_keywords' => 'training keywords',
        ]);
    }
}
