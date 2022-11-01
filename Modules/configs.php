<?php
return [
  'modules' => [
      \Modules\Core\Providers\RouteServiceProvider::class,
      \Modules\Core\Providers\CoreServiceProvider::class,
      \Modules\Settings\Providers\SettingsServiceProvider::class,
      \Modules\Addresses\Providers\AddressesServiceProvider::class,
      \Modules\Dashboard\Providers\DashboardServiceProvider::class
  ]
];