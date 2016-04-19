<?php
/* @var $this DimensionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dimensiones',
);

$this->menu=array(
	array('label'=>'Crear Dimension', 'url'=>array('create')),
	array('label'=>'Manage Dimensiones', 'url'=>array('admin')),
);
?>

<h1>Dimensiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
