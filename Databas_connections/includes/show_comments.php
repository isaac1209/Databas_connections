<?php

$myArray = $Obj->get_results();
$count = 0;
while ($row=$myArray->fetch_assoc()) {
$count=$row["id"];
    echo "<form method='post' ><div id='print_id'> ";

    echo $row["comment"] . "<br><br>";

    echo "Skrivet av " . $row["customer_name"]  . "<br><br>";

    echo "Publicerad " . $row["date"]  . "<input type='hidden' name='id'  value='$count'  >
            <input type='submit' name='button_delete' id='button_delete' value='Delete'>";
    echo " </div></form> ";
    $count++;
    print "<hr>";
    echo "<br>";

}

if (isset($_POST['id'])) {
    $button_id = $_POST['id'];
    $Obj->delete($button_id);
    header("Location:index.php");
}
