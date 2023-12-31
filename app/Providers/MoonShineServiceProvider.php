<?php

namespace App\Providers;

use App\MoonShine\Resources\ArticleResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),

        MenuGroup::make('Статьи', [
            MenuItem::make('Статьи', new ArticleResource(), 'heroicons.academic-cap')
        ])->icon('heroicons.academic-cap')
        ]);
//        app(MoonShine::class)->menu([
//            MenuItem::make('Admins', new MoonShineUserResource()),
//        ]);
    }
}
