<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegisterCarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container register-car-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Car_Id') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Car_Number') ?>

    <?= $form->field($model, 'Company') ?>

    <?= $form->field($model, 'City') ?>

    <?php // echo $form->field($model, 'Contact_Number') ?>

    <?php // echo $form->field($model, 'Number_Of_Seats') ?>

    <?php // echo $form->field($model, 'Price_Per_Day') ?>

    <?php // echo $form->field($model, 'Company_Created_Date') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
