<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Pages;
use app\models\Slider;
use app\modules\admin\models\Projects;
use \yii\imagine\Image;


use harrytang\fineuploader\FineuploaderHandler;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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

    public function actionResizeAllImages(){
        $mode = \Imagine\Image\ManipulatorInterface::THUMBNAIL_INSET;
        $model = Projects::find()->all();
        foreach($model as $item){
            if($item->photo2 !== ""){
            $img = $_SERVER['DOCUMENT_ROOT']."/uploads/".$item->photo2;
            Image::thumbnail($img, 730, 292, $mode)->save('uploads/730x292/'. $item->photo2, ['quality' => 90]);
            Image::thumbnail($img, 350, 292, $mode)->save('uploads/350x292/'. $item->photo2, ['quality' => 90]);
            echo $item->photo2."<br>"; //730x292px
            }
            if($item->photo3 !== ""){
            $img = $_SERVER['DOCUMENT_ROOT']."/uploads/".$item->photo3;
            Image::thumbnail($img, 730, 292, $mode)->save('uploads/730x292/'. $item->photo3, ['quality' => 90]);
            Image::thumbnail($img, 350, 292, $mode)->save('uploads/350x292/'. $item->photo3, ['quality' => 90]);
            echo $item->photo3."<br>"; //350x292px
            }
        }
    }

    public function actionServices(){
        $this->layout = 'main-2017';
        return $this->render('services');
    }

    public function action2017(){
        $this->layout = 'main-2017';
        
        $model = Projects::find()->limit(8)->all();
        return $this->render('main-2017', [
            'model' => $model
        ]);
    }

    public function actionCallbackPage(){
        $this->layout = 'main-2017';
        return $this->render('callback-page');
    }
    
    public function actionProjects(){
        
        $model = Projects::find()->all();

        $this->layout = 'main-2017';
        return $this->render('projects', [
            'model' => $model
        ]);
    }

    public function actionProjectSingle($id){
        $model = Projects::findOne($id);
        $this->layout = 'main-2017';
        return $this->render('project-single',[
            'model' => $model
        ]);
    }

    public function actionAbout2(){
        $this->layout = 'main-2017';
        return $this->render('about-2');
    }

    public function actionNews(){
      return $this->render('news');
    }

    public function actionIndex()
    {
        $guid = Yii::$app->request->get('guid');
        $model_child = Slider::find()->orderBy(['dateCreated'=>SORT_DESC])->all();

        return $this->render('index',[
            'model_child' => $model_child,
            'guid' => $guid,
        ]);
    }

    public function actionSimplePage(){
        return $this->redirect(['site/index']);
        //return $this->render('simple-page');
    }

    public function actionLogin()
    {
        $this->layout = 'login';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        $uploader = new FineuploaderHandler();
        $uploader->allowedExtensions = ['jpeg', 'jpg', 'png', 'bmp', 'gif']; // all files types allowed by default
        $uploader->sizeLimit = YOUR_PHP_MaxFileSizeLimit;
        $uploader->inputName = "qqfile"; // matches Fine Uploader's default inputName value by default
        //$uploader->chunksFolder = "chunks";
        if (Yii::$app->request->isPost) {
            // upload file
            $result = $uploader->handleUpload("/upload");
            if (isset($result['success']) && $result['success'] == true) {
                // do something more
            }
            echo json_encode($result);
        }
        return $this->render('about');
    }

    public function actionView(){
        $guid = Yii::$app->request->get('guid');
        $model = Pages::find()->andWhere(['guid' => $guid])->one();

        if($model->seo_title==""){ $title = $model->title;}else{$title = $model->seo_title;}

        $page = Pages::find()->where(['guid' => $guid])->one();
        if($page->parent_id == 0){
            $model_child = Pages::find()->where(['parent_id' => $page->id])->all();
        }
        else{
            $model_child = Pages::find()->where(['parent_id' => $page->parent_id])->all();
        }

        if(count($model_child)>0){$divTemplate="col-xs-12";}else{$divTemplate="col-xs-12";}

        if($model->type==""){
            $viewTemplate = "view";
        }else{
            $viewTemplate = $model->type;
        }

        return $this->render($viewTemplate, [
            'model' => $model,
            'title' => $title,
            'model_child' => $model_child,
            'divTemplate' => $divTemplate,
            'guid' => $guid,
            ]);
    }

    public function actionCallback(){

            echo Yii::$app->mail->compose('layouts/callback',['name' => $_GET['name'], 'company' => $_GET['company'], 'phone' => $_GET['phone'], 'email' => $_GET['email'], 'subject' => $_GET['subject'], 'message' => $_GET['message'], 'callbackType' => $_GET['callbackType']])
            ->setFrom(['saitom@yandex.ru' => 'formulakd.ru'])
            ->setTo(['t9101029991@gmail.com', 'info@formulakd.ru'])
            ->setSubject('Обратный звонок с сайта')
            //->setHtmlBody('Заказ - <a href="http://'.$_SERVER['SERVER_NAME'].$url.'">Ссылка на заказ</a>')
            ->send();

    }
}
