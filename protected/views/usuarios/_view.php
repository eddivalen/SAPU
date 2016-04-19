<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pna_id_persona')); ?>:</b>
	<?php echo CHtml::encode($data->pna_id_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpo_id')); ?>:</b>
	<?php echo CHtml::encode($data->tpo_id); ?>
	<br />


</div>