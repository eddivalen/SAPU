
<?php
class RolesUsuarioController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('RolesUsuario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCreate()
	{
	    $model=new RolesUsuario;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['RolesUsuario']))
	    {
	        $model->attributes=$_POST['RolesUsuario'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','roe_id'=>$model->roe_id, 'uso_id'=>$model->uso_id));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($roe_id, $uso_id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($roe_id, $uso_id)->delete();
			}
			catch(Exception $e) 
			{
				$this->showError($e);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionUpdate($roe_id, $uso_id)
	{
		$model=$this->loadModel($roe_id, $uso_id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RolesUsuario']))
		{
			$model->attributes=$_POST['RolesUsuario'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'roe_id'=>$model->roe_id, 'uso_id'=>$model->uso_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new RolesUsuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RolesUsuario']))
			$model->attributes=$_GET['RolesUsuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($roe_id, $uso_id)
	{		
		$model=$this->loadModel($roe_id, $uso_id);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($roe_id, $uso_id)
	{
		$model=RolesUsuario::model()->findByPk(array('roe_id'=>$roe_id, 'uso_id'=>$uso_id));
		if($model==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model)
	{
		try
		{
			$model->save();
		}
		catch(Exception $e)
		{
			$this->showError($e);
		}		
	}

	function showError(Exception $e)
	{
		if($e->getCode()==23000)
			$message = "This operation is not permitted due to an existing foreign key reference.";
		else
			$message = "Invalid operation.";
		throw new CHttpException($e->getCode(), $message);
	}		
}
