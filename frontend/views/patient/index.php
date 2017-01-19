<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use frontend\models\CChangwat;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายชื่อผู้ถูกขึ้นทะเบียน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> เพิ่ม', ['create'], ['class' => 'btn btn-success']) ?>

    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'floatHeader' => TRUE,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'panel' => [
            'before' => 'รายการชื่อผู้ป่วย'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            [
                'attribute' => 'cid',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a($model->cid, ['patient/view', 'id' => $model->id]);
                }
                    ],
                    'prename',
                    'name',
                    'lname',
                    [
                        'attribute' => 'sex',
                        'filter' => ['ชาย' => 'ชาย', 'หญิง' => 'หญิง'],
                        'group' => true,
                    ],
                    [
                        'attribute' => 'birth',
                        'filterType' => GridView::FILTER_DATE,
                        'filterWidgetOptions' => [
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'todayHighlight' => true
                            ]
                        ],
                    ],
                    'age_y:integer:อายุ(ปี)',
                    [
                        'attribute' => 'province',
                        'value' => 'cchangwat.changwatname',
                        'filter' => ArrayHelper::map(CChangwat::find()->all(), 'changwatcode', 'changwatname'),
                        'filterType' => GridView::FILTER_SELECT2,
                        'filterWidgetOptions' => [
                            'pluginOptions' => ['allowClear' => true],
                        ],
                        'filterInputOptions' => ['placeholder' => ''],
                        'headerOptions' => ['style' => 'width:20%'],
                        'group' => true,
                    ],
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
                    [
                        'attribute' => 'adl',
                        'contentOptions' => function($model) {
                            $adl = $model->adl;

                            if ($adl < 5) {
                                 return ['style' => "background-color:red"];
                            } elseif ($adl < 12) {
                                return ['style' => "background-color:yellow"];  
                            } elseif ($adl > 12) {
                                return ['style' => "background-color:green"];
                            }else{
                                
                            }
                        }
                    ],
                    // 'tai',
                    // 'class_id',
                    // 'class_name',
                    // 'color',
                    // 'cousin:ntext',
                    // 'tel',
                    // 'dupdate',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
</div>

