<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\bookcar */
/* @var $form yii\widgets\ActiveForm */
?>
<link href="../css/ContactUsStyle.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/jquery.datetimepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../css/jquery.datetimepicker.full.js"></script>

<div class="container bookcar-form">

    <?php $form = ActiveForm::begin(

   [
            
            'options' => [
                'class' => 'bookcar_form'
             ]
        ]
   
//array ('class' => 'sync', 'id' =>'fun' ));   

        //<?= $form->field($model, 'Time')->textInput(['maxlength' => true]) 

    ); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Car_Code')->textInput(['maxlength' => true]) ?>

    
  <?=  $form->field($model, 'Time', ['inputOptions' => ['id' => 'datetimepicker']]) ?>

    <?= $form->field($model, 'Pick_up_Adress')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Drop_off_Address')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-danger contact_btn' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



<!--     <p><br/></p>
    <div class="container">
<input type="text" id="datetimepicker"/>

    </div> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    

    <script>  

$("#datetimepicker").datetimepicker();

    </script>


</div>
