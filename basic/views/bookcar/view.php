<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\bookcar */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Bookcars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="../css/ContactUsStyle.css" rel="stylesheet" />
<div class="container bookcar-view">

    <h1 style="color:#DB3437;font-size:50px;"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Booking_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Booking_Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Booking_Id',
            'Name',
            'Mobile',
            'Car_Code',
            'Time',
            'Pick_up_Adress',
            'Drop_off_Address',
        ],
    ]) ?>

</div>
