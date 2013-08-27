<?php

/**
 * This is the model class for table "Contato".
 *
 * The followings are the available columns in table 'Contato':
 * @property integer $idContato
 * @property string $fixo
 * @property string $celular
 * @property string $skype
 * @property string $facebook
 * @property string $twitter
 *
 * The followings are the available model relations:
 * @property Filial[] $filials
 */
class Contato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Contato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fixo', 'required'),
			array('idContato', 'numerical', 'integerOnly'=>true),
			array('fixo, celular', 'length', 'max'=>10),
			array('skype, facebook, twitter', 'length', 'max'=>80),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idContato, fixo, celular, skype, facebook, twitter', 'safe', 'on'=>'search'),
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
			'filials' => array(self::HAS_MANY, 'Filial', 'idContato'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idContato' => 'Id Contato',
			'fixo' => 'Fixo',
			'celular' => 'Celular',
			'skype' => 'Skype',
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
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

		$criteria->compare('idContato',$this->idContato);
		$criteria->compare('fixo',$this->fixo,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('twitter',$this->twitter,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
