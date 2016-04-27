<?php

/**
 * This is the model class for table "internship_position".
 *
 * The followings are the available columns in table 'internship_position':
 * @property integer $id
 * @property string $date_start
 * @property string $date_end
 * @property double $grade
 * @property integer $company_id
 * @property integer $professor_id
 * @property integer $student_id
 * @property integer $status_submit_student
 * @property integer $status_submit_company
 * @property integer $status_submit_professor
 * @property integer $status
 * @property string $title
 * @property string $description
 * @property integer $published
 * @property integer $year
 * @property integer $st_absence1
 * @property string $st_text1
 * @property string $st_notes1
 * @property string $st_text2
 * @property string $st_notes2
 * @property string $st_text3
 * @property string $st_notes3
 * @property integer $st_absence2
 * @property integer $st_absence3
 * @property string $st_final_text
 * @property string $st_final_notes
 * @property integer $co_absence1
 * @property integer $co_absence2
 * @property integer $co_absence3
 * @property string $co_text1
 * @property string $co_notes1
 * @property string $co_text2
 * @property string $co_notes2
 * @property string $co_text3
 * @property string $co_notes3
 * @property string $co_final_text
 * @property string $co_final_notes
 * @property string $prof_final_text
 *
 * The followings are the available model relations:
 * @property Company $company
 * @property Professor $professor
 * @property Student $student
 * @property RequestInternship[] $requestInternships
 */
class InternshipPosition extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    
          public static function periodList() {
        return array(
            '1' => 'Ιανουάριος - Μάρτιος',
            '2' => 'Απρίλιος - Ιούνιος',
            '3' => 'Ιούλιος - Σεπτέμβριος',
            '4' => 'Οκτώμβριος - Δεκέμβριος',
            
            
        );
    }
    
    
	public function tableName()
	{
		return 'internship_position';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_id, title, description, published,department', 'required'),
			array('company_id, professor_id, student_id, status_submit_student, status_submit_company, status_submit_professor, status, published, year, st_absence1, st_absence2, st_absence3, co_absence1, co_absence2, co_absence3', 'numerical', 'integerOnly'=>true),
			array('grade,period', 'numerical'),
                        array('date_start','date','format'=>'yyyy-MM-dd'),
                        array('date_end','date','format'=>'yyyy-MM-dd'),
			array('title', 'length', 'max'=>100),
                        array('department', 'length', 'max'=>45),
			array('st_text1, st_notes1, st_text2, st_notes2, st_text3, st_notes3, st_final_text, st_final_notes, co_text1, co_notes1, co_text2, co_notes2, co_text3, co_notes3, co_final_text, co_final_notes, prof_final_text', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date_start, date_end, grade,department, company_id, professor_id, student_id, status_submit_student, status_submit_company, status_submit_professor, status, title, description, published, year, st_absence1, st_text1, st_notes1, st_text2, st_notes2, st_text3, st_notes3, st_absence2, st_absence3, st_final_text, st_final_notes, co_absence1, co_absence2, co_absence3, co_text1, co_notes1, co_text2, co_notes2, co_text3, co_notes3, co_final_text, co_final_notes, prof_final_text', 'safe', 'on'=>'search'),
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
			'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
			'professor' => array(self::BELONGS_TO, 'Professor', 'professor_id'),
			'student' => array(self::BELONGS_TO, 'Student', 'student_id'),
			'requestInternships' => array(self::HAS_MANY, 'RequestInternship', 'internship_position_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'κωδικός θέσης',
			'date_start' => 'Ημερομηνία έναρξης πρακτικής άσκησης',
			'date_end' => 'Ημερομηνία λήξης πρακτικής άσκησης',
			'grade' => 'Βαθμός',
                        'department'=>'τμήμα',
			'company_id' => 'Εταιρεία',
			'professor_id' => 'Καθηγητής',
			'student_id' => 'Φοιτητής',
			'status_submit_student' => 'Status Submit Student',
			'status_submit_company' => 'Status Submit Company',
			'status_submit_professor' => 'Status Submit Professor',
			'status' => 'Status',
			'title' => 'Τίτλος Θέσης',
			'description' => 'Περιγραφή',
			'published' => 'Published',
			'year' => 'Έτος',
			'st_absence1' => 'Απουσίες πρώτου μήνα - Φοιτητής',
                        'st_absence2' => 'Απουσίες δεύτερου μήνα - Φοιτητής',
			'st_absence3' => 'Απουσίες τρίτου μήνα - Φοιτητής',
			'st_text1' => 'Έκθεση φοιτητή για τον πρώτο μήνα',
			'st_notes1' => 'Σχόλια φοιτητή για τον πρώτο μήνα',
			'st_text2' => 'Έκθεση φοιτητή για τον δεύτερο μήνα',
			'st_notes2' => 'Σχόλια φοιτητή για τον δεύτερο μήνα',
			'st_text3' => 'Έκθεση φοιτητή για τον τρίτο μήνα',
			'st_notes3' => 'Σχόλια φοιτητή για τον τρίτο μήνα',
			
			'st_final_text' => 'Τελική έκθεση φοιτητή',
			'st_final_notes' => 'Τελικά σχόλια φοιτητή',
			'co_absence1' => 'Απουσίες πρώτου μήνα - Εταιρεία',
			'co_absence2' => 'Απουσίες δευτέρου μήνα - Εταιρεία',
			'co_absence3' => 'Απουσίες τρίτου μήνα - Εταιρεία',
			'co_text1' => 'Έκθεση εταιρείας για τον πρώτο μήνα',
			'co_notes1' => 'Σχόλια εταιρείας για τον πρώτο μήνα',
			'co_text2' => 'Έκθεση εταιρείας για τον δεύτερο μήνα',
			'co_notes2' => 'Σχόλια εταιρείας για τον δεύτερο μήνα',
			'co_text3' => 'Έκθεση εταιρείας για τον τρίτο μήνα',
			'co_notes3' => 'Σχόλια εταιρείας για τον τρίτο μήνα',
			'co_final_text' => 'Τελική έκθεση εταιρείας',
			'co_final_notes' => 'Τελικά σχόλια εταιρείας',
			'prof_final_text' => 'Τελική έκθεση καθηγητή',
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
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('grade',$this->grade);
                $criteria->compare('department',$this->department);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('professor_id',$this->professor_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('status_submit_student',$this->status_submit_student);
		$criteria->compare('status_submit_company',$this->status_submit_company);
		$criteria->compare('status_submit_professor',$this->status_submit_professor);
		$criteria->compare('status',$this->status);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('year',$this->year);
		$criteria->compare('st_absence1',$this->st_absence1);
		$criteria->compare('st_text1',$this->st_text1,true);
		$criteria->compare('st_notes1',$this->st_notes1,true);
		$criteria->compare('st_text2',$this->st_text2,true);
		$criteria->compare('st_notes2',$this->st_notes2,true);
		$criteria->compare('st_text3',$this->st_text3,true);
		$criteria->compare('st_notes3',$this->st_notes3,true);
		$criteria->compare('st_absence2',$this->st_absence2);
		$criteria->compare('st_absence3',$this->st_absence3);
		$criteria->compare('st_final_text',$this->st_final_text,true);
		$criteria->compare('st_final_notes',$this->st_final_notes,true);
		$criteria->compare('co_absence1',$this->co_absence1);
		$criteria->compare('co_absence2',$this->co_absence2);
		$criteria->compare('co_absence3',$this->co_absence3);
		$criteria->compare('co_text1',$this->co_text1,true);
		$criteria->compare('co_notes1',$this->co_notes1,true);
		$criteria->compare('co_text2',$this->co_text2,true);
		$criteria->compare('co_notes2',$this->co_notes2,true);
		$criteria->compare('co_text3',$this->co_text3,true);
		$criteria->compare('co_notes3',$this->co_notes3,true);
		$criteria->compare('co_final_text',$this->co_final_text,true);
		$criteria->compare('co_final_notes',$this->co_final_notes,true);
		$criteria->compare('prof_final_text',$this->prof_final_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function Companysearch($cid)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
                
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('grade',$this->grade);
                $criteria->compare('department',$this->department);
		$criteria->compare('company_id',$cid);
		$criteria->compare('professor_id',$this->professor_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('status_submit_student',$this->status_submit_student);
		$criteria->compare('status_submit_company',$this->status_submit_company);
		$criteria->compare('status_submit_professor',$this->status_submit_professor);
		$criteria->compare('status',$this->status);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('year',$this->year);
		$criteria->compare('st_absence1',$this->st_absence1);
		$criteria->compare('st_text1',$this->st_text1,true);
		$criteria->compare('st_notes1',$this->st_notes1,true);
		$criteria->compare('st_text2',$this->st_text2,true);
		$criteria->compare('st_notes2',$this->st_notes2,true);
		$criteria->compare('st_text3',$this->st_text3,true);
		$criteria->compare('st_notes3',$this->st_notes3,true);
		$criteria->compare('st_absence2',$this->st_absence2);
		$criteria->compare('st_absence3',$this->st_absence3);
		$criteria->compare('st_final_text',$this->st_final_text,true);
		$criteria->compare('st_final_notes',$this->st_final_notes,true);
		$criteria->compare('co_absence1',$this->co_absence1);
		$criteria->compare('co_absence2',$this->co_absence2);
		$criteria->compare('co_absence3',$this->co_absence3);
		$criteria->compare('co_text1',$this->co_text1,true);
		$criteria->compare('co_notes1',$this->co_notes1,true);
		$criteria->compare('co_text2',$this->co_text2,true);
		$criteria->compare('co_notes2',$this->co_notes2,true);
		$criteria->compare('co_text3',$this->co_text3,true);
		$criteria->compare('co_notes3',$this->co_notes3,true);
		$criteria->compare('co_final_text',$this->co_final_text,true);
		$criteria->compare('co_final_notes',$this->co_final_notes,true);
		$criteria->compare('prof_final_text',$this->prof_final_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchCompleted()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('grade',$this->grade);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('professor_id',$this->professor_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('status_submit_student',$this->status_submit_student);
		$criteria->compare('status_submit_company',$this->status_submit_company);
		$criteria->compare('status_submit_professor',$this->status_submit_professor);
		$criteria->compare('status',2);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('year',$this->year);
		$criteria->compare('st_absence1',$this->st_absence1);
		$criteria->compare('st_text1',$this->st_text1,true);
		$criteria->compare('st_notes1',$this->st_notes1,true);
		$criteria->compare('st_text2',$this->st_text2,true);
		$criteria->compare('st_notes2',$this->st_notes2,true);
		$criteria->compare('st_text3',$this->st_text3,true);
		$criteria->compare('st_notes3',$this->st_notes3,true);
		$criteria->compare('st_absence2',$this->st_absence2);
		$criteria->compare('st_absence3',$this->st_absence3);
		$criteria->compare('st_final_text',$this->st_final_text,true);
		$criteria->compare('st_final_notes',$this->st_final_notes,true);
		$criteria->compare('co_absence1',$this->co_absence1);
		$criteria->compare('co_absence2',$this->co_absence2);
		$criteria->compare('co_absence3',$this->co_absence3);
		$criteria->compare('co_text1',$this->co_text1,true);
		$criteria->compare('co_notes1',$this->co_notes1,true);
		$criteria->compare('co_text2',$this->co_text2,true);
		$criteria->compare('co_notes2',$this->co_notes2,true);
		$criteria->compare('co_text3',$this->co_text3,true);
		$criteria->compare('co_notes3',$this->co_notes3,true);
		$criteria->compare('co_final_text',$this->co_final_text,true);
		$criteria->compare('co_final_notes',$this->co_final_notes,true);
		$criteria->compare('prof_final_text',$this->prof_final_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchCompletedProfessor()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('grade',$this->grade);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('professor_id',$this->id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('status_submit_student',$this->status_submit_student);
		$criteria->compare('status_submit_company',$this->status_submit_company);
		$criteria->compare('status_submit_professor',$this->status_submit_professor);
		$criteria->compare('status',2);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('year',$this->year);
		$criteria->compare('st_absence1',$this->st_absence1);
		$criteria->compare('st_text1',$this->st_text1,true);
		$criteria->compare('st_notes1',$this->st_notes1,true);
		$criteria->compare('st_text2',$this->st_text2,true);
		$criteria->compare('st_notes2',$this->st_notes2,true);
		$criteria->compare('st_text3',$this->st_text3,true);
		$criteria->compare('st_notes3',$this->st_notes3,true);
		$criteria->compare('st_absence2',$this->st_absence2);
		$criteria->compare('st_absence3',$this->st_absence3);
		$criteria->compare('st_final_text',$this->st_final_text,true);
		$criteria->compare('st_final_notes',$this->st_final_notes,true);
		$criteria->compare('co_absence1',$this->co_absence1);
		$criteria->compare('co_absence2',$this->co_absence2);
		$criteria->compare('co_absence3',$this->co_absence3);
		$criteria->compare('co_text1',$this->co_text1,true);
		$criteria->compare('co_notes1',$this->co_notes1,true);
		$criteria->compare('co_text2',$this->co_text2,true);
		$criteria->compare('co_notes2',$this->co_notes2,true);
		$criteria->compare('co_text3',$this->co_text3,true);
		$criteria->compare('co_notes3',$this->co_notes3,true);
		$criteria->compare('co_final_text',$this->co_final_text,true);
		$criteria->compare('co_final_notes',$this->co_final_notes,true);
		$criteria->compare('prof_final_text',$this->prof_final_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchCompletedCompany()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('grade',$this->grade);
		$criteria->compare('company_id',$this->id);
		$criteria->compare('professor_id',$this->professor_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('status_submit_student',$this->status_submit_student);
		$criteria->compare('status_submit_company',$this->status_submit_company);
		$criteria->compare('status_submit_professor',$this->status_submit_professor);
		$criteria->compare('status',2);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('year',$this->year);
		$criteria->compare('st_absence1',$this->st_absence1);
		$criteria->compare('st_text1',$this->st_text1,true);
		$criteria->compare('st_notes1',$this->st_notes1,true);
		$criteria->compare('st_text2',$this->st_text2,true);
		$criteria->compare('st_notes2',$this->st_notes2,true);
		$criteria->compare('st_text3',$this->st_text3,true);
		$criteria->compare('st_notes3',$this->st_notes3,true);
		$criteria->compare('st_absence2',$this->st_absence2);
		$criteria->compare('st_absence3',$this->st_absence3);
		$criteria->compare('st_final_text',$this->st_final_text,true);
		$criteria->compare('st_final_notes',$this->st_final_notes,true);
		$criteria->compare('co_absence1',$this->co_absence1);
		$criteria->compare('co_absence2',$this->co_absence2);
		$criteria->compare('co_absence3',$this->co_absence3);
		$criteria->compare('co_text1',$this->co_text1,true);
		$criteria->compare('co_notes1',$this->co_notes1,true);
		$criteria->compare('co_text2',$this->co_text2,true);
		$criteria->compare('co_notes2',$this->co_notes2,true);
		$criteria->compare('co_text3',$this->co_text3,true);
		$criteria->compare('co_notes3',$this->co_notes3,true);
		$criteria->compare('co_final_text',$this->co_final_text,true);
		$criteria->compare('co_final_notes',$this->co_final_notes,true);
		$criteria->compare('prof_final_text',$this->prof_final_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InternshipPosition the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getBothcompanytitle() {
        //echo $a==1 ? ($b==2 'a' : 'b') : 'c';
        return $this->id . ' ' . $this->title;
    }
    public $period;
    
    
       
                
    
    public function beforeValidate(){
        //$month_current=date('n');
        
        
        $date_current=date('Y-m-d');
        
        //var_dump($date_current);    die();
        
        if (parent::beforeValidate()){
            
            
            
            if($this->period==1){
                if($date_current>date('Y').'-01-01') {
                    $this->date_start =date('Y', strtotime('+1 year')).'-01-01';
                    
                    
                    
                    
                }
                else {
                    $this->date_start =date('Y').'-01-01';
                    
                    
                }
                $this->date_end = date('Y-m-d', strtotime("+3 months -1 days", strtotime($this->date_start)));
            
        }
        
        //var_dump($date_current);
        //var_dump(date('y').'-04-01');
        //var_dump($date_current > date('y').'-04-01');
        //die();
        if($this->period==2){
                if($date_current>date('Y').'-04-01') {
                    $this->date_start =date('Y', strtotime('+1 year')).'-04-01';
                    
                }
                else {
                    $this->date_start =date('Y').'-04-01';
                }
            $this->date_end = date('Y-m-d', strtotime("+3 months -1 days", strtotime($this->date_start)));
        } 
        
        if($this->period==3){
                if($date_current>date('Y').'-07-01') {
                    $this->date_start =date('yyyy', strtotime('+1 year')).'-07-01';
                }
                else {
                    $this->date_start =date('Y').'-07-01';
                }
            $this->date_end = date('Y-m-d', strtotime("+3 months -1 days", strtotime($this->date_start)));
        }
        
        if($this->period==4){
                if($date_current>date('Y').'-10-01') {
                    $this->date_start =date('Y', strtotime('+1 year')).'-10-01';
                }
                else {
                    $this->date_start =date('Y').'-10-01';
                }
         $this->date_end = date('Y-m-d', strtotime("+3 months -1 days", strtotime($this->date_start)));
        }
        
    }
    //$this->date_end='2017-06-30';
    //var_dump($this->date_end);
    
    return true;
    }
        
        
        public static function GetList() {
            return CHtml::listData(self::model()->findAll(), 'id', 'bothcompanytitle');
        }
        
        
        public function available_search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('grade',$this->grade);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('professor_id',$this->professor_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('status_submit_student',$this->status_submit_student);
		$criteria->compare('status_submit_company',$this->status_submit_company);
		$criteria->compare('status_submit_professor',$this->status_submit_professor);
		$criteria->compare('status',0);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('published',1);
		$criteria->compare('year',$this->year);
		$criteria->compare('st_absence1',$this->st_absence1);
		$criteria->compare('st_text1',$this->st_text1,true);
		$criteria->compare('st_notes1',$this->st_notes1,true);
		$criteria->compare('st_text2',$this->st_text2,true);
		$criteria->compare('st_notes2',$this->st_notes2,true);
		$criteria->compare('st_text3',$this->st_text3,true);
		$criteria->compare('st_notes3',$this->st_notes3,true);
		$criteria->compare('st_absence2',$this->st_absence2);
		$criteria->compare('st_absence3',$this->st_absence3);
		$criteria->compare('st_final_text',$this->st_final_text,true);
		$criteria->compare('st_final_notes',$this->st_final_notes,true);
		$criteria->compare('co_absence1',$this->co_absence1);
		$criteria->compare('co_absence2',$this->co_absence2);
		$criteria->compare('co_absence3',$this->co_absence3);
		$criteria->compare('co_text1',$this->co_text1,true);
		$criteria->compare('co_notes1',$this->co_notes1,true);
		$criteria->compare('co_text2',$this->co_text2,true);
		$criteria->compare('co_notes2',$this->co_notes2,true);
		$criteria->compare('co_text3',$this->co_text3,true);
		$criteria->compare('co_notes3',$this->co_notes3,true);
		$criteria->compare('co_final_text',$this->co_final_text,true);
		$criteria->compare('co_final_notes',$this->co_final_notes,true);
		$criteria->compare('prof_final_text',$this->prof_final_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
