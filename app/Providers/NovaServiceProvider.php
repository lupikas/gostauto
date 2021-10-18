<?php

namespace App\Providers;

use App\Nova\Metrics\RegistrationsPerDay;
use Illuminate\Support\Facades\Gate;
use Kraftbit\NovaTinymce5Editor\NovaTinymce5Editor;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use OptimistDigital\NovaSettings\NovaSettings;
use Remipou\NovaPageManager\PageResource;
use Digitalcloud\MultilingualNova\NovaLanguageTool;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        NovaSettings::addSettingsFields([
            Text::make('Main phone number', 'main_phone_number'),
            Text::make('Google API key', 'google_api_key'),
            /*NovaTinymce5Editor::make('Privatumo politika', 'privacy_policy')
                ->options(['toolbar' => ['undo redo copy | formatselect | bold italic underline | bullist numlist | align | link']])
                ->translatable(),*/
            Boolean::make('Show feedbacks', 'show_feedback'),
            Boolean::make('Show recommended doctors', 'show_recommended_doctors'),
        ]);
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function () {
            return true;
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new RegistrationsPerDay(),
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new \ClassicO\NovaMediaLibrary\NovaMediaLibrary(),
            new NovaSettings(),
            //new \OptimistDigital\NovaPageManager\NovaPageManager,
            //new \Sbine\RouteViewer\RouteViewer,
            //new NovaLanguageTool(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    protected function resources() {
        Nova::resourcesIn(app_path('Nova'));
    
        Nova::resources([
        PageResource::class,
        ]);
    }
}
