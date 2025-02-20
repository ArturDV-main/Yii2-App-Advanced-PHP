<?php

/** @var yii\web\View $this */
/** @var \frontend\models\RestREcord $model */
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */


use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Rest Response';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <p>Users:</p>
    <div class="row">
        <?php if ($model !== null) {
            echo $model['username'];
        } else {
            echo '<i class="bi bi-person-circle"></i> Пользователь не найден';
        } ?>
    </div>
</div>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="my-1 mx-0" style="color:#999;">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
