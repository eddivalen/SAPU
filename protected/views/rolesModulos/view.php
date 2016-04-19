<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolesModulos'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List RolesModulos', 'url'=>array('index')),
	array('label'=>'Create RolesModulos', 'url'=>array('create')),
	array('label'=>'Update RolesModulos', 'url'=>array('update', 'mol_id'=>$model->mol_id, 'roe_id'=>$model->roe_id)),
	array('label'=>'Delete RolesModulos', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'mol_id'=>$model->mol_id, 'roe_id'=>$model->roe_id),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolesModulos', 'url'=>array('admin')),
);
?>

<h1>View RolesModulos</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(

		array(
         'name'=> 'Modulo',
         'value'=> $model->molId->descripcion,
          ),
		//'mol_id',
		array(
		  'name' => 'Rol',
		  'value' => $model->roeId->descripcion,	

			),
		//'roe_id',
		
	),
)); ?>
