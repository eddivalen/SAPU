<?php




/**
 * This is the model class for table "productos_ingredientes".
 *
 * The followings are the available columns in table 'productos_ingredientes':
 * @property integer $pro_codigo
 * @property integer $ige_codigo
 *
 * The followings are the available model relations:
 * @property DimensionIngredientes[] $dimensionIngredientes
 * @property Ingredientes $igeCodigo
 * @property Productos $proCodigo
 */
class ProductosIngredientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

       	

	public function tableName()
	{
		return 'productos_ingredientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_codigo, ige_codigo', 'required'),
			array('pro_codigo, ige_codigo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_codigo, ige_codigo', 'safe', 'on'=>'search'),
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
			'dimensionIngredientes' => array(self::HAS_MANY, 'DimensionIngredientes', 'pie_ige_codigo'),
			'igeCodigo' => array(self::BELONGS_TO, 'Ingredientes', 'ige_codigo'),
			'proCodigo' => array(self::BELONGS_TO, 'Productos', 'pro_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

public function attributeLabels()
{
    return array(
            'pro_codigo' => Yii::t('application', 'Pro Codigo'),
            'ige_codigo' => Yii::t('application', 'Ige Codigo'),
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

		$criteria->compare('pro_codigo',$this->pro_codigo);
		$criteria->compare('ige_codigo',$this->ige_codigo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductosIngredientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
