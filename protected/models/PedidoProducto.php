<?php




/**
 * This is the model class for table "pedido_producto".
 *
 * The followings are the available columns in table 'pedido_producto':
 * @property integer $codigo
 * @property integer $cantidad
 * @property string $detalles
 * @property double $impuesto
 * @property integer $pdo_codigo
 * @property integer $dmp_pro_codigo
 * @property integer $dmp_dmo_codigo
 *
 * The followings are the available model relations:
 * @property Adicionales[] $adicionales
 * @property DimensionProductos $dmpProCodigo
 * @property DimensionProductos $dmpDmoCodigo
 * @property Pedidos $pdoCodigo
 */
class PedidoProducto extends CActiveRecord
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

	public function tableName()
	{
		return 'pedido_producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad, impuesto, pdo_codigo, dmp_pro_codigo, dmp_dmo_codigo', 'required'),
			array('cantidad, pdo_codigo, dmp_pro_codigo, dmp_dmo_codigo', 'numerical', 'integerOnly'=>true),
			array('impuesto', 'numerical'),
			array('detalles', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, cantidad, detalles, impuesto, pdo_codigo, dmp_pro_codigo, dmp_dmo_codigo', 'safe', 'on'=>'search'),
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
			'adicionales' => array(self::HAS_MANY, 'Adicionales', 'ppo_codigo'),
			'dmpProCodigo' => array(self::BELONGS_TO, 'DimensionProductos', 'dmp_pro_codigo'),
			'dmpDmoCodigo' => array(self::BELONGS_TO, 'DimensionProductos', 'dmp_dmo_codigo'),
			'pdoCodigo' => array(self::BELONGS_TO, 'Pedidos', 'pdo_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

public function attributeLabels()
{
    return array(
            'codigo' => Yii::t('application', 'Codigo'),
            'cantidad' => Yii::t('application', 'Cantidad'),
            'detalles' => Yii::t('application', 'Detalles'),
            'impuesto' => Yii::t('application', 'Impuesto'),
            'pdo_codigo' => Yii::t('application', 'Codigo del pedido'),
            'dmp_pro_codigo' => Yii::t('application', 'Nombre del producto'),
            'dmp_dmo_codigo' => Yii::t('application', 'Dimension del producto'),
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
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('detalles',$this->detalles,true);
		$criteria->compare('impuesto',$this->impuesto);
		$criteria->compare('pdo_codigo',$this->pdo_codigo);
		$criteria->compare('dmp_pro_codigo',$this->dmp_pro_codigo);
		$criteria->compare('dmp_dmo_codigo',$this->dmp_dmo_codigo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PedidoProducto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
