<?php
$value=$_POST['flyingFrom'];
$val2=$_POST['flyingTo'];
$val3=$_POST['date'];
echo "<h1><marquee onmouseover='this.stop()' onmouseout='this.start()'>Kingfisher Airlines</marquee></h1>";
echo "<h2>The Flight From </h2> <h3><i>".$value."</i></h3><h2>To</h2>  <h3><i>".$val2."</i></h3><br>";
echo "<h3>Is Reschedule On </h3>"."<h4>".$val3."</h4>";

?>