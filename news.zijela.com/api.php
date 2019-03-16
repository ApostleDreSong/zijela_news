<?php
session_start(); 
ob_start(); 
require ('config.php');
//SIGN UP API
if (isset($_POST['submit_reg'])):

//remember to avoid dual registration
    $sql4 = 'SELECT * FROM marketer where email="'.$_POST['email'].'"';

    if (mysqli_query($dbc, $sql4)){
        $stmt = mysqli_query($dbc, $sql4);
        if (mysqli_num_rows($stmt)>0){
            echo 'email already exists';
            ob_end_clean();
            header ('Refresh:0; url=signup.php');
            exit();
        }else{
            echo 'you are looking fresh!';  
        }
    }
    
    //register if email does not exist
    $query  = 'INSERT INTO marketer (`phone number`, `first name`, `last name`, `email`, `password`)
    VALUES (?,?,?,?,?)';
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt,'sssss', $_POST['phonenumber'],$_POST['firstname'],$_POST['lastname'],$_POST['email'],password_hash($_POST['password'], PASSWORD_DEFAULT));
     if (mysqli_stmt_execute($stmt)){
         echo "Congratulations! Your account has been created";
            if (isset($_POST['refId'])){
            $sql5 = 'SELECT `referral points` FROM marketer where id='.$_POST['refId'];
            echo $sql5;
            if (mysqli_query($dbc, $sql5)){
                $result5 = mysqli_query($dbc, $sql5);
                $row5 = mysqli_fetch_array($result5);
                $refPoint = $row5['referral points'];
                $refPoint++;
        
                $query5  = 'UPDATE marketer set `referral points`='.$refPoint.'+1 WHERE id='.$_POST['refId'];
                $stmt = mysqli_query($dbc, $query5);
                }else{

                }

    }
            
    } else {
        echo "There was an error in processing your registration, please try aain later";
    }
    mysqli_stmt_close($stmt);
    
            //Insert referral ID
            $sql = 'SELECT * FROM marketer where email="'.$_POST['email'].'"';
                if(mysqli_query($dbc, $sql)){
                    $result = mysqli_query($dbc, $sql);
                    $row = mysqli_fetch_array($result); 
                    $referralUrl = 'news.zijela.com/'.$row['id'];
                    $_SESSION['loggedIn']="yes";
                    $_SESSION['loggedInEmail']=$row['email'];
                    $_SESSION['user']=$row['first name'];
                    $_SESSION['sessionReadPoints']=0;
                    $_SESSION['totalReadPoints']= $row['totalReadPoints'];
                    $_SESSION['referralPoints']= $row['referral points'];
                    $sessionCount=1;
                }
                    //UPDATE LOGIN
                $sql1 = 'UPDATE marketer SET sessionReadPoints=0,sessionCount='.$sessionCount.',referralUrl="'.$referralUrl.'" WHERE email="'.$_POST['email'].'"';

                if (mysqli_query($dbc, $sql1)){
                    echo "Congratulations! You can now start making money";
                ob_end_clean();

                header('Refresh:0; url=index.php');
               exit();
                }else{
                    echo "Sorry! we could not set you up for referral, contact us through any of our channels";
                 ob_end_clean();
                 header('Refresh:0; url=index.php');
                 exit();
                }
                
endif;

//LOGIN API
if (isset($_POST['login'])):
    $sql = 'SELECT * FROM marketer where email="'.$_POST['email'].'"';
    $result = mysqli_query($dbc, $sql);
    $row = mysqli_fetch_array($result);  
    $sessionCount = $row['sessionCount'];
    $sessionCount++;

    if (password_verify($_POST['password'],$row['password'])) {
        $_SESSION['loggedIn']="yes";
        $_SESSION['loggedInEmail']=$row['email'];
        $_SESSION['user']=$row['first name'];
        $_SESSION['sessionReadPoints']=0;
        $_SESSION['totalReadPoints']= (int)$row['totalReadPoints'];
        $_SESSION['referralPoints']= (int)$row['referral points'];
        
        //UPDATE LOGIN
        $sql1 = 'UPDATE marketer SET sessionReadPoints=0,sessionCount='.$sessionCount.' WHERE email="'.$_POST['email'].'"';
        if (mysqli_query($dbc, $sql1)){
            ob_end_clean();
            header ('Refresh:0; url=index.php');
            exit();
        }
    }else{
        echo 'password incorrect';
         ob_end_clean();
         header ('Refresh:0; url=login.php');
         exit();
    }
endif;

//UPDATE DB
if (isset($_POST['readupdate'])):
    $sql1 = 'SELECT `sessionReadPoints`,`totalReadPoints` FROM marketer where email="'.$_SESSION['loggedInEmail'].'"';
    $result1 = mysqli_query($dbc, $sql1);
    $row1 = mysqli_fetch_array($result1);  
    $session=$row1['sessionReadPoints'];
    $total=$row1['totalReadPoints'];
    $session++;
    $total++;
endif;
    $sql = 'UPDATE marketer SET sessionReadPoints='.$session.',totalReadPoints='.$total.' WHERE email="'.$_SESSION['loggedInEmail'].'"';
    if (mysqli_query($dbc, $sql)) {
            $success= array(

            "updated"=>"true"
            
            );
        echo json_encode ($success);
    }

ob_end_flush();


