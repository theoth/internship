<?php

/**
 * This is the model class for table "professor".
 *
 * The followings are the available columns in table 'professor':
 * @property integer $id
 * @property integer $user_id
 * @property string $department
 *
 * The followings are the available model relations:
 * @property InternshipPosition[] $internshipPositions
 * @property Users $user
 */
class Professor extends CActiveRecord
{
    
    public static function getList(){
        return CHtml::listData(self::model()->findAll(), 'id', 'bothnamesurname');
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'professor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, department_id', 'required'),
			array('user_id,department_id', 'numerical', 'integerOnly'=>true),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, department_id', 'safe', 'on'=>'search'),
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
			'internshipPositions' => array(self::HAS_MANY, 'InternshipPosition', 'professor_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
                        'departments' => array(self::BELONGS_TO, 'Department', 'department_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'ID Χρήστη',
			'department_id' => 'Τμήμα',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('department_id',$this->department_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchByDepartment($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

            
            
            
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		

                if($id!=NULL){
                    $criteria->compare('department_id',$id,true);
                }
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        

        
         public function getBothnamesurname() {
        //echo $a==1 ? ($b==2 'a' : 'b') : 'c';
        return $this->user->last_name . ' ' . $this->user->first_name;
    }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Professor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
         
    
}
