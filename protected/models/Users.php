<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $activated
 * @property string $last_name
 * @property string $first_name
 * @property integer $act_code
 * @property string $email
 * @property string $telephone
 * @property integer $type
 * @property integer $aem
 * @property string $academicid
 *
 * The followings are the available model relations:
 * @property Company[] $companies
 * @property Professor[] $professors
 * @property Student[] $students
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, type,aem', 'required'),
			array('activated, act_code, type, aem', 'numerical', 'integerOnly'=>true),
                        //array('aem','unsafe',),
			array('username, last_name, first_name', 'length', 'max'=>25),
			array('password', 'length', 'max'=>250),
                    array('status_data', 'length', 'max'=>256),
			array('email', 'length', 'max'=>30),
			array('telephone', 'length', 'max'=>10),
			array('academicid', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, activated, last_name, first_name, act_code, email, telephone, type, aem, academicid', 'safe', 'on'=>'search'),
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
			'companies' => array(self::HAS_MANY, 'Company', 'user_id'),
                        'company' => array(self::HAS_ONE, 'Company', 'user_id'),
			'professors' => array(self::HAS_MANY, 'Professor', 'user_id'),
			'students' => array(self::HAS_MANY, 'Student', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Όνομα Χρήστη',
			'password' => 'Κωδικός',
			'activated' => 'Activated',
			'last_name' => 'Επώνυμο',
			'first_name' => 'Όνομα',
			'act_code' => 'Act Code',
			'email' => 'Email',
			'telephone' => 'Τηλέφωνο',
			'type' => 'Τύπος',
			'aem' => 'ΑΕΜ',
			'academicid' => 'Academicid',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('activated',$this->activated);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('act_code',$this->act_code);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('aem',$this->aem);
		$criteria->compare('academicid',$this->academicid,true);
                $criteria->compare('status_data',$this->academicid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
       
                 
            
        
}
