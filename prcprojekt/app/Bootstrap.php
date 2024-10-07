<?php

declare(strict_types=1);

namespace App;

use Nette\Bootstrap\Configurator;


/**
 * Bootstrap class initializes application environment and DI container.
 */
class Bootstrap
{
	public static function boot(): Configurator
	{
		// The configurator is responsible for setting up the application environment and services.
		// Learn more at https://doc.nette.org/en/bootstrap
		$configurator = new Configurator;
		$appDir = dirname(__DIR__);

		// Nette is smart, and the development mode turns on automatically,
		// or you can enable for a specific IP address it by uncommenting the following line:
		// $configurator->setDebugMode('secret@23.75.345.200');

		// Enables Tracy: the ultimate "swiss army knife" debugging tool.
		// Learn more about Tracy at https://tracy.nette.org
		$configurator->enableTracy($appDir . '/log');

		$configurator->setDebugMode(true);
		$configurator->setTempDirectory($appDir . '/temp');

		// Add configuration files
		$configurator->addConfig($appDir . '/config/common.neon');
		$configurator->addConfig($appDir . '/config/services.neon');
		$configurator->addConfig($appDir . '/config/local.neon');

		return $configurator;
	}
}