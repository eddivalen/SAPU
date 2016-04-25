<?php




/**
 * This is the model class for table "adicionales".
 *
 * The followings are the available columns in table 'adicionales':
 * @property double $precio_p
 * @property double $precio_m
 * @property double $precio_g
 * @property integer $ppo_codigo
 * @property integer $ige_codigo
 *
 * The followings are the available model relations:
 * @property Ingredientes $igeCodigo
 * @property PedidoProducto $ppoCodigo
 */
class Adicionales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'adicionales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ppo_codigo, ige_codigo', 'required'),
			array('ppo_codigo, ige_codigo', 'numerical', 'integerOnly'=>true),
			array('precio_p, precio_m, precio_g', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('precio_p, precio_m, precio_g, ppo_codigo, ige_codigo', 'safe', 'on'=>'search'),
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
			'igeCodigo' => array(self::BELONGS_TO, 'Ingredientes', 'ige_codigo'),
			'ppoCodigo' => array(self::BELONGS_TO, 'PedidoProducto', 'ppo_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

public function attributeLabels()
{
    return array(
            'precio_p' => Yii::t('application', 'Precio Pequeño'),
            'precio_m' => Yii::t('application', 'Precio Mediano'),
            'precio_g' => Yii::t('application', 'Precio Grande'),
            'ppo_codigo' => Yii::t('application', 'Codigo del pedido'),
            'ige_codigo' => Yii::t('application', 'Codigo del ingrediente'),
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

		$criteria->compare('precio_p',$this->precio_p);
		$criteria->compare('precio_m',$this->precio_m);
		$criteria->compare('precio_g',$this->precio_g);
		$criteria->compare('ppo_codigo',$this->ppo_codigo);
		$criteria->compare('ige_codigo',$this->ige_codigo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Adicionales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
