<?php

namespace backend\controllers\api;

use yii\filters\auth\HttpBearerAuth;
use yii\web\NotFoundHttpException;
use yii\rest\ActiveController;
use backend\models\User;

/**
 * Api controller
 */

class UserController extends ActiveController
{
    public $modelClass = 'backend\models\User';

public function behaviors()
{
    $behaviors = parent::behaviors();
    $behaviors['authenticator'] = [
        'class' => HttpBearerAuth::class,
    ];
    return $behaviors;
}

    public function actionUsername($username)
    {
        $user = User::findByUsername($username);
        if ($user === null) {
            throw new NotFoundHttpException("User:" .$username . " not found.");
        }
        return $user;
    }
}
