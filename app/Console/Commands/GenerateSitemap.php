<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

use App\Models\BlogsModel;
use App\Models\ServiceLocationsModel;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating a sitemap';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $urls = collect(\Illuminate\Support\Facades\Route::getRoutes())
        ->filter(function ($route) {
            // Filter out any routes that are not public-facing
            return !Str::startsWith($route->uri, ['admin', 'api', 'dashboard', 'check_featured','uncheck_featrued', 'login', 'register', 'home', 'password', 'blog', 'logout', 'pricing', 'get-quotes', 'sanctum', '_ignition', 'payment', 'service-areas-locations', "callback-number", "callback-item"]);
        })
        ->map(function ($route) {
            // Convert the route to a URL object
            return url($route->uri);
        });

        $urls = $urls->toArray();

        $blogs = BlogsModel::select('slug')->get()->toArray();
        // dd($blogs);



        $service_areas = ServiceLocationsModel::get()->toArray();

        foreach($blogs as $blog) {
            array_push($urls, config('app.url').'/blog/'.$blog['slug']);
        }


        foreach($service_areas as $area) {
            array_push($urls, config('app.url').'/service-areas-locations/'.$area['slug']);
        }
        // dd($urls);

        // SitemapGenerator::create(config('app.url'))
        // ->add($urls)
        // ->writeToFile(public_path('sitemap.xml'));

        $sitemap = Sitemap::create("https://127.0.0.1:8001/");


        foreach ($urls as $url) {
            $sitemap->add($url);
        }

        $sitemap->add(url("/blog"));

        // creates sitemap with all urls in your website        
       $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
