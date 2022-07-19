<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Memberpembeli */

$this->title = 'Create Memberpembeli';
$this->params['breadcrumbs'][] = ['label' => 'Memberpembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="memberpembeli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
