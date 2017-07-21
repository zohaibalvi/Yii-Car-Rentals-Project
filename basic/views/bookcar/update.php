<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\bookcar */

$this->title = 'Update Bookcar: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Bookcars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Booking_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container bookcar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
