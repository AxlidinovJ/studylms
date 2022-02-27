<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ComentForm extends Model
{
    public $reting;
    public $body;
    public $name;
    public $email;


   
    public function rules()
    {
        return [
            [['name', 'email', 'body','reting'], 'required'],
            ['email', 'email'],
            [['name','body'],'string'],
        ];
    }

   
    public function attributeLabels()
    {
        return [
            'reting'=>'Qanday baholaysiz',
            'name'=>'Ismingiz',
            'email'=>"Email manzilingiz",
            'body'=>'Bu haqda fiktringiz',
        ];
    }

 
}
