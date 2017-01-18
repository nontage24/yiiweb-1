<?php

namespace frontend\controllers;
use frontend\models\CAmpur;
use yii\helpers\ArrayHelper;

class AjaxController extends \yii\web\Controller
{
    public function actionGetamp($q)
    {
        $array = CAmpur::find()->where(['changwatcode'=>$q])->all();
        $items = ArrayHelper::map($array, 'ampurcodefull', 'ampurname');
        return json_encode($items);
    }

}
