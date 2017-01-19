<?php

$this->title = "ประเมินผู้สูงอายุ";
use frontend\models\Patient;
use kartik\tabs\TabsX;

$ptModel = Patient::findOne($id);
?>
<h4>
ชื่อ: <?=$ptModel->name?> นามสกุล:<?=$ptModel->lname?>
</h4>

<?php
echo TabsX::widget([
    'items'=>[
        [
            'label'=>'แบบประเมิน ADL',
            'content'=>$this->render('adl',['id'=>$id])
        ],
        [
            'label'=>'แบบประเมิน 2Q',
            'content'=>$this->render('q2',['id'=>$id])
        ]
    ]
]);
