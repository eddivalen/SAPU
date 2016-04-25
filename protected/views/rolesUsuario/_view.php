<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('Rol')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->roeId->descripcion), array('view', 'roe_id'=>$data->roe_id,'uso_id'=>$data->uso_id
	 )); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usoId->username); ?><br />
	
  
</div>
