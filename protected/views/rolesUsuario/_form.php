<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'rol'); ?>
        <?php echo $form->dropDownList($model, 'roe_id', Roles::items(1)); ?>
        <?php echo $form->error($model,'roe_id'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'usuario'); ?>
        <?php echo $form->dropDownList($model, 'uso_id', Usuarios::items(1)); ?>
        <?php echo $form->error($model,'uso_id'); ?>
    </div>
	
	

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
