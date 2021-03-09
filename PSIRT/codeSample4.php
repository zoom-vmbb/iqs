The follow code is utilized to write a configuration file for the application. This configuration file is included in
every page of the application to provide information needed to connect to the database. Identify any existing vulnerabilities.

<?php
  if(isset($_GET['save_config']))
  {
    // Content that will be written to the config file
    $content = "<?php\n";
    // Interate each POST parameter and write the config file
    
    foreach($_POST as $param_name => $value) {
      $content.= "\$config['db']['".$param_name."'] = '".addslashes($value)."';\n";
    }
    
    $content.= "?>";

    // Open the WEB_ROOT/includes/config.php for writing
    $handle = fopen('../includes/config.php', 'w');

    // Write the config file
    fwrite($handle, $content);

    // Close the file
    fclose($handle);
    header("Location: template_settings.php");
    exit;
  }
?>
