<?php

namespace frontend\controllers;

class ScreenController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
       
        return $this->render('index',[
            'id'=>$id
        ]);
    }

}
