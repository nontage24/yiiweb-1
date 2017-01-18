<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายชื่อผู้ถูกขึ้นทะเบียน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> เพิ่ม', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'panel'=>[
            'before'=>'รายการชื่อผู้ป่วย'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'cid',
            'prename',
            'name',
            'lname',
             'sex:text:เพศ',
            // 'birth',
             'age_y:integer:อายุ(ปี)',
            // 'province',
            // 'district',
            // 'subdistrict',
            // 'village_no',
            // 'village_name',
            // 'house_no',
            // 'lat',
            // 'lon',
            // 'typearea',
            // 'nation',
            // 'race',
            // 'religion',
            // 'mstatus',
            // 'hospcode',
            // 'pid',
            // 'refer_from',
            // 'disease',
            // 'discharge',
            // 'cm_id',
            // 'cg_id',
            // 'adl',
            // 'tai',
            // 'class_id',
            // 'class_name',
            // 'color',
            // 'cousin:ntext',
            // 'tel',
            // 'dupdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
