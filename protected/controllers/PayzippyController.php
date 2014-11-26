<?php

class PayzippyController extends Controller
{

    public function actionIndex(){
        $model = new PayzippyForm;
        
        $this->render('form',array('model'=>$model));
    }
    
    public function actionStatus(){
        #here the process after transaction success
        echo $_GET['transaction_response_message'];
    }
    
    public function actionMethod(){
        if(isset($_POST['PayzippyForm'])){
            if($_POST['PayzippyForm']['ui_mode']==='REDIRECT'){
                $this->render('redirect');
            }
            elseif($_POST['PayzippyForm']['ui_mode']==='IFRAME'){
                $this->render('iframe');
            }
            
        }
        
    }


//    public function actionIframe(){
//         $model = new PayzippyForm;
//         $this->render('iframe',array('model'=>$model));
//        
//    }

}

?>
