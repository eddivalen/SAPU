<?php




/**
 * This is the model class for table "roles_usuario".
 *
 * The followings are the available columns in table 'roles_usuario':
 * @property integer $roe_id
 * @property integer $uso_id
 *
 * The followings are the available model relations:
 * @property Auditoria[] $auditorias
 * @property Auditoria[] $auditorias1
 */
class RolesUsuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'roles_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('roe_id, uso_id', 'required'),
			array('roe_id, uso_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('roe_id, uso_id', 'safe', 'on'=>'search'),
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
			'ruoRoeId' => array(self::HAS_MANY, 'Auditoria', 'ruo_roe_id'),
			'ruoUsoId' => array(self::HAS_MANY, 'Auditoria', 'ruo_uso_id'),
			'roeId' => array(self::BELONGS_TO, 'Roles', 'roe_id'),
			'usoId' => array(self::BELONGS_TO, 'Usuarios', 'uso_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

public function attributeLabels()
{
    return array(
            'roe_id' => Yii::t('application', 'Roe'),
            'uso_id' => Yii::t('application', 'Uso'),
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

		$criteria->compare('roe_id',$this->roe_id);
		$criteria->compare('uso_id',$this->uso_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RolesUsuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
