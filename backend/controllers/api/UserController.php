<?php

namespace backend\controllers\api;

use yii\web\NotFoundHttpException;
use yii\rest\ActiveController;
use backend\models\User;

/**
 * Api controller
 */

class UserController extends ActiveController
{
    public $modelClass = 'backend\models\User';
    public function actionUsername($username)
    {
        $user = User::findByUsername($username);
        if ($user === null) {
            throw new NotFoundHttpException("Пользователь не найден.");
        }
        return $user;
    }
}
