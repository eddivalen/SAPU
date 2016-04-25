<?php
/* @var $this AdicionalesController */
/* @var $model Adicionales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'adicionales-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_p'); ?>
		<?php echo $form->textField($model,'precio_p'); ?>
		<?php echo $form->error($model,'precio_p'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_m'); ?>
		<?php echo $form->textField($model,'precio_m'); ?>
		<?php echo $form->error($model,'precio_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_g'); ?>
		<?php echo $form->textField($model,'precio_g'); ?>
		<?php echo $form->error($model,'precio_g'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppo_codigo'); ?>
		<?php echo $form->dropDownList($model, 'ppo_codigo', PedidoProducto::items(1)); ?>
		<?php echo $form->error($model,'ppo_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ige_codigo'); ?>
		<?php echo $form->dropDownList($model, 'ige_codigo', Ingredientes::items(1)); ?>
		<?php echo $form->error($model,'ige_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->