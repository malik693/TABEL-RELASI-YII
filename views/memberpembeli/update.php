<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Memberpembeli */

$this->title = 'Update Memberpembeli: ' . $model->id_member;
$this->params['breadcrumbs'][] = ['label' => 'Memberpembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_member, 'url' => ['view', 'id_member' => $model->id_member]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="memberpembeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
