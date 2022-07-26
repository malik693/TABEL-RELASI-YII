<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jabatankaryawan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jabatankaryawan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_jabatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
