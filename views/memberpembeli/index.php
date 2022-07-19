<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Memberpembeli;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MemberpembeliSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Memberpembelis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="memberpembeli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Memberpembeli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_member',
            'member',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Memberpembeli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_member' => $model->id_member]);
                 }
            ],
        ],
    ]); ?>


</div>
