<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'modulos'); ?>
        <?php echo $form->dropDownList($model, 'mol_id', Modulos::items(0)); ?>
        <?php echo $form->error($model,'mol_id'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Roles'); ?>
        <?php echo $form->dropDownList($model, 'roe_id', Roles::items(0)); ?>
        <?php echo $form->error($model,'roe_id'); ?>
    </div>
	
	
    
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Crear'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
