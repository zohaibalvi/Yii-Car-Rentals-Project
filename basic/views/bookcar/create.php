<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\bookcar */

$this->title = 'BOOK YOUR CAR(Fill Your Details)';
// $this->params['breadcrumbs'][] = ['label' => 'Bookcars', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Book Your Car(admin)';
?>
<div class="container bookcar-create">

    <h2 class="firstHeading" style="width: 43%;"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
