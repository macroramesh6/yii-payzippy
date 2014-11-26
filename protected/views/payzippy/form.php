<?php
/* @var $this PayzippyFormController */
/* @var $model PayzippyForm */
/* @var $form CActiveForm */
$order_id = "MT" . (string)rand(100000, 999999);
?>
<section class="wrapper">
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'payzippy-form-payzippy-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>false,
    'action'=>Yii::app()->createUrl('//payzippy/method'),
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'buyer_email_address'); ?>
        <?php echo $form->textField($model,'buyer_email_address',array('value'=>'me@domain.com')); ?>
        <?php echo $form->error($model,'buyer_email_address'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'transaction_amount'); ?>
        <?php echo $form->textField($model,'transaction_amount',array('value'=>'100')); ?>
        <?php echo $form->error($model,'transaction_amount'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'payment_method'); ?>
        <?php echo $form->textField($model,'payment_method',array('value'=>'PAYZIPPY')); ?>
        <?php echo $form->error($model,'payment_method'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'bank_name'); ?>
        <?php echo $form->textField($model,'bank_name',array('value'=>'HDFC')); ?>
        <?php echo $form->error($model,'bank_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'merchant_transaction_id'); ?>
        <?php echo $form->textField($model,'merchant_transaction_id',array('value'=>$order_id)); ?>
        <?php echo $form->error($model,'merchant_transaction_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'ui_mode'); ?>
        <?php echo $form->textField($model,'ui_mode',array('value'=>'IFRAME')); ?>
        <?php echo $form->error($model,'ui_mode'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</section>
