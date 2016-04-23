<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?><br />

   



    <b><?php echo CHtml::encode($data->getAttributeLabel('dimension')); ?>:</b>
	<?php echo CHtml::encode($data->dmoCodigo->descripcion); ?><br />

	  <b><?php echo CHtml::encode($data->getAttributeLabel('Producto')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($data->proCodigo->descripcion), array('view', 
	                                                                       'precio'=>$data->precio,
	                                                                       'dmo_codigo'=>$data->dmo_codigo,
	                                                                       'pro_codigo'=>$data->pro_codigo,
	 )); ?>
	<br />
	
	
   
</div>
