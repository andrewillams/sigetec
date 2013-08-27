<?php

/**
 * This is the model class for table "Endereco".
 *
 * The followings are the available columns in table 'Endereco':
 * @property integer $idEndereco
 * @property string $cep
 * @property string $logradouro
 * @property string $numero
 * @property string $bairro
 * @property integer $idCidade
 * @property string $complemento
 *
 * The followings are the available model relations:
 * @property Cidade $idCidade0
 * @property Filial[] $filials
 */
class Endereco extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Endereco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cep, logradouro, numero, bairro, idCidade', 'required'),
			array('idCidade', 'numerical', 'integerOnly'=>true),
			array('cep', 'length', 'max'=>8),
			array('logradouro', 'length', 'max'=>200),
			array('numero', 'length', 'max'=>5),
			array('bairro', 'length', 'max'=>80),
			array('complemento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEndereco, cep, logradouro, numero, bairro, idCidade, complemento', 'safe', 'on'=>'search'),
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
			'idCidade0' => array(self::BELONGS_TO, 'Cidade', 'idCidade'),
			'filials' => array(self::HAS_MANY, 'Filial', 'idEndereco'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEndereco' => 'Id Endereco',
			'cep' => 'Cep',
			'logradouro' => 'Logradouro',
			'numero' => 'Numero',
			'bairro' => 'Bairro',
			'idCidade' => 'Cidade',
			'complemento' => 'Complemento',
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

		$criteria->compare('idEndereco',$this->idEndereco);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('logradouro',$this->logradouro,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('idCidade',$this->idCidade);
		$criteria->compare('complemento',$this->complemento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Endereco the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
