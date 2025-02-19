<?php

/** @var yii\web\View $this */
/** @var \frontend\models\RestREcord $model */

$this->title = 'Rest Response';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <p>Users:</p>
    <div class="row">
        <?php if ($model !== null) {
            echo $model['username'];
        } else {
            echo '<i class="bi bi-person-circle"></i> Пользователь не найден';
        } ?>
    </div>
</div>