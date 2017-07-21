<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RegisterCar */

$this->title = 'ADD NEW CAR';
// $this->params['breadcrumbs'][] = ['label' => 'Register Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Add New Car';
?>

 
<div class="container register-car-create">

    <h2 class="firstHeading"  style="width: 19%;"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
