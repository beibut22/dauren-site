<?php

namespace app\models;

use yii\base\Model;

/**
 * SendMailForm is the model behind the send form in item page.
 */
class SendMailForm extends Model
{
    public $name;

    public $phone;

    public $email;

    public $message;

    public function rules()
    {
        return [
            [['name', 'phone', 'email', 'message'], 'required'],
            [['email'], 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Email',
            'message' => 'Сообщение',
        ];
    }

}