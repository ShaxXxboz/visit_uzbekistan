<?php/** * Created by PhpStorm. * User: shaxxxboz * Date: 11/14/17 * Time: 12:31 PM */namespace app\models\auth;use yii\base\Model;use Yii;use app\models\User;class Login extends Model{    public $login;    public $password;    public function rules()    {        return [            [['login', 'password'], 'required'],            ['password', 'validatePassword']//собственная функция валидации пароля        ];    }    public function validatePassword($password, $param)//Если нет ошибок в валидации    {        if (!$this->hasErrors()) {            $user = $this->getUser(); //получаем пользователя*******            if (!$user || !(Yii::$app->security->validatePassword($this->password, $user->password))) //Если не получен юзер и пароль не валидирован в модели юзер                $this->addError($password, "Email or login is incorrect");        }    }    public function getUser()    {        return User::find()->where(['login' => $this->login])->one();//********отсюда    }}