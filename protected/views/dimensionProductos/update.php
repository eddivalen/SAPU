<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'DimensionProductoss'=>array('index'),
	'View'=>array('view', 'dmo_codigo'=>$model->dmo_codigo, 'pro_codigo'=>$model->pro_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List DimensionProductos', 'url'=>array('index')),
	array('label'=>'Create DimensionProductos', 'url'=>array('create')),
	array('label'=>'View DimensionProductos', 'url'=>array('view', 'dmo_codigo'=>$model->dmo_codigo, 'pro_codigo'=>$model->pro_codigo)),
	array('label'=>'Manage DimensionProductos', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
