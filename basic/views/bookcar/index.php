<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookcarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'BOOKING REPORTS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container bookcar-index">

    <h2 class="firstHeading"><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<link href="../css/Home_Style.css" rel="stylesheet" />
   <!--  <p>
        <?= Html::a('Create Bookcar', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Booking_Id',
            'Name',
            'Mobile',
            'Car_Code',
            'Time',
            // 'Pick_up_Time',
            // 'Date',
            // 'Pick_up_Date',
            // 'Pick_up_Adress',
            // 'Drop_off_Address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
