The following code is used to output the search results of a user-supplied query. Identify any existing vulnerabilities.

<?php
// Get the term we are searching for from the user
$search_term = $_GET['query'];
?>

<html>
<head>
<title>Search Results for <?php echo $search_term; ?></title>
</head>
<body>
  Here are your search results:
  <?php get_search_results($search_term); ?>
</body>
</html>
