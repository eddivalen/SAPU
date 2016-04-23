<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    
    <div class="row">
        <?php echo $form->labelEx($model,'precio'); ?>
        <?php echo $form->textField($model,'precio'); ?>
        <?php echo $form->error($model,'precio'); ?>
    </div>
    

    <div class="row">
        <?php echo $form->labelEx($model,'dmo_codigo'); ?>
        <?php echo $form->dropDownList($model, 'dmo_codigo', Dimensiones::items(1)); ?>
        <?php echo $form->error($model,'dmo_codigo'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'pro_codigo'); ?>
        <?php echo $form->dropDownList($model, 'pro_codigo', Productos::items(1)); ?>
        <?php echo $form->error($model,'pro_codigo'); ?>
    </div>
    
    
    
    <div class="row buttons">
        <?php echo CHtml::submitButton('Crear'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
