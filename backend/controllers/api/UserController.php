<?php

namespace backend\controllers\api;

use yii\rest\ActiveController;

/**
 * Api controller
 */

class UserController extends ActiveController
{
    public $modelClass = 'backend\models\User';
}
