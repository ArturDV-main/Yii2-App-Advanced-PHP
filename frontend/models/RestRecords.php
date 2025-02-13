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

        echo 'Результаты поиска:<br>';
        echo $response->content;
    }
}
