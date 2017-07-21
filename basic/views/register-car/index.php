<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RegisterCarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CAR REPORTS';
$this->params['breadcrumbs'][] = $this->title;
?>
 <link href="../css/Home_Style.css" rel="stylesheet" />
<div class="container register-car-index">

    <h2 class="firstHeading"><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<!-- 
    <p>
        <?= Html::a('Create Register Car', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->


      
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

 //            'options' => [
 //    'class' => 'YourCustomTableClass',
 // ],
 //        //      [
        //     'header' => 'Id',
        //     'attribute' => '#',
        //     'format' => ['decimal', 2],
        // ],

            'Car_Id',
            'Car_Image',
            'Name',
            'Car_Number',
            'Contact_Number',
            // 'City',
            // 'Company',
            // 'Number_Of_Seats',
            // 'Price_Per_Day',
            // 'Company_Created_Date',
            // 'Description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
