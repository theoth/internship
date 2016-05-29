<?php

/**
 * This is the model class for table "questionnaire_company".
 *
 * The followings are the available columns in table 'questionnaire_company':
 * @property integer $id
 * @property integer $company_id
 * @property integer $in1
 * @property integer $in2
 * @property integer $in3
 * @property integer $in4
 * @property integer $in5
 * @property integer $in6
 * @property integer $in7
 * @property integer $in8
 * @property integer $st1
 * @property integer $st2
 * @property integer $st3
 * @property integer $st4
 * @property integer $st5
 * @property integer $st6
 * @property integer $st7
 * @property integer $st8
 * @property integer $st9
 * @property integer $st10
 * @property string $comments
 *
 * The followings are the available model relations:
 * @property Company $company
 */
class QuestionnaireCompany extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'questionnaire_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('id, in1, in2, in3, in4, in5, in6, in7, in8, st1, st2, st3, st4, st5, st6, st7, st8, st9, st10', 'numerical', 'integerOnly'=>true),
			array('comments', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company_id, in1, in2, in3, in4, in5, in6, in7, in8, st1, st2, st3, st4, st5, st6, st7, st8, st9, st10, comments', 'safe', 'on'=>'search'),
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
                    'nternshipPositions' => array(self::HAS_MANY, 'InternshipPosition', 'questionnnaire_company_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			
			'in1' => 'Πιστεύετε ότι τα προγράμματα πρακτικής άσκησης ωφελούν την υπηρεσία/ επιχείρηση/ οργανισμό σας;',
			'in2' => 'Πιστεύετε ότι η Πρακτική Άσκηση προσέφερε ανατροφοδότηση στο φορέα σας;',
			'in3' => 'Πόσο ικανοποιητική θεωρείτε τη συνεργασία σας με το γραφείο πρακτικής άσκησης του τμήματος;',
			'in4' => 'Είστε ικανοποιημένος/η από τη συνεργασία σας με τους υπευθύνους της υλοποίησης της Πρακτικής Άσκησης (Επόπτη Καθηγητή και Επιστημονικό Υπεύθυνο της Πρακτικής Άσκησης);',
			'in5' => 'Θα ήσασταν πρόθυμοι να συμμετάσχετε ξανά σε πρόγραμμα της πρακτικής άσκησης του Πανεπιστημίου Δυτικής Μακεδονίας;',
			'in6' => 'Έχετε συνεργαστεί ξανά σε πρόγραμμα πρακτικής άσκησης με το Πανεπιστήμιο Δυτικής Μακεδονίας;',
			'in7' => 'Έχετε συνεργαστεί ξανά σε πρόγραμμα πρακτικής άσκησης με κάποιο άλλο ίδρυμα τριτοβάθμιας εκπαίδευσης;',
			'in8' => 'Ανταποκρίθηκε η Πρακτική Άσκηση, έτσι όπως πραγματοποιήθηκε, στις προσδοκίες της υπηρεσίας/οργανισμού/επιχείρησης σας;',
			'st1' => 'Η συνεργασία σας με τον ασκούμενο/η ήταν ικανοποιητική;',
			'st2' => 'Θεωρείτε ότι ο ασκούμενος/η είχε την κατάλληλη θεωρητική εκπαίδευση ώστε να ανταποκριθεί στις ανάγκες των εργασιών που του/ης ανατέθηκαν;',
			'st3' => 'Ο/Η ασκούμενος/η είχε πρακτική κατάρτιση στο αντικείμενο άσκησής του;',
			'st4' => 'Ο/Η ασκούμενος/η ήταν συνεπής στην τήρηση του ωραρίου',
			'st5' => 'Ο/Η ασκούμενος/η είχε τη δέουσα επαγγελματική συμπεριφορά;',
			'st6' => 'Ο/Η ασκούμενος/η ενσωματώθηκε ομαλά στο περιβάλλον εργασίας;',
			'st7' => 'Ο/Η ασκούμενος/η πήρε πρωτοβουλίες στην εργασία του;',
			'st8' => 'Ο/Η ασκούμενος/η απέδωσε σε επίπεδο ατομικής εργασίας;',
			'st9' => 'Ο/Η ασκούμενος/η απέδωσε σε επίπεδο ομαδικής εργασίας;',
			'st10' => 'Θα συστήνατε το φοιτητή/τρια για ανάλογη εργασία σε άλλο φορέα;',
			'comments' => 'Γενικές Παρατηρήσεις-Σχόλια',
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
		
		$criteria->compare('in1',$this->in1);
		$criteria->compare('in2',$this->in2);
		$criteria->compare('in3',$this->in3);
		$criteria->compare('in4',$this->in4);
		$criteria->compare('in5',$this->in5);
		$criteria->compare('in6',$this->in6);
		$criteria->compare('in7',$this->in7);
		$criteria->compare('in8',$this->in8);
		$criteria->compare('st1',$this->st1);
		$criteria->compare('st2',$this->st2);
		$criteria->compare('st3',$this->st3);
		$criteria->compare('st4',$this->st4);
		$criteria->compare('st5',$this->st5);
		$criteria->compare('st6',$this->st6);
		$criteria->compare('st7',$this->st7);
		$criteria->compare('st8',$this->st8);
		$criteria->compare('st9',$this->st9);
		$criteria->compare('st10',$this->st10);
		$criteria->compare('comments',$this->comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return QuestionnaireCompany the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
