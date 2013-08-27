<?php

/**
 * This is the model class for table "Filial".
 *
 * The followings are the available columns in table 'Filial':
 * @property integer $idFilial
 * @property string $nome
 * @property string $cnpj
 * @property integer $idEndereco
 * @property string $inscEstadual
 * @property integer $idContato
 *
 * The followings are the available model relations:
 * @property Endereco $idEndereco0
 * @property Contato $idContato0
 */
class Filial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Filial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, cnpj, idEndereco, inscEstadual, idContato', 'required'),
			array('idEndereco, idContato', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>100),
			array('cnpj', 'length', 'max'=>14),
			array('inscEstadual', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idFilial, nome, cnpj, idEndereco, inscEstadual, idContato', 'safe', 'on'=>'search'),
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
			'idEndereco0' => array(self::BELONGS_TO, 'Endereco', 'idEndereco'),
			'idContato0' => array(self::BELONGS_TO, 'Contato', 'idContato'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFilial' => 'Id Filial',
			'nome' => 'Nome',
			'cnpj' => 'Cnpj',
			'idEndereco' => 'Endereco',
			'inscEstadual' => 'Insc Estadual',
			'idContato' => 'Contato',
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

		$criteria->compare('idFilial',$this->idFilial);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('idEndereco',$this->idEndereco);
		$criteria->compare('inscEstadual',$this->inscEstadual,true);
		$criteria->compare('idContato',$this->idContato);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Filial the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
