<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RegisterCar */

$this->title = 'Update Register Car: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Register Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Car_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container register-car-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
