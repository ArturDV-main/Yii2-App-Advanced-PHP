<?php

namespace backend\controllers;

use yii\rest\ActiveController;

/**
 * Api controller
 */

class UserController extends ActiveController
{
    public $modelClass = 'backend\models\User';
}
