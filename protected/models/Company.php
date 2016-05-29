<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $id
 * @property string $brand
 * @property string $description
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Users $user
 * @property InternshipPosition[] $internshipPositions
 */
class Company extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'company';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('brand, description, user_id,afm,tk,identity_number,doy', 'required'),
            array('user_id,tk', 'numerical', 'integerOnly' => true),
            array('brand,doy,address,city', 'length', 'max' => 45),
            array('brand', 'unique'),
            array('afm,identity_number', 'length', 'max' => 15),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, brand, description, user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
            'internshipPositions' => array(self::HAS_MANY, 'InternshipPosition', 'company_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'brand' => 'Brand',
            'description' => 'Περιγραφή',
            'user_id' => 'ID Χρήστη',
            'afm' => 'ΑΦΜ',
            'doy' => 'ΔΟΥ',
            'tk' => 'Τ.Κ.',
            'identity_number' => 'Αριθμός Α.Τ.',
            'address' => 'Διεύθυνση',
            'city' => 'Πόλη'
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
        $criteria->compare('brand', $this->brand, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('afm', $this->afm);
        $criteria->compare('tk', $this->tk);
        $criteria->compare('identity_number', $this->identity_number);
        $criteria->compare('doy', $this->doy);
        $criteria->compare('address', $this->address);
        $criteria->compare('city', $this->city);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Company the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getBrandName() {
        //echo $a==1 ? ($b==2 'a' : 'b') : 'c';
        return $this->brand;
    }
    
    public function getBothnamesurname() {
        //echo $a==1 ? ($b==2 'a' : 'b') : 'c';
        return $this->user->last_name . ' ' . $this->user->first_name;
    }

    public static function getList() {


        return CHtml::listData(self::model()->findAll(), 'id', 'brandName');
    }

}
