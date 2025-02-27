<?php

namespace backend\controllers\api;

use yii\rest\ActiveController;

/**
 * Api controller
 */

class UsersController extends ActiveController
{
    public $modelClass = 'backend\models\User';
}
