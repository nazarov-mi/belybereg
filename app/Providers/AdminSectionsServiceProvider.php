<?php

namespace App\Providers;

use SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

	/**
	 * @var array
	 */
	protected $sections = [
		\App\User::class => 'App\Admin\Models\User',
		\App\Article::class => 'App\Admin\Models\Article',
		\App\News::class => 'App\Admin\Models\News',
		\App\Photo::class => 'App\Admin\Models\Photo',
		\App\Review::class => 'App\Admin\Models\Review',
		\App\Order::class => 'App\Admin\Models\Order',
		\App\House::class => 'App\Admin\Models\House',
	];

	protected $widgets = [
		\App\Admin\Widgets\NavigationUserBlock::class,
		\App\Admin\Widgets\DashboardMap::class,
	];

	/**
	 * Register sections.
	 *
	 * @return void
	 */
	public function boot(\SleepingOwl\Admin\Admin $admin)
	{
		parent::boot($admin);
		
		$this->app->call([$this, 'registerViews']);
	}

	public function registerViews(WidgetsRegistryInterface $widgetsRegistry)
	{
		foreach ($this->widgets as $widget) {
			$widgetsRegistry->registerWidget($widget);
		}
	}
}