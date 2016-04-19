<?php
/* @var $this ProductosIngredientesController */
/* @var $data ProductosIngredientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ingrediente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->igeCodigo->descripcion), array('view', 'id'=>$data->ige_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Producto')); ?>:</b>
	<?php echo CHtml::encode($data->proCodigo->descripcion); ?>
	<br />


</div>