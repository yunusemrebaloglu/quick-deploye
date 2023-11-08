<?php

namespace YunusEmreBaloglu\QuickDeploye;

use Illuminate\Support\ServiceProvider;
use YunusEmreBaloglu\QuickDeploye\Commands\GetInfoGeneratedData;

class QuickDeployeServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    // Register the package's console commands.
    $this->commands([
      GetInfoGeneratedData::class,
    ]);

    // Publish configuration file.
    $this->publishes([
      __DIR__ . '/../config/quick-deploye.php' => config_path('quick-deploye.php'),
    ], 'quick-deploye-config');

    // Load package routes.
    $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    // Register package services if needed.
  }
}
