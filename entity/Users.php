<?php

namespace app\entity;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;


/**
 *Users
 * @property integer id Id
 * @property string login login
 * @property string password password
 * @property string photo ava
 */
class Users extends ActiveRecord implements IdentityInterface
{

    public static function findIdentity($id)
    {
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
    }

    public function getId()
    {

    }

    public function getAuthKey()
    {
    }

    public function validateAuthKey($authKey)
    {
    }
}