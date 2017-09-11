<?php
  include 'db_connect.php';
  session_start();

  if(isset($_POST['submit_feedback'])){
    if(isset($_POST['app_name']) && !empty($_POST['app_name']) || isset($_POST['feedback']) && !empty($_POST['feedback'])){
      $fd_name=$_POST['app_name'];
      $feedback=$_POST['feedback'];
      $date=time();
      $current_date=date('20y-m-d',$date);

      $sql2="INSERT INTO feedback(name,feedback,post_date) VALUES('$fd_name','$feedback','$current_date')";
      $var2=mysql_query($sql2);
      if($var2){
        $_SESSION['success']="Feedback successfully sent.";
        header('location:feedback.php');
      }
      else{
        $_SESSION['comment']="Feedback hasn't been sent; please try again.";
        header('location:feedback.php');
      }
    }
    else{
      $_SESSION['comment']="You are not a valid applicant.";
      header('location:feedback.php');
    }
  }
  else{
    $_SESSION['comment']="To give your feedback fill require fields.";
    header('location:feedback.php');
  }
?>
