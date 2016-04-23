<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'DimensionProductoss',
);

$this->menu=array(
	array('label'=>'Create DimensionProductos', 'url'=>array('create')),
	array('label'=>'Manage DimensionProductos', 'url'=>array('admin')),
);
?>

<h1>DimensionProductoss</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
