<?php

namespace backend\controllers;

use yii\rest\ActiveController;

/**
 * Api controller
 */

class ApiUserController extends ActiveController
{
    public $modelClass = 'backend\models\User';
}
