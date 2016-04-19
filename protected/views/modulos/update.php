<?php
/* @var $this ModulosController */
/* @var $model Modulos */

$this->breadcrumbs=array(
	'Modulos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Modulos', 'url'=>array('index')),
	array('label'=>'Create Modulos', 'url'=>array('create')),
	array('label'=>'View Modulos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Modulos', 'url'=>array('admin')),
);
?>

<h1>Update Modulos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>