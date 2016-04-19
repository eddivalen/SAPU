<?php
/* @var $this ProductosIngredientesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productos Ingredientes',
);

$this->menu=array(
	array('label'=>'Create ProductosIngredientes', 'url'=>array('create')),
	array('label'=>'Manage ProductosIngredientes', 'url'=>array('admin')),
);
?>

<h1>Productos Ingredientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
