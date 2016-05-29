<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class StudentForm extends CFormModel {

    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $father_name;
    public $mother_name;
    public $gender;
    public $birth_day;
    public $address;
    public $identity_number;
    public $afm;
    public $doy;
    public $amka;
    public $ama_ika;
    public $file_ika;
    public $aem;
    public $year_in;
    public $email;
    public $telephone;
    public $academicid;
    public $file_grades;
    public $file_cv;
    public $IBAN;
    public $activated;
    public $department_id;
    public $passed_courses;
    public $gen_average;
    public $win_el_average;
    public $sum_el_average;
    public $passed_win_el_courses;
    public $passed_sum_el_courses;
    //public $counter_requests;
    
    public $isNew = true;
    public $student_id = null;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            /*
              // name, email, subject and body are required
              array('email,username,password,first_name,last_name,father_name,'
              . 'mother_name,gender,birth_day,address,identity_number,'
              . 'afm,doy,department,aem,telephone,activated', 'required'),
              // email has to be a valid email address
              array('email', 'email'),
              array('activated', 'numerical', 'integerOnly' => true),
              //arraY('address,identity_number,afm,doy,amka,ama_ika,file_ika,department,aem,year_in,email,telephone,academicid,file_grades_name,file_cv_name,IBAN'
              // verifyCode needs to be entered correctly
             */

            array('father_name, mother_name, address, gender, identity_number, afm, doy, ama_ika, amka, year_in, birth_day, IBAN', 'required'),
            array('year_in', 'numerical', 'integerOnly' => true),
            array('department_id, father_name, mother_name, address, doy, ama_ika, amka, IBAN', 'length', 'max' => 45),
            array('file_cv', 'file', 'types' => 'jpg, gif, png, doc, pdf, txt', 'allowEmpty' => true),
            array('file_grades', 'file', 'types' => 'jpg, gif, png, doc, pdf, txt', 'allowEmpty' => true),
            array('file_ika', 'file', 'types' => 'jpg, gif, png, doc, pdf, txt', 'allowEmpty' => true),
            // The following rule is used by search().
            //user            
            array('username, password, email, aem,department_id', 'required'),
            array('passed_courses,passed_win_el_courses,passed_sum_el_courses,activated, aem', 'numerical', 'integerOnly' => true),
            array('gen_average,win_el_average,sum_el_average', 'numerical', 'integerOnly' => false),
            array('username, last_name, first_name', 'length', 'max' => 25),
            array('password', 'length', 'max' => 250),
            array('email', 'length', 'max' => 30),
            array('telephone', 'length', 'max' => 10),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'file_cv_name' => 'Βιογραφικό',
            'file_grades_name' => 'Αναλυτική Βαθμολογία',
            'file_ika' => 'Βεβαίωση ΙΚΑ',
            'user_id' => 'ID χρήστη',
            'department_id' => 'Τμήμα',
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
            'counter_requests' => 'μέτρηση αιτήσεων',
            'gen_average'=>'Γενικός μέσος όρος',
            'passed_courses'=>'Συνολικά περασμένα μαθήματα',
            'win_el_average'=>'Μέσος όρος μαθημάτων επιλογής χειμερινού εξαμήνου',
            'sum_el_average'=>'Μέσος όρος μαθημάτων επιλογής εαρινού εξαμήνου',
            'passed_sum_el_courses'=>'Περασμένα μαθήματα επιλογής εαρινού εξαμήνου',
            'passed_win_el_courses'=>'Περασμένα μαθήματα επιλογής χειμερινού εξαμήνου',
            'verifyCode' => 'Verification Code',
        );
    }

}
