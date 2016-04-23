<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'DimensionProductoss'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List DimensionProductos', 'url'=>array('index')),
	array('label'=>'Create DimensionProductos', 'url'=>array('create')),
	array('label'=>'Update DimensionProductos', 'url'=>array('update',
		                                                     'precio'=>$model->precio,
		                                                     'dmo_codigo'=>$model->dmo_codigo,
		                                                     'pro_codigo'=>$model->pro_codigo)),
	array('label'=>'Delete DimensionProductos', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	      	                                   'precio'=>$model->precio,
	                                           'dmo_codigo'=>$model->dmo_codigo, 
	                                           'pro_codigo'=>$model->pro_codigo),
									           'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DimensionProductos', 'url'=>array('admin')),
);
?>

<h1>View DimensionProductos</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'precio',
		 array(
         'name'=> 'Dimension',
         'value'=> $model->dmoCodigo->descripcion,
		 	),
         
         array(
         'name'=> 'Producto',
         'value'=> $model->proCodigo->descripcion,
		 	),
         
		
	),
)); ?>
