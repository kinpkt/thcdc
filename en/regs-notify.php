<?php
$email = $_GET['email'];
$user = $_GET['dsc'];
$wca = $_GET['wcaid'];
$wcaid_regex = "/20[0-1][0-9][A-Z][A-Z][A-Z][A-Z][0-9][0-9]|N\/A/";
define('LINE_API',"https://notify-api.line.me/api/notify");
$token = "7Yke71FKdoviRLClzft1SlnNdtMgsm1PlGI0wn0nCY0";
function notify_message($message,$token)
{
      $queryData = array('message' => $message);
      $queryData = http_build_query($queryData,'','&');
      $headerOptions = array(
                  'http'=>array(
                  'method'=>'POST',
                  'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                        ."Authorization: Bearer ".$token."\r\n"
                        ."Content-Length: ".strlen($queryData)."\r\n",
                  'content' => $queryData
            ),
      );
      $context = stream_context_create($headerOptions);
      $result = file_get_contents(LINE_API,FALSE,$context);
      $res = json_decode($result);
      return $res;
}
if(isset($_GET['email']) & isset($_GET['dsc']) & isset($_GET['wcaid']) & (preg_match($wcaid_regex, $wca) == 1)) 
{ 
      notify_message("\n Email : $email \n Discord Username : $user \n WCA ID : $wca",$token);
}
else
{
      echo("<script>alert('Invalid WCA ID input, please try again.')</script>");
      sleep(2);
      header("location: register.php?compid=tdb2021");
} 
?>