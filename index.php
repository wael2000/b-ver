<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<H1>Version B</H1>
<img alt="b-ver" src="b-abtesting.png">
<div>
<?php
 echo "My Pod IP is : ".$_SERVER['SERVER_ADDR'] ;
?>
</div>

<?
echo("<p>Search results for query: " .
    $_GET['query'] . ".</p>");
?>
<?
echo("<p>Search results for query: " .
    htmlspecialchars($_GET['query']) . ".</p>");
?>
<?php
if (isset($_GET['query']))
{
  echo '<p>Search results for query: ',
      htmlspecialchars($_GET['query'], ENT_QUOTES), '.</p>';
}
?>