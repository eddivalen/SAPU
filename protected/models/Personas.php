<?php




/**
 * This is the model class for table "personas".
 *
 * The followings are the available columns in table 'personas':
 * @property integer $id_persona
 * @property integer $cedula
 * @property string $rif
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 *
 * The followings are the available model relations:
 * @property Pedidos[] $pedidoses
 * @property Usuarios[] $usuarioses
 */
class Personas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			array('id_persona, cedula', 'numerical', 'integerOnly'=>true),
			array('rif, nombre, direccion, telefono', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_persona, cedula, rif, nombre, direccion, telefono', 'safe', 'on'=>'search'),
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
			'pedidoses' => array(self::HAS_MANY, 'Pedidos', 'pna_id_persona'),
			'usuarioses' => array(self::HAS_MANY, 'Usuarios', 'pna_id_persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

public function attributeLabels()
{
    return array(
            'id_persona' => Yii::t('application', 'Id Persona'),
            'cedula' => Yii::t('application', 'Cedula'),
            'rif' => Yii::t('application', 'Rif'),
            'nombre' => Yii::t('application', 'Nombre'),
            'direccion' => Yii::t('application', 'Direccion'),
            'telefono' => Yii::t('application', 'Telefono'),
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

		$criteria->compare('id_persona',$this->id_persona);
		$criteria->compare('cedula',$this->cedula);
		$criteria->compare('rif',$this->rif,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
