<?php

/**
 * This is the model class for table "questionnaire_student".
 *
 * The followings are the available columns in table 'questionnaire_student':
 * @property integer $id
 * @property integer $student_id
 * @property integer $in1
 * @property integer $in2
 * @property integer $in3
 * @property integer $in4
 * @property integer $in5
 * @property integer $in6
 * @property integer $in7
 * @property integer $in8
 * @property integer $in9
 * @property integer $in10
 * @property integer $in11
 * @property integer $in12
 * @property integer $in13
 * @property integer $in14
 * @property integer $in15
 * @property integer $in16
 * @property integer $in17
 * @property integer $in18
 * @property integer $in19
 * @property integer $in20
 * @property string $in21
 * @property string $in22
 * @property string $in23
 * @property string $comments
 *
 * The followings are the available model relations:
 * @property Student $student
 */
class QuestionnaireStudent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'questionnaire_student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id', 'required'),
			array('student_id, in1, in2, in3, in4, in5, in6, in7, in8, in9, in10, in11, in12, in13, in14, in15, in16, in17, in18, in19, in20', 'numerical', 'integerOnly'=>true),
			array('in21, in22, in23, comments', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, student_id, in1, in2, in3, in4, in5, in6, in7, in8, in9, in10, in11, in12, in13, in14, in15, in16, in17, in18, in19, in20, in21, in22, in23, comments', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'Student', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'student_id' => 'Student',
			'in1' => 'In1',
			'in2' => 'In2',
			'in3' => 'In3',
			'in4' => 'In4',
			'in5' => 'In5',
			'in6' => 'In6',
			'in7' => 'In7',
			'in8' => 'In8',
			'in9' => 'In9',
			'in10' => 'In10',
			'in11' => 'In11',
			'in12' => 'In12',
			'in13' => 'In13',
			'in14' => 'In14',
			'in15' => 'In15',
			'in16' => 'In16',
			'in17' => 'In17',
			'in18' => 'In18',
			'in19' => 'In19',
			'in20' => 'In20',
			'in21' => 'In21',
			'in22' => 'In22',
			'in23' => 'In23',
			'comments' => 'Comments',
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
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('in1',$this->in1);
		$criteria->compare('in2',$this->in2);
		$criteria->compare('in3',$this->in3);
		$criteria->compare('in4',$this->in4);
		$criteria->compare('in5',$this->in5);
		$criteria->compare('in6',$this->in6);
		$criteria->compare('in7',$this->in7);
		$criteria->compare('in8',$this->in8);
		$criteria->compare('in9',$this->in9);
		$criteria->compare('in10',$this->in10);
		$criteria->compare('in11',$this->in11);
		$criteria->compare('in12',$this->in12);
		$criteria->compare('in13',$this->in13);
		$criteria->compare('in14',$this->in14);
		$criteria->compare('in15',$this->in15);
		$criteria->compare('in16',$this->in16);
		$criteria->compare('in17',$this->in17);
		$criteria->compare('in18',$this->in18);
		$criteria->compare('in19',$this->in19);
		$criteria->compare('in20',$this->in20);
		$criteria->compare('in21',$this->in21,true);
		$criteria->compare('in22',$this->in22,true);
		$criteria->compare('in23',$this->in23,true);
		$criteria->compare('comments',$this->comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return QuestionnaireStudent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
