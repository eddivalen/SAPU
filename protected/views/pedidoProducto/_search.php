<?php
/* @var $this PedidoProductoController */
/* @var $model PedidoProducto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detalles'); ?>
		<?php echo $form->textField($model,'detalles',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'impuesto'); ?>
		<?php echo $form->textField($model,'impuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pdo_codigo'); ?>
		<?php echo $form->textField($model,'pdo_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dmp_pro_codigo'); ?>
		<?php echo $form->textField($model,'dmp_pro_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dmp_dmo_codigo'); ?>
		<?php echo $form->textField($model,'dmp_dmo_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->