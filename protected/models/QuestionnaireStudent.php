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
			
			array('in1, in2, in3, in4, in5, in6, in7, in8, in9, in10, in11, in12, in13, in14, in15, in16, in17, in18, in19, in20', 'numerical', 'integerOnly'=>true),
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
			'internshipPositions' => array(self::HAS_MANY, 'InternshipPosition', 'questionnnaire_student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			
			'in1' => 'Το αντικείμενο της Πρακτικής Άσκησης ήταν ανάλογο των σπουδών σας;',
			'in2' => 'Αξιοποιήσατε άμεσα ή έμμεσα τις γνώσεις που είχατε αποκτήσει κατά τη διάρκεια των σπουδών σας;',
			'in3' => 'Πιστεύετε ότι οι θεωρητικές γνώσεις που λάβατε από το Τμήμα σας ήταν επαρκείς ώστε να αντεπεξέλθετε στις απαιτήσεις της εργασίας σας;',
			'in4' => 'Πιστεύετε ότι το αντικείμενο της Πρακτικής σας Άσκησης στο φορέα υποδοχής μπορεί να αποτελέσει μελλοντικά την απασχόλησή σας;',
			'in5' => 'Πιστεύετε ότι το αντικείμενο της Πρακτικής σας Άσκησης στο φορέα υποδοχής μπορεί να αποτελέσει μελλοντικά την απασχόλησή σας;',
			'in6' => 'Σε γενικές γραμμές είστε ικανοποιημένος/η από τη συνεργασία σας με τον/την υπεύθυνο/η καθηγητή/τρια;',
			'in7' => 'Πόσο ικανοποιητική θεωρείτε τη βοήθεια και την ενημέρωση που σας παρείχε το γραφείο πρακτικής άσκησης του τμήματος;',
			'in8' => 'Σας βοήθησε ο/η υπεύθυνος/η καθηγητής/τρια στα θέματα που αφορούσαν στην πρακτική άσκηση ώστε να είστε έτοιμοι στο ξεκίνημα της;',
			'in9' => 'Σας βοήθησε ο/η υπεύθυνος/η καθηγητής/τρια στην αρχική σας επαφή με το φορέα;',
			'in10' => 'Πόσο ικανοποιητική ήταν η συνεργασία σας με τον υπεύθυνο καθηγητή της πρακτικής άσκησης;',
			'in11' => 'Υπήρξε ενημέρωση για τη λειτουργία του φορέα της πρακτικής άσκησης;',
			'in12' => 'Πόσο καλή ήταν η συνεργασία σας με τον υπεύθυνο του φορέα;',
			'in13' => 'Ήταν το αντικείμενο εργασίας σας σαφές και καθορισμένο;',
			'in14' => 'Είστε ικανοποιημένος από το φορέα στον όποιο απασχοληθήκατε;',
			'in15' => 'Είχατε δυσκολία να προσαρμοστείτε στο περιβάλλον εργασίας του φορέα υποδοχής;',
			'in16' => 'Κατά τη διάρκεια της Πρακτικής  Άσκησης στο φορέα υποδοχής σας δόθηκε η δυνατότητα να αυτενεργήσετε;',
			'in17' => 'Κατά τη διάρκεια της Πρακτικής  Άσκησης στο φορέα είχατε τη δυνατότητα να ολοκληρώσετε (από την αρχή ως το τέλος) ένα μέρος δουλειάς που σας ανατέθηκε;',
			'in18' => 'Κατά τη διάρκεια της Πρακτικής  Άσκησης στο φορέα υποδοχής συνεργαστήκατε με άλλους υπαλλήλους του φορέα;',
			'in19' => 'Είστε ικανοποιημένος από τη συνεργασία σας με τους υπόλοιπους συναδέλφους του φορέα υποδοχής;',
			'in20' => 'Προτείνετε να συμπεριληφθεί σε βάση δεδομένων ο φορέας υποδοχής σας για μελλοντική του συνεργασία με το ίδρυμα στο πλαίσιο της Πρακτικής Άσκησης;',
			'in21' => 'Ποια ήταν τα κύρια οφέλη που αποκομίσατε μετά το πέρας της πρακτικής σας άσκησης;',
			'in22' => 'Πώς θα χαρακτηρίζατε τη συμμετοχή και το ρόλο σας κατά τη διάρκεια της πρακτικής σας άσκησης;',
			'in23' => 'Αναφέρετε προτάσεις για την αποτελεσματικότερη διεξαγωγή της πρακτικής άσκησης.',
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
