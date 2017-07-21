<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\bookcar */
/* @var $form yii\widgets\ActiveForm */
?>
<link href="../css/ContactUsStyle.css" rel="stylesheet" />
<div class="container bookcar-form">

    <?php $form = ActiveForm::begin(

   [
            
            'options' => [
                'class' => 'bookcar_form'
             ]
        ]
   


    ); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mobile')->textInput() ?>

    <?= $form->field($model, 'Car_Code')->textInput() ?>

    <?= $form->field($model, 'Time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pick_up_Time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'Pick_up_Date')->textInput() ?>

    <?= $form->field($model, 'Pick_up_Adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Drop_off_Address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-danger contact_btn' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
