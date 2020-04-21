<?php
/**
 * daystatus plugin for Craft CMS 3.x
 *
 * Craft version health check for daystatus.io
 *
 * @link      https://github.com/daystatus
 * @copyright Copyright (c) 2020 Aphichat Panjamanee
 */

namespace daystatus\daystatus\controllers;

use daystatus\daystatus\Daystatus;

use Craft;
use craft\web\Controller;

/**
 * Default Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Aphichat Panjamanee
 * @package   Daystatus
 * @since     1.0.0
 */
class DefaultController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['connect'];

    // show the CMS version even if the system is offline?
    protected $showWhenSystemIsOffline = true;

    // Public Methods
    // =========================================================================

    function __construct()
    {
        if(Craft::$app->config->general->isSystemLive == false && 
            $this->showWhenSystemIsOffline == true)
        {
            echo $this->actionConnect();
            exit;
        }
    }

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/daystatus/default
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the DefaultController actionIndex() method';

        return $result;
    }

    public function actionConnect()
    {
        header('Cache-Control: no-cache, must-revalidate, max-age=0');

        $token = \daystatus\daystatus\Daystatus::getInstance()->getSettings()->someAttribute;

        if (Craft::$app->getRequest()->getQueryParam('t') !== $token)
        {
            exit;
        }

        return Craft::$app->version;
    }

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/daystatus/default/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the DefaultController actionDoSomething() method';

        return $result;
    }
}
