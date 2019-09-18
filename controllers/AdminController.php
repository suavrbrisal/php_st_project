<?php

class AdminController {
    
    public static function actionEnter(){
        if (isset($_POST['buttonenter'])){
            $email=trim($_POST['inputEmail']);
            $password=md5(trim($_POST['inputPassword']));
            
            $texterror="";
            $result=ValidateUser::Validate($password, $email, $texterror);
            
            if($result){
                $_SESSION['email']=$email;
                $texterror="Вы успешно вошли";
                
            }
        } else 
                $texterror="Неверный контекст входа";
            header("Location: /adminsection");
            die();
        }
        
      public static function actionSection()  {
          if(ValidateUSer::isValidate())
              AdminView::SectionAdmin();
          else {
              header("Location: /admin/Index");
              die();
          }
      }
      
      public static function actionIndex(){
          AdminView::EnterForm();
      }
      
      public static function actionSectionComand($comand){
            if (!ValidateUser::invalidate())
            header("Location: /admin/index");

            switch ($comand) {
            case "getsections":
            echo json_encode(Admin::getArraySection());
                break;
            case "delsection":	
                $id = intval($_POST["id"]);
                echo Admin::delSection($id); 
                break;
            case "addsection":		
            $obj = json_decode($_POST["obj" ]);
            $newld = Admin::addsection($obj->name, $obj->sort, $obj->status);
            echo json_encode(["id"=>$newld,"result"=>"Ok"]);
            break;
            case "redact":		
            $obj = json_decode($_POST["obj"]);
            //$newld - Admin::addsection($obj->name, $obj->sort, $obj->status);
            echo Admin::redactSection($obj);
            break;
            default;
                break;

                }

            }

        }