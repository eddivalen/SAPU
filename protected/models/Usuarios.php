<?php




/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $pna_id_persona
 * @property integer $tpo_id
 *
 * The followings are the available model relations:
 * @property Roles[] $roles
 * @property Personas $pnaIdPersona
 * @property TipoUsuario $tpo
 */
class Usuarios extends CActiveRecord
{
	  private static $_items=array();
	
	public static function items($tipo){
 	// Devuelve todos los ítems que forman el arreglo
    	if(!isset(self::$_items[$tipo]))
        self::loadItems($tipo);
        return self::$_items[$tipo];
    }

    public static function item($tipo, $id){
 	// Devuelve el ítem al que le corresponde el id
    	if(!isset(self::$_items[$tipo]))
  			self::loadItems($tipo);
 			
 		return isset(self::$_items[$tipo][$id]) ? self::$_items[$tipo][$id] : false;
    }

	private static function loadItems($tipo){
	 // Obtiene los registros
		self::$_items[$tipo]=array();
		$models=self::model()->findAll(array('order'=>'username'));
	   // self::$_items[$tipo][""]=""; // Descomentar para incluir un campo en blanco al inicio, para cuando el campo puede ser nulo
	    foreach($models as $model){
	    	self::$_items[$tipo][$model->id]=$model->username;
	    }
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, pna_id_persona, tpo_id', 'required'),
			array('id, pna_id_persona, tpo_id', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, pna_id_persona, tpo_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'roles' => array(self::MANY_MANY, 'Roles', 'roles_usuario(uso_id, roe_id)'),
			'pnaIdPersona' => array(self::BELONGS_TO, 'Personas', 'pna_id_persona'),
			'tpo' => array(self::BELONGS_TO, 'TipoUsuario', 'tpo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

public function attributeLabels()
{
    return array(
            'id' => Yii::t('application', 'ID'),
            'username' => Yii::t('application', 'Username'),
            'password' => Yii::t('application', 'Password'),
            'pna_id_persona' => Yii::t('application', 'Nombre persona'),
            'tpo_id' => Yii::t('application', 'Tipo de Usuario'),
    );
}


	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('pna_id_persona',$this->pna_id_persona);
		$criteria->compare('tpo_id',$this->tpo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
		public function validatePassword($password){
	return $this->hashPassword($password)===$this->password;
	}
 
	public function hashPassword($password){
	return md5($password);
	}
}
