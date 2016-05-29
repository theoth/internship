<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public static function typeUser() {
        $u = Users::model()->findByPk(Yii::app()->user->id);
        return $u->type;
    }

    public static function isUserStudent() {
        if (self::typeUser() == 0)
            return true;
        else
            return false;
    }

    public static function isUserProfessor() {
        if (self::typeUser() == 1)
            return true;
        else
            return false;
    }

    public static function isUserCompany() {
        if (self::typeUser() == 2)
            return true;
        else
            return false;
    }

     public static function isUserAdmin() {
        if (self::typeUser() == 3 || self::typeUser()>=10)
            return true;
        else
            return false;
    }
}
