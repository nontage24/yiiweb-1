<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\CPrename;
use kartik\widgets\Select2;
use kartik\date\DatePicker;
use frontend\models\CChangwat;
use yii\helpers\Url;
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <div class="col-md-2">
            <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?php
            $mPrename = CPrename::find()->all();
            $items = ArrayHelper::map($mPrename, 'prename', 'prename');
            ?>
            <?=
            $form->field($model, 'prename')->widget(Select2::className(), [
                'data' => $items,
                'options' => ['placeholder' => 'เลือก ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ], //
            ])
            ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-3">
            <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?=
            $form->field($model, 'birth')->widget(DatePicker::className(), [
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ],
                'language' => 'th',
            ])
            ?>
        </div>
        <div class="col-md-3">
            <?php
            $mChangwat = CChangwat::find()->all();
            $items = ArrayHelper::map($mChangwat, 'changwatcode', 'changwatname');
            ?>
            <?=
            $form->field($model, 'province')->widget(Select2::className(), [
                'data' => $items
            ])
            ?>
        </div>
        <div class="col-md-3">
            <?=
            $form->field($model, 'district')->dropDownList([],[
                'prompt'=>'เลือก'
            ]);
            ?>
        </div>

    </div>

    <div class="form-group">
        <div class="col-md-3">
            <?= $form->field($model, 'subdistrict')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'village_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'village_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
<?= $form->field($model, 'house_no')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
<?= $form->field($model, 'lon')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-4">
            <?= $form->field($model, 'typearea')->textInput() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'nation')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'race')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
<?= $form->field($model, 'mstatus')->textInput(['maxlength' => true]) ?>
        </div>
    </div>



    <div class="form-group">
        <div class="col-md-6">
<?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>

</div>
<?php
$route_get_amp = Url::toRoute('ajax/getamp');
$js = <<<JS
$('#patient-province').change(function(){
   $('#patient-district').empty()
   $('#patient-district').append($('<option>').text('เลือก').attr('value',''));
    var p=$(this).val();
    $.ajax({
        url:'$route_get_amp'+'&q='+p,
        type:'POST',
        //data: '&q=' + p,
        dataType: 'json',
        success: function( json ) {
            $.each(json, function(code, value) {
                $('#patient-district').append($('<option>').text(value).attr('value', code));
            });
        }
    });
    
  
});
  

 
JS;
$this->registerJs($js);
?>
