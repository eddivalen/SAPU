<?php
/* @var $this AdicionalesController */
/* @var $data Adicionales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ige_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ige_codigo), array('view', 'id'=>$data->ige_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_p')); ?>:</b>
	<?php echo CHtml::encode($data->precio_p); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_m')); ?>:</b>
	<?php echo CHtml::encode($data->precio_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_g')); ?>:</b>
	<?php echo CHtml::encode($data->precio_g); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppo_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->ppo_codigo); ?>
	<br />


</div>