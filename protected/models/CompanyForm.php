<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class CompanyForm extends CFormModel {

    public $address;
    public $city;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $email;
    public $telephone;
    public $brand;
    public $description;
    public $activated;
    public $afm;
    public $doy;
    public $tk;
    public $id;
    public $identity_number;
    public $isNew = true;
    public $company_id = null;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('username,password,first_name,last_name,email,brand,description,telephone,activated,afm,doy,tk,identity_number,address,city', 'required'),
            // email has to be a valid email address
            array('email', 'email'),
            array('email', 'length', 'max' => 30),
            array('password', 'length', 'max' => 250),
            array('telephone', 'length', 'max' => 10),
            array('tk', 'numerical', 'integerOnly' => true),
            array('brand,doy,address,city', 'length', 'max' => 45),
            array('afm,identity_number', 'length', 'max' => 15),
                // verifyCode needs to be entered correctly
                //array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'verifyCode' => 'Verification Code',
            'id' => 'ID',
            'brand' => 'Brand',
            'description' => 'Περιγραφή',
            'user_id' => 'ID Χρήστη',
            'afm' => 'ΑΦΜ',
            'doy' => 'ΔΟΥ',
            'tk' => 'Τ.Κ.',
            'identity_number' => 'Αριθμός Α.Τ.',
            'address' => 'Διεύθυνση',
            'city' => 'Πόλη',
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

}
