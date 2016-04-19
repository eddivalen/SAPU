<?php
/* @var $this ModulosController */
/* @var $model Modulos */

$this->breadcrumbs=array(
	'Modulos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Modulos', 'url'=>array('index')),
	array('label'=>'Create Modulos', 'url'=>array('create')),
	array('label'=>'Update Modulos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Modulos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Modulos', 'url'=>array('admin')),
);
?>

<h1>View Modulos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>
