<?php
/* @var $this PedidoProductoController */
/* @var $data PedidoProducto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalles')); ?>:</b>
	<?php echo CHtml::encode($data->detalles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impuesto')); ?>:</b>
	<?php echo CHtml::encode($data->impuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pdo_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->pdo_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dmp_pro_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->dmpProCodigo->proCodigo->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dmp_dmo_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->dmpDmoCodigo->dmoCodigo->descripcion); ?>
	<br />

</div>