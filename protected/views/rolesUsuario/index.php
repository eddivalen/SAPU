<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'RolesUsuarios',
);

$this->menu=array(
	array('label'=>'Create RolesUsuario', 'url'=>array('create')),
	array('label'=>'Manage RolesUsuario', 'url'=>array('admin')),
);
?>

<h1>RolesUsuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
