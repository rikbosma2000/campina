<?php
$query = mysql_query("SELECT id, name, location, amountRequested FROM     fundable");

while ($temp = mysql_fetch_array($query)) {
    echo "<div class='widgetLoan'>";
    echo "<div class='title'><h6>".$temp['name']."</h6><span class='widgetLoanCat'>Category</span>";
    echo "<div class='num'><a href='#' class='blueNum'>".$temp['amountRequested']."</a></div>";
    echo "</div>";
}
?>

<?php
$query = mysql_query("SELECT id, name, location, amountRequested FROM     fundable");

while ($temp = mysql_fetch_array($query)) {
    echo "<div class='widgetLoan'>";
    echo "<div class='title'><h6>".$temp['name']."</h6><span class='widgetLoanCat'>Category</span></div>";
    echo "<div class='num'><a href='#' class='blueNum'>".$temp['amountRequested']."</a></div>";
    echo "</div>";
}
?>
