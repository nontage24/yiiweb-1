<?php

namespace frontend\controllers;

class ScreenController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex($id)
    {
       
        return $this->render('index',[
            'id'=>$id
        ]);
    }

}
