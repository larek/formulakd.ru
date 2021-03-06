<?
namespace app\controllers;

use \yii\web\Controller;
use \yii\imagine\Image;

class UploadController extends Controller{

    public function beforeAction($action)
    {
        // ...set `$this->enableCsrfValidation` here based on some conditions...
        // call parent method that will check CSRF if such property is true.
        if ($action->id === 'resize') {
            # code...
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

	public function actionResize(){
	 header("Access-Control-Allow-Origin:*"); 
       echo $this->uploadFiles($_FILES);
    }

    //move uploaded file in local dir and return data of new names
    protected function uploadFiles($FILES){
      if($FILES['image']['name']!=""){
              $errors='';
              $file_name = $FILES['image']['name'];
              $file_size = $FILES['image']['size'];
              $file_tmp = $FILES['image']['tmp_name'];
              $file_ext = pathinfo($FILES['image']['name'])['extension'];
              $file_new_name = md5($file_name)."_".time().".".$file_ext; 

              $expensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
              
              if(in_array($file_ext,$expensions) === false){
                 $errors="extension not allowed, please choose a JPEG or PNG file.";
              }
              
              if($file_size > 10485760) {
                 $errors='File size must be excately 2 MB';
              }
              
              if(empty($errors)==true) {
                 move_uploaded_file($file_tmp,"uploads/".$file_new_name);
                 $mode = \Imagine\Image\ManipulatorInterface::THUMBNAIL_INSET; //THUMBNAIL_INSET or THUMBNAIL_OUTBOUND
                  $img = $_SERVER['DOCUMENT_ROOT']."/uploads/".$file_new_name;

                  Image::thumbnail($img, 300, 200, $mode)->save('uploads/300x200/'. $file_new_name, ['quality' => 90]);
                  Image::thumbnail($img, 730, 292, $mode)->save('uploads/730x292/'. $file_new_name, ['quality' => 90]);
                  Image::thumbnail($img, 350, 292, $mode)->save('uploads/350x292/'. $file_new_name, ['quality' => 90]);
                  echo json_encode(['success' => true, 'src' => $file_new_name]);
              }else{
                 echo json_encode(['error' => true, 'errorText' => $errors]);
              }

        
      }
    }

}
