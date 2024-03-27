<?php

namespace app\entity;

use app\repository\UsersRepository;
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
        return new static(UsersRepository::getUserbyId($id));
    }

    public function getId()
    {
        return $this->id;

    }

    public function findUserByLogin($login)
    {
        return new static(UsersRepository::getUserByLogin($login));
    }

    public function validatePassword($password)
    {
        return password_verify($password, $this->password);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
    }


    public function getAuthKey()
    {
    }

    public function validateAuthKey($authKey)
    {
    }
}