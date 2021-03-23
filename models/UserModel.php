<?php
namespace models;

use core\BaseModel;

class UserModel extends BaseModel
{
    public $id;
    public $email;
    public $nick;
    public $password;
    public $url_avatar;
    public $role;

    static $table = 'users';

    const ROLE = ['administrator' => 'Адміністратор', 'follower' => 'Підписник', 'autor' => 'Автор'];

    public function rules() 
    {
        return [
            'required' => ['email','nick','password'],
            'email'=> ['email'],
            'string' => ['nick','password','role']
        ];
    }

    public function userValidate($model)
    {
        //  Стандартні валідації
        //  $this->validate();
        //  Додаткорві методи валідації


    }
}