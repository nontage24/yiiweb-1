<?php

namespace frontend\controllers;
use frontend\models\Screen;

class ScreenController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    
    public function actionIndex($id)
    {
        if(\Yii::$app->request->isPost){
            $adl = \Yii::$app->request->post('adl');
            $q2 = \Yii::$app->request->post('q2');
            
            $model = new Screen();
            $model->patient_id = $id;
            $model->date_screen = date('Y-m-d');
            $model->adl = $adl;
            $model->q2=$q2;
            
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'บันทึกสำเร็จ');
                return $this->redirect(['patient/index']);
            }
                    
        }
       
        return $this->render('index',[
            'id'=>$id
        ]);
    }

}
