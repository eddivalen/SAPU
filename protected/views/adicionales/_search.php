<?php
/* @var $this AdicionalesController */
/* @var $model Adicionales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'precio_p'); ?>
		<?php echo $form->textField($model,'precio_p'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_m'); ?>
		<?php echo $form->textField($model,'precio_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_g'); ?>
		<?php echo $form->textField($model,'precio_g'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ppo_codigo'); ?>
		<?php echo $form->textField($model,'ppo_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ige_codigo'); ?>
		<?php echo $form->textField($model,'ige_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->