<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RegisterCar */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Register Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="../css/ContactUsStyle.css" rel="stylesheet" />
<div class="container register-car-view">

    <h1 style="color:#DB3437;font-size:50px;"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Car_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Car_Id], [
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
            'Car_Id',
            'Name',
            'Car_Number',
            'Company',
            'City',
            'Contact_Number',
            'Number_Of_Seats',
            'Price_Per_Day',
            'Company_Created_Date',
            [

               'attribute' =>'Car_Image',
               'value' => Yii::getALias('@CarImageUrl'). '/'.$model->Car_Image,
                'format' =>['image',['width'=>'100','height'=>'100','Alt'=>'ddd']],
            ],
            'Description',
        ],
    ]) ?>

</div>
