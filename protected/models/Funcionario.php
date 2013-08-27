<?php

/**
 * This is the model class for table "Funcionario".
 *
 * The followings are the available columns in table 'Funcionario':
 * @property integer $idFuncionario
 * @property integer $idFilial
 * @property string $nome
 * @property string $cpf
 * @property string $matricula
 * @property integer $idEndereco
 * @property integer $idContato
 * @property integer $idCargo
 *
 * The followings are the available model relations:
 * @property Cargo $idCargo0
 * @property Filial $idFilial0
 * @property Endereco $idEndereco0
 * @property Contato $idContato0
 * @property Usuario[] $usuarios
 */
class Funcionario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idFilial, nome, cpf, matricula, idEndereco, idContato, idCargo', 'required'),
			array('idFilial, idEndereco, idContato, idCargo', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>150),
			array('cpf', 'length', 'max'=>11),
			array('matricula', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idFuncionario, idFilial, nome, cpf, matricula, idEndereco, idContato, idCargo', 'safe', 'on'=>'search'),
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
			'idCargo0' => array(self::BELONGS_TO, 'Cargo', 'idCargo'),
			'idFilial0' => array(self::BELONGS_TO, 'Filial', 'idFilial'),
			'idEndereco0' => array(self::BELONGS_TO, 'Endereco', 'idEndereco'),
			'idContato0' => array(self::BELONGS_TO, 'Contato', 'idContato'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'idFuncionario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFuncionario' => 'Id Funcionario',
			'idFilial' => 'Filial',
			'nome' => 'Nome',
			'cpf' => 'Cpf',
			'matricula' => 'Matricula',
			'idEndereco' => 'Endereco',
			'idContato' => 'Contato',
			'idCargo' => 'Cargo',
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

		$criteria->compare('idFuncionario',$this->idFuncionario);
		$criteria->compare('idFilial',$this->idFilial);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('matricula',$this->matricula,true);
		$criteria->compare('idEndereco',$this->idEndereco);
		$criteria->compare('idContato',$this->idContato);
		$criteria->compare('idCargo',$this->idCargo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Funcionario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
