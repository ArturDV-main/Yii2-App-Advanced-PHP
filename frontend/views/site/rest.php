<?php

/** @var yii\web\View $this */
/** @var \frontend\models\RestREcord $model */

$this->title = 'Rest Response';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <p>Users:</p>
    <div class="row">
        <?php foreach ($model as $user): ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Username: <?= htmlspecialchars($user->username) ?></h5>
                        <p class="card-text">ID: <?= htmlspecialchars($user->id) ?></p>
                        <p class="card-text">Email: <?= htmlspecialchars($user->email) ?></p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal<?= $user->id ?>">Подробнее</button>
                    </div>
                </div>
            </div>

            <!-- Модальное окно -->
            <div class="modal fade" id="userModal<?= $user->id ?>" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userModalLabel">Информация о пользователе</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Username:</strong> <?= htmlspecialchars($user->username) ?></p>
                            <p><strong>ID:</strong> <?= htmlspecialchars($user->id) ?></p>
                            <p><strong>Email:</strong> <?= htmlspecialchars($user->email) ?></p>
                            <p><strong>Статус:</strong> <?= htmlspecialchars($user->status) ?></p>
                            <p><strong>Создан:</strong> <?= date('Y-m-d H:i:s', $user->created_at) ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
