<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegisterCar */
/* @var $form yii\widgets\ActiveForm */
?>
<link href="../css/ContactUsStyle.css" rel="stylesheet" />
<div class="container register-car-form">

    <?php $form = ActiveForm::begin(


        [
          'options' => [
                        'enctype' => 'multipart/form-data',
                     
                       'class' => 'register_form'
                       ]
             
        ]


    ); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Car_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'City')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contact_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Number_Of_Seats')->textInput() ?>

    <?= $form->field($model, 'Price_Per_Day')->textInput() ?>

    <?= $form->field($model, 'Car_Image')->fileInput() ?>


    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-danger contact_btn' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
