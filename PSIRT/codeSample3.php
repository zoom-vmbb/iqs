The following changes were made to codeSample2 to mitigate issues the application was having with the
username o’brien. Identify any existing vulnerabilities.

<?php

function escape_input($input) {
return str_replace("'", "''", $input);
}

...

$query = "SELECT user_id,usergroup FROM ".$config['db']['pre']."users WHERE
username='" . escape_input($_POST['username']) . "' AND password='" .
escape_input(md5($_POST['password'])) . "' AND status = '1' LIMIT 1";

...

?>
