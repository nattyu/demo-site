<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;

class FolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Folio::path(resource_path('views/blog'))->uri('/blog');
        
        // ホームページ
        Folio::path(resource_path('views/demo-site'))->uri('/demo-site');

        // サービスページ
        Folio::path(resource_path('views/demo-site/services'))->uri('/services');

        // お知らせページ
        Folio::path(resource_path('views/demo-site/news'))->uri('/news');

        // 会社概要ページ
        Folio::path(resource_path('views/demo-site/about'))->uri('/about');

        // 問い合わせページ
        Folio::path(resource_path('views/demo-site/contact'))->uri('/contact');

        // ランディングページ
        Folio::path(resource_path('views/demo-site'))->uri('/lp');

        // プライバシーポリシー
        Folio::path(resource_path('views/demo-site/privacy-policy'))->uri('/privacy-policy');

        // 利用規約
        Folio::path(resource_path('views/demo-site/terms'))->uri('/terms');
    }
}
