<?php
/* @var $this DimensionesController */
/* @var $model Dimensiones */

$this->breadcrumbs=array(
	'Dimensiones'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dimensiones', 'url'=>array('index')),
	array('label'=>'Create Dimensiones', 'url'=>array('create')),
	array('label'=>'View Dimensiones', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Dimensiones', 'url'=>array('admin')),
);
?>

<h1>Update Dimensiones <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>