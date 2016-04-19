<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">

	
	
	
	
    

   


    <b><?php echo CHtml::encode($data->getAttributeLabel('Modulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->molId->descripcion), array('view', 'mol_id'=>$data->mol_id,'roe_id'=>$data->roe_id
	 )); ?>
	<br />





    <b><?php echo CHtml::encode($data->getAttributeLabel('Rol')); ?>:</b>
	<?php echo CHtml::encode($data->roeId->descripcion); ?><br />
	
    
</div>
