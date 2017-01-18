<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <div class="col-md-2">
            <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'prename')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4">
            <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'birth')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>
        </div>

    </div>

    <div class="form-group">



        <?= $form->field($model, 'subdistrict')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'village_no')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'village_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'house_no')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group">

        <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'lon')->textInput(['maxlength' => true]) ?>
    </div>


    <div class="form-group">

        <?= $form->field($model, 'typearea')->textInput() ?>

        <?= $form->field($model, 'nation')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'race')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'mstatus')->textInput(['maxlength' => true]) ?>
    </div>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
