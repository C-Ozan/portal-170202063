<?php
namespace kouosl\projemodulu\controllers\api;


/**
 * Default controller for the `projemodulu` module
 */
class DefaultController extends \kouosl\base\controllers\api\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return true;
    }
}
