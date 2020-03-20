<?php
/**
 * daystatus plugin for Craft CMS 3.x
 *
 * Craft version health check for daystatus.io
 *
 * @link      https://github.com/daystatus
 * @copyright Copyright (c) 2020 Aphichat Panjamanee
 */

namespace daystatus\daystatus\variables;

use daystatus\daystatus\Daystatus;

use Craft;

/**
 * daystatus Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.daystatus }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Aphichat Panjamanee
 * @package   Daystatus
 * @since     1.0.0
 */
class DaystatusVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.daystatus.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.daystatus.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
