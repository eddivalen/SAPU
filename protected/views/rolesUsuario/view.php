<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolesUsuarios'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List RolesUsuario', 'url'=>array('index')),
	array('label'=>'Create RolesUsuario', 'url'=>array('create')),
	array('label'=>'Update RolesUsuario', 'url'=>array('update', 'roe_id'=>$model->roe_id, 'uso_id'=>$model->uso_id)),
	array('label'=>'Delete RolesUsuario', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'roe_id'=>$model->roe_id, 'uso_id'=>$model->uso_id),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolesUsuario', 'url'=>array('admin')),
);
?>

<h1>View RolesUsuario</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
			array(
         'name'=> 'Rol',
         'value'=> $model->roeId->descripcion,
          ),
		//'roe_id',
		array(
		  'name' => 'Usuario',
		  'value' => $model->usoId->username,	

			),
		//'uso_id',
	),
)); ?>
