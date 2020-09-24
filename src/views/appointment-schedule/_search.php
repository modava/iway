<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modava\iway\models\search\AppointmentScheduleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-schedule-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'co_so_id') ?>

    <?= $form->field($model, 'start_time') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'status_service') ?>

    <?php // echo $form->field($model, 'accept_for_service') ?>

    <?php // echo $form->field($model, 'reason_fail') ?>

    <?php // echo $form->field($model, 'check_in_time') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('backend','Search.'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('backend','Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
