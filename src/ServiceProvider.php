<?php

namespace Aerocargo\AdminExampleVue;

use Aero\Common\Facades\Settings;
use Aero\Common\Providers\ModuleServiceProvider;
use Aero\Common\Settings\SettingGroup;

class ServiceProvider extends ModuleServiceProvider
{
    public function assetLinks()
    {
        return [
            'aerocargo/admin-example-vue' => __DIR__.'/../public',
        ];
    }
}
