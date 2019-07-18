<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionAll()
    {
        return $this->render('all');
    }

    /**
     * Displays homepage.
     *D
     * @return mixed
     */
    public function actionDoor()
    {
        return $this->render('door');
    }


    /**
     * Displays homepage.
     *D
     * @return mixed
     */
    public function actionLive()
    {
        return $this->render('live');
    }

    /**
     * Displays homepage.
     *D
     * @return mixed
     */
    public function actionMedicinal()
    {
        return $this->render('medicinal');
    }

    /**
     * Displays homepage.
     *D
     * @return mixed
     */
    public function actionEquipment()
    {
        return $this->render('equipment');
    }

    /**
     * Displays homepage.
     *D
     * @return mixed
     */
    public function actionCustom()
    {
        return $this->render('custom');
    }

    /**
     * Displays homepage.
     *D
     * @return mixed
     */
    public function actionExport()
    {
        return $this->render('export');
    }
}
