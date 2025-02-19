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
                        <h5 class="card-title">
                            <i class="bi bi-person-circle"></i> Username: <?= htmlspecialchars($user->username) ?>
                        </h5>
                        <p class="card-text">
                            <i class="bi bi-id-card"></i> ID: <?= htmlspecialchars($user->id) ?>
                        </p>
                        <p class="card-text">
                            <i class="bi bi-envelope"></i> Email: <?= htmlspecialchars($user->email) ?>
                        </p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal<?= $user->id ?>">
                            <i class="bi bi-info-circle"></i> Подробнее
                        </button>
                    </div>
                </div>
            </div>
            <!-- Модальное окно -->
            <div class="modal fade" id="userModal<?= $user->id ?>" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userModalLabel"><i class="bi bi-person"></i> Информация о пользователе</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong><i class="bi bi-person-circle"></i> Username:</strong> <?= htmlspecialchars($user->username) ?></p>
                            <p><strong><i class="bi bi-id-card"></i> ID:</strong> <?= htmlspecialchars($user->id) ?></p>
                            <p><strong><i class="bi bi-envelope"></i> Email:</strong> <?= htmlspecialchars($user->email) ?></p>
                            <p><strong><i class="bi bi-check-circle"></i> Статус:</strong> <?= htmlspecialchars($user->status) ?></p>
                            <p><strong><i class="bi bi-calendar"></i> Создан:</strong> <?= date('Y-m-d H:i:s', $user->created_at) ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>