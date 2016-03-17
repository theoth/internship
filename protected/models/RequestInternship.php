<?php

/**
 * This is the model class for table "request_internship".
 *
 * The followings are the available columns in table 'request_internship':
 * @property integer $id
 * @property integer $internship_position_id
 * @property integer $student_id
 * @property string $date_request
 * @property integer $status
 * @property string $title1
 * @property string $code1
 * @property string $title2
 * @property string $code2
 * @property string $title3
 * @property string $code3
 * @property string $title4
 * @property string $code4
 * @property string $title5
 * @property string $code5
 *
 * The followings are the available model relations:
 * @property InternshipPosition $internshipPosition
 * @property Student $student
 */
class RequestInternship extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'request_internship';
    }

    public $order_stored_ids = array();
    public $order_ids = array();

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('internship_position_id, student_id, date_request, title1, code1,order', 'required'),
            array('internship_position_id, student_id, status, order', 'numerical', 'integerOnly' => true),
            array('title1, title2, title3, title4, title5', 'length', 'max' => 100),
            array('code1, code2, code3, code4, code5', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, internship_position_id, student_id, date_request, status, title1, code1, title2, code2, title3, code3, title4, code4, title5, code5,order', 'safe', 'on' => 'search'),
        );
    }

   

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'internshipPosition' => array(self::BELONGS_TO, 'InternshipPosition', 'internship_position_id'),
            'student' => array(self::BELONGS_TO, 'Student', 'student_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'internship_position_id' => 'Θέση Πρακτικής Άσκησης',
            'student_id' => 'Φοιτητής',
            'date_request' => 'Ημερομηνία και ώρα αίτησης',
            'status' => 'Status',
            'title1' => 'Τίτλος Θέσης',
            'code1' => 'Κωδικός θέσης',
            'title2' => 'Title2',
            'code2' => 'Code2',
            'title3' => 'Title3',
            'code3' => 'Code3',
            'title4' => 'Title4',
            'code4' => 'Code4',
            'title5' => 'Title5',
            'code5' => 'Code5',
            'order' => 'Σειρά Προτίμησης'
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
        $criteria->compare('internship_position_id', $this->internship_position_id);
        $criteria->compare('student_id', $this->student_id);
        $criteria->compare('date_request', $this->date_request, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('title1', $this->title1, true);
        $criteria->compare('code1', $this->code1, true);
        $criteria->compare('title2', $this->title2, true);
        $criteria->compare('code2', $this->code2, true);
        $criteria->compare('title3', $this->title3, true);
        $criteria->compare('code3', $this->code3, true);
        $criteria->compare('title4', $this->title4, true);
        $criteria->compare('code4', $this->code4, true);
        $criteria->compare('title5', $this->title5, true);
        $criteria->compare('code5', $this->code5, true);
        $criteria->compare('order', $this->order, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return RequestInternship the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
