<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_persona,
);

$this->menu=array(
	array('label'=>'List Personas', 'url'=>array('index')),
	array('label'=>'Create Personas', 'url'=>array('create')),
	array('label'=>'Update Personas', 'url'=>array('update', 'id'=>$model->id_persona)),
	array('label'=>'Delete Personas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_persona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>

<h1>View Personas #<?php echo $model->id_persona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_persona',
		'cedula',
		'rif',
		'nombre',
		'direccion',
		'telefono',
	),
)); ?>
