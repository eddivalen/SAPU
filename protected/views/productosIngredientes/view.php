<?php
/* @var $this ProductosIngredientesController */
/* @var $model ProductosIngredientes */

$this->breadcrumbs=array(
	'Productos Ingredientes'=>array('index'),
	$model->ige_codigo,
);

$this->menu=array(
	array('label'=>'Listar Ingredientes en el Productos', 'url'=>array('index')),
	array('label'=>'Crear Ingredientes en el  Producto', 'url'=>array('create')),
	array('label'=>'Actualizar Ingredientes en el  Producto', 'url'=>array('update', 'id'=>$model->ige_codigo)),
	array('label'=>'Eliminar Ingredientes en el  Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ige_codigo),'confirm'=>'¿ Esta seguro que desea eliminar el ingrediente del producto ?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1>View ProductosIngredientes #<?php echo $model->ige_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
	     	 array(
             'name' => 'Codigo',
             'value' => $model->proCodigo->descripcion, 
             ),
             array(
             'name' => 'Producto',
             'value' => $model->igeCodigo->descripcion,  
             ),
	),
)); ?>
