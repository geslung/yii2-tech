<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mis\models\OneprotermSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-default oneproterm-search">
    <div class="panel-body">
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
            'layout' => 'inline',
            'fieldConfig' => [
                'template' => '{beginWrapper}<div class="row"><div class="col-sm-3">{label}</div><div class="col-sm-9">{input}{error}{hint}</div></div>{endWrapper}',
                'labelOptions' => ['class' => ""],
                'options' => ['class' => 'form-group col-sm-6', "style" => "padding-top:10px"],
            ],
        ]); ?>

        <?= $form->field($model, 'id') ?>

        <?= $form->field($model, 'oneproductid') ?>

        <?= $form->field($model, 'term') ?>

        <?= $form->field($model, 'price') ?>

        <?= $form->field($model, 'num') ?>

        <?php // echo $form->field($model, 'begintime') ?>

        <?php // echo $form->field($model, 'endtime') ?>

        <?php // echo $form->field($model, 'attr') ?>

        <?php // echo $form->field($model, 'addtime') ?>

        <?php // echo $form->field($model, 'modtime') ?>

        <?php // echo $form->field($model, 'status') ?>

        <div class="form-group" style="padding-top:10px">
            <?= Html::submitButton('查询', ['class' => 'btn btn-primary text-center']) ?>
            <?= Html::resetButton('清空', ['class' => 'btn btn-default text-center']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
