<?php

/**
 * This is the model class for table "pedidos".
 *
 * The followings are the available columns in table 'pedidos':
 * @property integer $codigo
 * @property integer $pna_id_persona
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property PedidoProducto[] $pedidoProductos
 * @property Personas $pnaIdPersona
 */
class Pedidos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	/// lista desplegable
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
		$models=self::model()->findAll(array('order'=>'codigo'));
	   // self::$_items[$tipo][""]=""; // Descomentar para incluir un campo en blanco al inicio, para cuando el campo puede ser nulo
	    foreach($models as $model){
	    	self::$_items[$tipo][$model->codigo]=$model->codigo;
	    }
	}
     /// Lista desplegable
	public function tableName()
	{
		return 'pedidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pna_id_persona, fecha', 'required'),
			array('codigo, pna_id_persona', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, pna_id_persona, fecha', 'safe', 'on'=>'search'),
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
			'pedidoProductos' => array(self::HAS_MANY, 'PedidoProducto', 'pdo_codigo'),
			'pnaIdPersona' => array(self::BELONGS_TO, 'Personas', 'pna_id_persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'pna_id_persona' => 'Cedula Persona',
			'nombre'=>'Nombre Persona',
			'fecha' => 'Fecha',
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

		$criteria->compare('codigo',$this->codigo);
		$criteria->compare('pna_id_persona',$this->pna_id_persona);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedidos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
