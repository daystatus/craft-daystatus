<?php
/**
 * daystatus plugin for Craft CMS 3.x
 *
 * Craft version health check for daystatus.io
 *
 * @link      https://github.com/daystatus
 * @copyright Copyright (c) 2020 Aphichat Panjamanee
 */

namespace daystatus\daystatus\services;

use daystatus\daystatus\Daystatus;

use Craft;
use craft\base\Component;

/**
 * DaystatusService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Aphichat Panjamanee
 * @package   Daystatus
 * @since     1.0.0
 */
class DaystatusService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Daystatus::$plugin->daystatusService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (Daystatus::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
