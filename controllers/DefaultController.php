<?php

namespace d2emon\scene\controllers;

use yii\web\Controller;

/**
 * Default controller for the `scene` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
