<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Memberpembeli */

$this->title = $model->id_member;
$this->params['breadcrumbs'][] = ['label' => 'Memberpembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="memberpembeli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_member' => $model->id_member], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_member' => $model->id_member], [
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
            'id_member',
            'member',
        ],
    ]) ?>

</div>
