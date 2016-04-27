<?php

/**
 * Description of SSOcontroller
 *
 * @author theoth
 */
class SSOController extends Controller {

    public function actionLogin() {

//echo Yii::app()->basePath . "/views/site/CAS/*.php";
        die();
        $this->render('login');
    }

    public function actionHome() {
        include(Yii::app()->basePath . '/views/sso/CAS/Client.php');

        foreach (glob(Yii::app()->basePath . "/views/sso/CAS/*.php") as $filename) {
            echo $filename;
            include $filename;
        }
        $this->render('home');
    }

}
