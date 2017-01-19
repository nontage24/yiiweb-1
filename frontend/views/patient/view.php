<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-view">

 

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'ยืนยันการลบ',
                'method' => 'post',
            ],
        ]) ?>
        
        <?= Html::a('ประเมิน', ['screen/index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
    
    <table border="1">
        <tr>
            <td>ชื่อ</td><td><?=$model->name?></td>
        </tr>
    </table>

    <?= DetailView::widget([
        'model' => $model,
        'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '-'],
        'attributes' => [
            'id',
            'cid',
            'prename',
            'name',
            'lname',
            'sex',
            'birth',
            'age_y',
            'province',
            'district',
            'subdistrict',
            'village_no',
            'village_name',
            'house_no',
            'lat',
            'lon',
            'typearea',
            'nation',
            'race',
            'religion',
            'mstatus',
            'hospcode',
            'pid',
            'refer_from',
            'disease',
            'discharge',
            'cm_id',
            'cg_id',
            'adl',
            'tai',
            'class_id',
            'class_name',
            'color',
            'cousin:ntext',
            'tel',
            'dupdate',
        ],
    ]) ?>

</div>
