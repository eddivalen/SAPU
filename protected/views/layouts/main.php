<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
		$criteria = new CDbCriteria();
		$criteria->condition = 'uso_id=:uso_id';
		$user=Usuarios::model()->find('LOWER(username)=?',array(Yii::app()->user->name));
		if((Yii::app()->user->isGuest) == false){
		$criteria->params = array(':uso_id'=>$user->id);
		$rol=RolesUsuario::model()->find($criteria);
		}
		$admin = (isset($rol->roe_id) and $rol->roe_id == 1) ? true : false ;
		$cajero = (isset($rol->roe_id) and $rol->roe_id == 2) ? true : false ;
		$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Personas', 'url'=>array('/personas'), 'visible'=>$admin),
				array('label'=>'Usuarios', 'url'=>array('/usuarios'), 'visible'=>$admin),
				array('label'=>'Pedidos', 'url'=>array('/pedidos'), 'visible'=>$admin),
				array('label'=>'Dimension', 'url'=>array('/dimensiones'), 'visible'=>$admin),
				array('label'=>'Unidad Medida', 'url'=>array('/unidadMedida'), 'visible'=>$admin),
				array('label'=>'Ingredientes', 'url'=>array('/ingredientes'), 'visible'=>$admin),
				array('label'=>'Ingredientes en el producto', 'url'=>array('/productosIngredientes'), 'visible'=>$admin),
				array('label'=>'Productos', 'url'=>array('/productos'), 'visible'=>$admin),
				array('label'=>'Tamaño del producto', 'url'=>array('/dimensionProductos'), 'visible'=>$admin),
				array('label'=>'Facturar', 'url'=>array('/pedidoProducto'), 'visible'=>$admin),
				array('label'=>'Adicionales', 'url'=>array('/adicionales'), 'visible'=>$admin),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Roles', 'url'=>array('/roles'), 'visible'=>$admin),
                array('label'=>'Modulos', 'url'=>array('/modulos'), 'visible'=>$admin),
                array('label'=>'Rol y Modulo', 'url'=>array('/rolesModulos'), 'visible'=>$admin),
                array('label'=>'Rol y Usuario', 'url'=>array('/rolesUsuario'), 'visible'=>$admin),
                
                array('label'=>'Pedidos Cajero', 'url'=>array('/pedidos'), 'visible'=>$cajero),
                array('label'=>'Personas', 'url'=>array('/personas'), 'visible'=>$cajero),
                array('label'=>'Productos', 'url'=>array('/productos'), 'visible'=>$cajero),
                array('label'=>'Facturar', 'url'=>array('/pedidoProducto'), 'visible'=>$cajero),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer footer-basic-centered footer-company-name">
		<p class="footer-company-name">Pizzería 2015. Todos los derechos reservados &copy;</p>


</div><!-- page -->

</body>
</html>
