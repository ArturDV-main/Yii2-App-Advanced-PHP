<?php

namespace frontend\models;

use Codeception\Step\Condition;
use Yii;
use yii\base\Model;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;

class RestRecords extends Model
{
    static public function findOne($condition)
    {
        return static::findByCondition($condition);
    }

    static public function findByCondition($condition)
    {
        if (!ArrayHelper::isAssociative($condition)) {
            throw new InvalidConfigException('"' . get_called_class() . '" must have a primary key.');
        }
        $client = new Client(['baseUrl' => 'http://backend/index.php/api-user']);
        $response = $client->createRequest()
            ->addHeaders(['content-type' => 'application/json'])
            ->send();
        $users = json_decode($response->content, true);
        foreach ($users as $user) {
            // Проверяем, совпадают ли условия
            $matches = true;
            foreach ($condition as $key => $value) {
                if (!isset($user[$key]) || $user[$key] !== $value) {
                    $matches = false;
                    break;
                }
            }
    
            if ($matches) {
                return $user; // Возвращаем первого найденного пользователя
            }
        }
        return null; // Если пользователь не найден, возвращаем broken
    }
}
