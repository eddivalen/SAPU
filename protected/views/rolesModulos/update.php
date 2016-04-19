<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolesModulos'=>array('index'),
	'View'=>array('view', 'mol_id'=>$model->mol_id, 'roe_id'=>$model->roe_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolesModulos', 'url'=>array('index')),
	array('label'=>'Create RolesModulos', 'url'=>array('create')),
	array('label'=>'View RolesModulos', 'url'=>array('view', 'mol_id'=>$model->mol_id, 'roe_id'=>$model->roe_id)),
	array('label'=>'Manage RolesModulos', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
