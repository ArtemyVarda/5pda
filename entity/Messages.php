<?php

namespace app\entity;

use yii\db\ActiveRecord;

class Messages extends ActiveRecord
{
    public function getUser()
    {
        return $this->hasOne(Users::class, ['id' => 'user_id']);
    }
}