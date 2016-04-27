<?php

/**
 * This is the model class for table "questionnaire_professor".
 *
 * The followings are the available columns in table 'questionnaire_professor':
 * @property integer $id
 * @property integer $professor_id
 * @property integer $st1
 * @property integer $st2
 * @property integer $st3
 * @property integer $st4
 * @property integer $st5
 * @property string $st6
 * @property string $st7
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
 * @property string $in12
 * @property string $in13
 * @property string $in14
 * @property string $in15
 * @property string $in16
 * @property string $in17
 * @property string $comments
 *
 * The followings are the available model relations:
 * @property Professor $professor
 */
class QuestionnaireProfessor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'questionnaire_professor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('professor_id', 'required'),
			array('id, professor_id, st1, st2, st3, st4, st5, in1, in2, in3, in4, in5, in6, in7, in8, in9, in10, in11', 'numerical', 'integerOnly'=>true),
			array('st6, st7, in12, in13, in14, in15, in16, in17, comments', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, professor_id, st1, st2, st3, st4, st5, st6, st7, in1, in2, in3, in4, in5, in6, in7, in8, in9, in10, in11, in12, in13, in14, in15, in16, in17, comments', 'safe', 'on'=>'search'),
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
			'professor' => array(self::BELONGS_TO, 'Professor', 'professor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'professor_id' => 'Professor',
			'st1' => 'Ο φοιτητής/τρια ανταποκρίθηκε στις υποχρεώσεις που πηγάζουν από τη συμμετοχή του στο πρόγραμμα της Πρακτικής Άσκησης;',
			'st2' => 'Ο/Η φοιτητής/ρια ήταν ικανοποιημένος/η από την πρακτική του/της άσκηση;',
			'st3' => 'Σε γενικές γραμμές είστε ικανοποιημένος/η από την συνεργασία σας με τον/ην συγκεκριμένο φοιτητή/τρια;',
			'st4' => 'Πόσο ικανοποιητική κρίνετε την καθοδήγηση του ασκούμενου από τον επιβλέποντα του φορέα;',
			'st5' => 'Ο φορέας έμεινε ικανοποιημένος από την απόδοση του/ης ασκούμενου/νης;',
			'st6' => 'Πώς θα αξιολογούσατε τον/ην φοιτητή/τρια;',
			'st7' => 'Υπήρξε κάποιο πρόβλημα που αντιμετώπισε ο/η φοιτητής/τρια;',
			'in1' => 'Θεωρείτε το επίπεδο της Πρακτικής Άσκησης υψηλό;',
			'in2' => 'Πιστεύετε ότι η Πρακτική Άσκηση προσφέρει ανατροφοδότηση στο Τμήμα σας;',
			'in3' => 'Σε γενικές γραμμές είστε ικανοποιημένος/η από τον τρόπο υλοποίησης της Πρακτικής Άσκησης του τμήματος;',
			'in4' => 'Σε γενικές γραμμές είστε ικανοποιημένος/η από τη συνεργασία σας με τη γραμματεία Πρακτικής Άσκησης του Τμήματός  σας;',
			'in5' => 'Θεωρείτε ότι η Πρακτική Άσκηση ήταν σημαντική για το/η φοιτητή/ρια και θα τον/ην βοηθήσει στην εξεύρεση εργασίας στο μέλλον;',
			'in6' => 'Ήταν το αντικείμενο εργασίας των ασκούμενων σαφές και καθορισμένο;',
			'in7' => 'Θεωρείτε  τις συνθήκες εργασίας στους φορείς υποδοχής ικανοποιητικές;',
			'in8' => 'Το επίπεδο συνεργασίας με τους υπευθύνους των φορέων υποδοχής ήταν ικανοποιητικό;',
			'in9' => 'Σε γενικές γραμμές είστε ικανοποιημένος/η από τη συνεργασία σας με τους φορείς υποδοχής;',
			'in10' => 'Έχετε εποπτεύσει ασκούμενους άλλες φορές στα πλαίσια του Προγράμματος της Πρακτικής Άσκησης;',
			'in11' => 'Η Πρακτική Άσκηση πραγματοποιείται σε αντικείμενο των προσφερόμενων από το Τμήμα σας σπουδών;',
			'in12' => 'Παρακαλούμε διατυπώστε σχόλια - παρατηρήσεις και προτάσεις για το Γραφείο Πρακτικής Άσκησης του Ιδρύματος.',
			'in13' => 'Παρακαλούμε διατυπώστε σχόλια - παρατηρήσεις και προτάσεις για την Πρακτική Άσκηση του τμήματος και τη βελτίωσή της.',
			'in14' => 'Παρακαλούμε διατυπώστε σχόλια - παρατηρήσεις και προτάσεις για την Πρακτική Άσκηση του τμήματος και τη βελτίωσή της.',
			'in15' => 'Παρακαλούμε περιγράψτε πως καταρτίστηκε το πλάνο/πρόγραμμα της απασχόλησης των ασκούμενων φοιτητών/τριών.',
			'in16' => 'Παρακαλούμε διατυπώστε σχόλια και παρατηρήσεις για την εποπτεία της πρακτικής άσκησης.',
			'in17' => 'Παρακαλούμε αναφέρετε προτάσεις για τη βελτίωση της εποπτείας της πρακτικής άσκησης.',
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
		$criteria->compare('professor_id',$this->professor_id);
		$criteria->compare('st1',$this->st1);
		$criteria->compare('st2',$this->st2);
		$criteria->compare('st3',$this->st3);
		$criteria->compare('st4',$this->st4);
		$criteria->compare('st5',$this->st5);
		$criteria->compare('st6',$this->st6,true);
		$criteria->compare('st7',$this->st7,true);
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
		$criteria->compare('in12',$this->in12,true);
		$criteria->compare('in13',$this->in13,true);
		$criteria->compare('in14',$this->in14,true);
		$criteria->compare('in15',$this->in15,true);
		$criteria->compare('in16',$this->in16,true);
		$criteria->compare('in17',$this->in17,true);
		$criteria->compare('comments',$this->comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return QuestionnaireProfessor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
