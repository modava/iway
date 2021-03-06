<?php

namespace modava\iway\models\table;

use modava\iway\components\MyIwayModel;
use Yii;

class OrderDetailTable extends MyIwayModel
{
    public static function tableName()
    {
        return 'iway_order_detail';
    }


    public function afterDelete()
    {
        $cache = Yii::$app->cache;
        $keys = [];
        foreach ($keys as $key) {
            $cache->delete($key);
        }
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public function afterSave($insert, $changedAttributes)
    {
        $cache = Yii::$app->cache;
        $keys = [];
        foreach ($keys as $key) {
            $cache->delete($key);
        }
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
    }
}
