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
    
    public static function algorithm($sid){
        
        $student=Student::model()->findByPk($sid);
        //var_dump($student);die();
        $de=Department::model()->findByPk($student->department_id);
        
        // perasmena ypoxrewtika
        $passed_req_courses=$student->passed_courses-$student->passed_win_el_courses-$student->passed_sum_el_courses;
        
        //arithmitikos mesos oros ypoxrewtikwn
        $req_average=($student->passed_courses*$student->gen_average-$student->win_el_average*$student->passed_win_el_courses-$student->sum_el_average*$student->passed_sum_el_courses)/$passed_req_courses;
        
        //arithmitikos mesos oros epilogis
        $el_average=($student->win_el_average*$student->passed_win_el_courses+$student->sum_el_average*$student->passed_sum_el_courses)/($student->passed_sum_el_courses+$student->passed_win_el_courses);
        
        //eksamino foititi pou exei oloklirwsei
        $year_stu=date('Y')-$student->year_in;
        $month=date('n');
        if ($month>2){
            $semester=$year_stu*2-1;
        }
        else{
            $semester=$year_stu*2-1-1;
        }
        
        //echo('student is'. $student->getBothnamesurname() . 'και εξαμηνο '. $semester);
        
        if($semester==0){
            return 0;
        }
        else if($semester==1){
            $courses_req=$de->re_courses1;
            $courses_el=$de->el_courses1;
        }
        else if($semester==2){
            $courses_req=$de->re_courses1+$de->re_courses2;
            $courses_el=$de->el_courses1+$de->el_courses2;
        }
        else if($semester==3){
            $courses_req=$de->re_courses1+$de->re_courses2+$de->re_courses3;
            $courses_el=$de->el_courses1+$de->el_courses2+$de->el_courses3;
        }
        else if($semester==4){
            $courses_req=$de->re_courses1+$de->re_courses2+$de->re_courses3+$de->re_courses4;
            $courses_el=$de->el_courses1+$de->el_courses2+$de->el_courses3+$de->el_courses4;
        }
        else if($semester==5){
            $courses_req=$de->re_courses1+$de->re_courses2+$de->re_courses3+$de->re_courses4+$de->re_courses5;
            $courses_el=$de->el_courses1+$de->el_courses2+$de->el_courses3+$de->el_courses4+$de->el_courses5;
        }
        else if($semester==6){
            $courses_req=$de->re_courses1+$de->re_courses2+$de->re_courses3+$de->re_courses4+$de->re_courses5+$de->re_courses6;
            $courses_el=$de->el_courses1+$de->el_courses2+$de->el_courses3+$de->el_courses4+$de->el_courses5+$de->el_courses6;
        }
        else if($semester==7){
            $courses_req=$de->re_courses1+$de->re_courses2+$de->re_courses3+$de->re_courses4+$de->re_courses5+$de->re_courses6+$de->re_courses7;
            $courses_el=$de->el_courses1+$de->el_courses2+$de->el_courses3+$de->el_courses4+$de->el_courses5+$de->el_courses6+$de->el_courses7;
        }
        else if($semester==8){
            $courses_req=$de->re_courses1+$de->re_courses2+$de->re_courses3+$de->re_courses4+$de->re_courses5+$de->re_courses6+$de->re_courses7+$de->re_courses8;
            $courses_el=$de->el_courses1+$de->el_courses2+$de->el_courses3+$de->el_courses4+$de->el_courses5+$de->el_courses6+$de->el_courses7+$de->el_courses8;
        }
        else if($semester==9){
            $courses_req=$de->re_courses1+$de->re_courses2+$de->re_courses3+$de->re_courses4+$de->re_courses5+$de->re_courses6+$de->re_courses7+$de->re_courses8+$de->re_courses9;
            $courses_el=$de->el_courses1+$de->el_courses2+$de->el_courses3+$de->el_courses4+$de->el_courses5+$de->el_courses6+$de->el_courses7+$de->el_courses8+$de->el_courses9;
        }
        else{
            $courses_req=$de->re_courses1+$de->re_courses2+$de->re_courses3+$de->re_courses4+$de->re_courses5+$de->re_courses6+$de->re_courses7+$de->re_courses8+$de->re_courses9+$de->re_courses10;
            $courses_el=$de->el_courses1+$de->el_courses2+$de->el_courses3+$de->el_courses4+$de->el_courses5+$de->el_courses6+$de->el_courses7+$de->el_courses8+$de->el_courses9+$de->el_courses10;
        }
        
        //logos X
        $X=$passed_req_courses/$courses_req;
        
        //logos Y
        $Y=($student->passed_sum_el_courses+$student->passed_win_el_courses)/$courses_el;
        
        // syntelestes varitatas gia kathe meso oro kai pollaplasiasmos me to 100
        $req_average=$req_average*2;
        $el_average=$el_average*2;
        
        $average=($el_average+$req_average)/2;
        $average=$average*100;
        
        //total score
        $score=($X+$Y/2)*$average;
        
        return round($score,2);
        
        
        
    }

}
