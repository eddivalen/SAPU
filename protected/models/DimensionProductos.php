<?php




/**
 * This is the model class for table "dimension_productos".
 *
 * The followings are the available columns in table 'dimension_productos':
 * @property integer $precio
 * @property integer $dmo_codigo
 * @property integer $pro_codigo
 *
 * The followings are the available model relations:
 * @property PedidoProducto[] $pedidoProductos
 * @property PedidoProducto[] $pedidoProductos1
 */
class DimensionProductos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dimension_productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('precio, dmo_codigo, pro_codigo', 'required'),
			array('precio, dmo_codigo, pro_codigo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('precio, dmo_codigo, pro_codigo', 'safe', 'on'=>'search'),
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
			'dmpProCodigo' => array(self::HAS_MANY, 'PedidoProducto', 'dmp_pro_codigo'),
			'dmpDmoCodigo' => array(self::HAS_MANY, 'PedidoProducto', 'dmp_dmo_codigo'),
			'dmoCodigo' => array(self::BELONGS_TO, 'Dimensiones', 'dmo_codigo'),
			'proCodigo' => array(self::BELONGS_TO, 'Productos', 'pro_codigo'),
			

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

public function attributeLabels()
{
    return array(
            'precio' => Yii::t('application', 'Precio'),
            'dmo_codigo' => Yii::t('application', 'Dmo Codigo'),
            'pro_codigo' => Yii::t('application', 'Pro Codigo'),
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

		$criteria->compare('precio',$this->precio);
		$criteria->compare('dmo_codigo',$this->dmo_codigo);
		$criteria->compare('pro_codigo',$this->pro_codigo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DimensionProductos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
