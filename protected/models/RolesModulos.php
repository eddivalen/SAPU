<?php




/**
 * This is the model class for table "roles_modulos".
 *
 * The followings are the available columns in table 'roles_modulos':
 * @property integer $mol_id
 * @property integer $roe_id
 *
 * The followings are the available model relations:
 * @property Auditoria[] $auditorias
 * @property Auditoria[] $auditorias1
 */
class RolesModulos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'roles_modulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mol_id, roe_id', 'required'),
			array('mol_id, roe_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mol_id, roe_id', 'safe', 'on'=>'search'),
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
            'rmoMolId' => array(self::HAS_MANY,'Auditoria', 'rmo_mol_id'),
            'rmoRoeId' => array(self::HAS_MANY,'Auditoria', 'rmo_roe_id'),
		    'molId' => array(self::BELONGS_TO, 'Modulos', 'mol_id'),
			'roeId' => array(self::BELONGS_TO, 'Roles', 'roe_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

public function attributeLabels()
{
    return array(
            'mol_id' => Yii::t('application', 'Mol'),
            'roe_id' => Yii::t('application', 'Roe'),
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

		$criteria->compare('mol_id',$this->mol_id);
		$criteria->compare('roe_id',$this->roe_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RolesModulos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
