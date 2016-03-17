
<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $id
 * @property string $file_cv_name
 * @property string $file_grades_name
 * @property string $file_ika
 * @property integer $user_id
 * @property string $department
 * @property string $father_name
 * @property string $mother_name
 * @property string $address
 * @property string $gender
 * @property string $identity_number
 * @property string $afm
 * @property string $doy
 * @property string $ama_ika
 * @property string $amka
 * @property integer $year_in
 * @property string $birth_day
 * @property string $IBAN
 *
 * The followings are the available model relations:
 * @property InternshipPosition[] $internshipPositions
 * @property RequestInternship[] $requestInternships
 * @property Users $user
 */
class Student extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'student';
    }

    public $file_cv;
    public $file_grades;
    public $f_ika;

    public function beforeValidate() {
        //var_dump($_FILES);
        $this->file_cv = CUploadedFile::getInstance($this, 'file_cv');
        //var_dump($this->file_cv);
         //var_dump($_FILES); die();
         
        if ($this->file_cv):
            $f1 = Yii::app()->basePath . '/../images/file_cv/' . $this->file_cv->name;
            if (file_exists($f1)) {
                $this->addError('file_cv', 'Επιλέξτε όνομα της μορφής : arxeio.doc');
            }
        endif;


        $this->file_grades = CUploadedFile::getInstance($this, 'file_grades');
//var_dump($this->file_grades);

        if ($this->file_grades):
            $f2 = Yii::app()->basePath . '/../images/file_grades/' . $this->file_grades->name;
            if (file_exists($f2)) {
                $this->addError('file', 'Επιλέξτε όνομα της μορφής : arxeio.doc');  
            }
        endif;


        $this->f_ika = CUploadedFile::getInstance($this, 'f_ika');

        if ($this->f_ika):
            $f3 = Yii::app()->basePath . '/../images/file_ika/' . $this->f_ika->name;
            if (file_exists($f3)) {
                $this->addError('file', 'Επιλέξτε όνομα της μορφής : arxeio.doc');
            }
        endif;


        return parent::beforeValidate();
    }

    public function beforeSave() {
       // var_dump($this->file_grades);
        if ($this->file_cv) {
            $f1 = Yii::app()->basePath . '/../images/file_cv/' . $this->file_cv->name;
            $this->file_cv->saveAs($f1);
            $this->file_cv_name = $this->file_cv->name ;
        }


        if ($this->file_grades) { 
            
            $f2 = Yii::app()->basePath . '/../images/file_grades/' . $this->file_grades->name;
            $this->file_grades->saveAs($f2);
            $this->file_grades_name = $this->file_grades->name;
        }

        if ($this->f_ika) {
            $f3 = Yii::app()->basePath . '/../images/file_ika/' . $this->f_ika->name;
            $this->f_ika->saveAs($f3);
            $this->file_ika = $this->f_ika->name;
        }
        
        return parent::beforeSave();
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, department, father_name, mother_name, address, gender, identity_number, afm, doy, ama_ika, amka, year_in, birth_day, IBAN,counter_requests', 'required'),
            array('user_id, year_in,counter_requests,is_in', 'numerical', 'integerOnly' => true),
            array('file_cv_name, file_grades_name, file_ika,department, father_name, mother_name, address, doy, ama_ika, amka, IBAN', 'length', 'max' => 45),
            array('file_cv', 'file', 'types' => 'jpg, gif, png, doc, pdf, txt', 'allowEmpty' => true),
            array('file_grades', 'file', 'types' => 'jpg, gif, png, doc, pdf, txt', 'allowEmpty' => true),
            array('f_ika', 'file', 'types' => 'jpg, gif, png, doc, pdf, txt', 'allowEmpty' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('users.last_name,id,file_cv_name, file_grades_name, file_ika,user_id, department, father_name, mother_name, address, gender, identity_number, afm, doy, ama_ika, amka, year_in, birth_day, IBAN,counter_requests', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'internshipPositions' => array(self::HAS_MANY, 'InternshipPosition', 'student_id'),
            'requestInternships' => array(self::HAS_MANY, 'RequestInternship', 'student_id'),
            'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
            'users' => array(self::BELONGS_TO, 'Users', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function getBothnamesurname() {
        //echo $a==1 ? ($b==2 'a' : 'b') : 'c';
        return $this->id . ' ' . $this->users->last_name . ' ' . $this->users->first_name;
    }

    public static function GetList() {


        return CHtml::listData(self::model()->findAll(), 'id', 'bothnamesurname');
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'file_cv_name' => 'Βιογραφικό',
            'file_grades_name' => 'Αναλυτική Βαθμολογία',
            'file_ika' => 'Βεβαίωση ΙΚΑ',
            'user_id' => 'ID χρήστη',
            'department' => 'Τμήμα',
            'father_name' => 'Όνομα Πατρός',
            'mother_name' => 'Όνομα Μητρός',
            'address' => 'Διεύθυνση',
            'gender' => 'Φύλο',
            'identity_number' => 'Αριθμός Α.Τ.',
            'afm' => 'ΑΦΜ',
            'doy' => 'ΔΟΥ',
            'ama_ika' => 'ΑΜΑ ΙΚΑ',
            'amka' => 'ΑΜΚΑ',
            'year_in' => 'Έτος εισαγωγής',
            'birth_day' => 'Ημερομηνία Γέννησης',
            'IBAN' => 'IBAN',
            'counter_requests'=>'μέτρηση αιτήσεων',
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

        $criteria->compare('file_cv_name', $this->file_cv_name, true);
        $criteria->compare('file_grades_name', $this->file_grades_name, true);
        $criteria->compare('file_ika', $this->file_ika, true);
        // $criteria->compare('users.last_name', $this->users->last_name, true);
        
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('department', $this->department, true);
        $criteria->compare('father_name', $this->father_name, true);
        $criteria->compare('mother_name', $this->mother_name, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('identity_number', $this->identity_number, true);
        $criteria->compare('afm', $this->afm, true);
        $criteria->compare('doy', $this->doy, true);
        $criteria->compare('ama_ika', $this->ama_ika, true);
        $criteria->compare('amka', $this->amka, true);
        $criteria->compare('year_in', $this->year_in);
        $criteria->compare('birth_day', $this->birth_day, true);
        $criteria->compare('IBAN', $this->IBAN, true);
        $criteria->compare('counter_requests', $this->counter_requests, true);
        $criteria->compare('is_in', $this->is_in, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Student the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    
    
}
