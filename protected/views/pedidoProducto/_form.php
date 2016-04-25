<?php
/* @var $this PedidoProductoController */
/* @var $model PedidoProducto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedido-producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Detalles'); ?>
		<?php echo $form->textField($model,'detalles',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'detalles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Impuesto'); ?>
		<?php echo $form->textField($model,'impuesto'); ?>
		<?php echo $form->error($model,'impuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Codigo del pedido'); ?>
		 <?php echo $form->dropDownList($model, 'pdo_codigo', Pedidos::items(1)); ?>
		<?php echo $form->error($model,'pdo_codigo'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'Producto'); ?>
        <?php echo $form->dropDownList($model, 'dmp_pro_codigo', Productos::items(1)); ?>
        <?php echo $form->error($model,'dmp_pro_codigo'); ?>
    </div>
	

	  <div class="row">
        <?php echo $form->labelEx($model,'Dimension'); ?>
        <?php echo $form->dropDownList($model, 'dmp_dmo_codigo', Dimensiones::items(1)); ?>
        <?php echo $form->error($model,'dmp_dmo_codigo'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ordenar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->