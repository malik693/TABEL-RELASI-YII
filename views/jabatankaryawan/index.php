<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Jabatankaryawan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JabatankaryawanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jabatankaryawans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatankaryawan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jabatankaryawan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jabatan',
            'nama_jabatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jabatankaryawan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jabatan' => $model->id_jabatan]);
                 }
            ],
        ],
    ]); ?>


</div>
