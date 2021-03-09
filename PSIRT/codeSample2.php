The following code is used to authenticate and establish a session for the provided user. When the login succeeds,
the user is forwarded to authenticated content that validates the established session; otherwise the user is
forwarded to an error message. Identify any existing vulnerabilities.

<?php
  if(isset($_POST['username']))
  {
    $user_id = 0;
    
    $query = "SELECT user_id,usergroup FROM ".$config['db']['pre']."users WHERE
    username='" . $_POST['username'] . "' AND password='"
    .md5($_POST['password']) . "' AND status = '1' LIMIT 1";
    
    $query_result = mysql_query($query);

    while ($info = mysql_fetch_array($query_result))
    {
      $user_id = $info['user_id'];
      $usergroup = $info['usergroup'];
    }

    if($user_id)
    {
      session_start();
      $_SESSION['kbuser']['id'] = $info['user_id'];
      $_SESSION['kbuser']['usergroup'] = $usergroup;
      header("Location: authenticated_page.php");
    }
  }
  
  header("Location: login_error.php");
?>
