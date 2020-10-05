<?php

use modava\affiliate\AffiliateModule;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $modelName */
/* @var $filePath */
/* @var $model */
/* @var $dataProvider */
/* @var $searchModel */
?>

<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="modal-title"><?=Yii::t('backend', 'List'). ' ' . Yii::t('backend', $modelName)?></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" style="height: 70vh; overflow-y: scroll">
            <?=\Yii::$app->view->renderFile($filePath, ['searchModel' => $searchModel, 'dataProvider' => $dataProvider,]);?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>