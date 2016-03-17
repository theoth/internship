<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ProfessorForm extends CFormModel
{
	public $username;
	public $password;
        public $first_name;
        public $last_name;
        public $department;
        public $email;
	public $telephone;
	public $academicid;
        public $activated;
        
        public $isNew = true;
        public $professor_id = null;


	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('username,password,first_name,last_name,department,email,telephone,activated,academicid', 'required'),
			array('activated', 'numerical', 'integerOnly' => true),
                        // email has to be a valid email address
			array('username, last_name, first_name', 'length', 'max' => 25),
                        array('password', 'length', 'max' => 250),
                        array('email', 'length', 'max' => 30),
                    array('email', 'email'),
                        array('telephone', 'length', 'max' => 10),
                    array('academicid','length','max'=>12),
// verifyCode needs to be entered correctly
			//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
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
                    'id' => 'ID',
			'user_id' => 'ID Χρήστη',
			'department' => 'Τμήμα',
		);
	}
}