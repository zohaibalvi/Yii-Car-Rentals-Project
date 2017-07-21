<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookcarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container bookcar-search" style="color: #cc3b3b;">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Booking_Id') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Mobile') ?>

    <?= $form->field($model, 'Car_Code') ?>

    <?= $form->field($model, 'Time') ?>

    <?php // echo $form->field($model, 'Pick_up_Time') ?>

    <?php // echo $form->field($model, 'Date') ?>

    <?php // echo $form->field($model, 'Pick_up_Date') ?>

    <?php // echo $form->field($model, 'Pick_up_Adress') ?>

    <?php // echo $form->field($model, 'Drop_off_Address') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
