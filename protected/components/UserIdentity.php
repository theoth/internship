<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public $id;

   

    //gia aftomato login meta apo reset
    public function AutoAuthenticate($id = null) { //var_dump($id);
        //afta kataxwrountai se session opote an ginei kapoia allagi apo admin p.x. se permit price tha prepei na ginei logout kai ksana login
        $record = Users::model()->findByPk($id);  //User::model()->with('ExtraUserData')->findByPk($id); //kanonika den thelei aparaitita with alla den trexei aliws...?TODO
        if ($record->activated != 4)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else { //may TODO isws prepei na mprei kai session cookies stin vasi giati ean o xristis meta to telos tou timeout mpei ksana (enw exei idi mpei o idios xristis apo allo mixanima) tha einai energoi kai oi 2!
            $record->activated = 1;
            $record->save();
            $this->id = $record->id;
            $this->errorCode = self::ERROR_NONE;
        }
        //var_dump ($this->errorCode);
        //var_dump(Yii::app()->user);
        //var_dump($this);
    }

    public function authenticate() {
        /*
          $users=array(
          // username => password
          //'demo'=>'demo',
          'user1'=>'pass1',
          'admin'=>'admin',
          ); */


        $user = Users::model()->findByAttributes(array('username' => $this->username));


        if (!$user)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        elseif ($user->password !== $this->password)
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->errorCode = self::ERROR_NONE;
            $this->id = $user->id;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->id;
    }

}
