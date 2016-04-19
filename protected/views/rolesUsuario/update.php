<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolesUsuarios'=>array('index'),
	'View'=>array('view', 'roe_id'=>$model->roe_id, 'uso_id'=>$model->uso_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolesUsuario', 'url'=>array('index')),
	array('label'=>'Create RolesUsuario', 'url'=>array('create')),
	array('label'=>'View RolesUsuario', 'url'=>array('view', 'roe_id'=>$model->roe_id, 'uso_id'=>$model->uso_id)),
	array('label'=>'Manage RolesUsuario', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
