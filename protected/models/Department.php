<?php

/**
 * This is the model class for table "department".
 *
 * The followings are the available columns in table 'department':
 * @property integer $id
 * @property string $name
 * @property integer $re_courses1
 * @property integer $re_courses2
 * @property integer $re_courses3
 * @property integer $re_courses4
 * @property integer $re_courses5
 * @property integer $re_courses6
 * @property integer $re_courses7
 * @property integer $re_courses8
 * @property integer $re_courses9
 * @property integer $re_courses10
 * @property integer $el_courses1
 * @property integer $el_courses2
 * @property integer $el_courses3
 * @property integer $el_courses4
 * @property integer $el_courses5
 * @property integer $el_courses6
 * @property integer $el_courses7
 * @property integer $el_courses8
 * @property integer $el_courses9
 * @property integer $el_courses10
 * @property integer $period
 *
 * The followings are the available model relations:
 * @property Professor[] $professors
 * @property Student[] $students
 */
class Department extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'department';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('re_courses1, re_courses2, re_courses3, re_courses4, re_courses5, re_courses6, re_courses7, re_courses8, re_courses9, re_courses10, el_courses1, el_courses2, el_courses3, el_courses4, el_courses5, el_courses6, el_courses7, el_courses8, el_courses9, el_courses10, period', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 100),
            array('req_date_start', 'date', 'format' => 'yyyy-MM-dd'),
            array('req_date_end', 'date', 'format' => 'yyyy-MM-dd'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, re_courses1, re_courses2, re_courses3, re_courses4, re_courses5, re_courses6, re_courses7, re_courses8, re_courses9, re_courses10, el_courses1, el_courses2, el_courses3, el_courses4, el_courses5, el_courses6, el_courses7, el_courses8, el_courses9, el_courses10, period', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'professors' => array(self::HAS_MANY, 'Professor', 'department_id'),
            'students' => array(self::HAS_MANY, 'Student', 'department_id'),
            'internshipPositions' => array(self::HAS_MANY, 'InternshipPosition', 'department_id'),
            
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Ονομασία',
            //'user_id'=>'Administrator Τμήματος',
            're_courses1' => 'Αριθμός υποχρεωτικών μαθημάτων 1ου εξαμήνου',
            're_courses2' => 'Αριθμός υποχρεωτικών μαθημάτων 2ου εξαμήνου',
            're_courses3' => 'Αριθμός υποχρεωτικών μαθημάτων 3ου εξαμήνου',
            're_courses4' => 'Αριθμός υποχρεωτικών μαθημάτων 4ου εξαμήνου',
            're_courses5' => 'Αριθμός υποχρεωτικών μαθημάτων 5ου εξαμήνου',
            're_courses6' => 'Αριθμός υποχρεωτικών μαθημάτων 6ου εξαμήνου',
            're_courses7' => 'Αριθμός υποχρεωτικών μαθημάτων 7ου εξαμήνου',
            're_courses8' => 'Αριθμός υποχρεωτικών μαθημάτων 8ου εξαμήνου',
            're_courses9' => 'Αριθμός υποχρεωτικών μαθημάτων 9ου εξαμήνου',
            're_courses10' => 'Αριθμός υποχρεωτικών μαθημάτων 10ου εξαμήνου',
            'el_courses1' => 'Αριθμός μαθημάτων επιλογής 1ου εξαμήνου',
            'el_courses2' => 'Αριθμός μαθημάτων επιλογής 2ου εξαμήνου',
            'el_courses3' => 'Αριθμός μαθημάτων επιλογής 3ου εξαμήνου',
            'el_courses4' => 'Αριθμός μαθημάτων επιλογής 4ου εξαμήνου',
            'el_courses5' => 'Αριθμός μαθημάτων επιλογής 5ου εξαμήνου',
            'el_courses6' => 'Αριθμός μαθημάτων επιλογής 6ου εξαμήνου',
            'el_courses7' => 'Αριθμός μαθημάτων επιλογής 7ου εξαμήνου',
            'el_courses8' => 'Αριθμός μαθημάτων επιλογής 8ου εξαμήνου',
            'el_courses9' => 'Αριθμός μαθημάτων επιλογής 9ου εξαμήνου',
            'el_courses10' => 'Αριθμός μαθημάτων επιλογής 10ου εξαμήνου',
            'period' => 'Χρονική διάρκεια σε μήνες',
            'req_date_start'=>'Ημερομηνία έναρξης υποβολής αιτήσεων από τους φοιτητές.',
            'req_date_end'=>'Ημερομηνία λήξης υποβολής αιτήσεων από τους φοιτητές.',
            
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        //$criteria->compare('user_id', $this->user_id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('re_courses1', $this->re_courses1);
        $criteria->compare('re_courses2', $this->re_courses2);
        $criteria->compare('re_courses3', $this->re_courses3);
        $criteria->compare('re_courses4', $this->re_courses4);
        $criteria->compare('re_courses5', $this->re_courses5);
        $criteria->compare('re_courses6', $this->re_courses6);
        $criteria->compare('re_courses7', $this->re_courses7);
        $criteria->compare('re_courses8', $this->re_courses8);
        $criteria->compare('re_courses9', $this->re_courses9);
        $criteria->compare('re_courses10', $this->re_courses10);
        $criteria->compare('el_courses1', $this->el_courses1);
        $criteria->compare('el_courses2', $this->el_courses2);
        $criteria->compare('el_courses3', $this->el_courses3);
        $criteria->compare('el_courses4', $this->el_courses4);
        $criteria->compare('el_courses5', $this->el_courses5);
        $criteria->compare('el_courses6', $this->el_courses6);
        $criteria->compare('el_courses7', $this->el_courses7);
        $criteria->compare('el_courses8', $this->el_courses8);
        $criteria->compare('el_courses9', $this->el_courses9);
        $criteria->compare('el_courses10', $this->el_courses10);
        $criteria->compare('period', $this->period);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Department the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getName() {
        return $this->name;
    }

    public static function getList() {


        return CHtml::listData(self::model()->findAll(), 'id', 'name');
    }

}
