

<h3>DAUGINAME BET KOKIUS SKAICIUS</h3> 
<form action = "" method= "post">
    <input type= "text" name="n" value= "" placeholder="irasykite skaiciu"><br>
    <input type= "text" name="n2" value= "" placeholder="irasykite skaiciu"><br>
    <input type= "submit" name="act" value= "dauginti" >
</form>
<?php
if(isset($_POST['act']))
{
    $n = $_POST['n'];
    $n2 = $_POST['n2'];
    $add = $n*$n2;
    echo "Atsakymas : " . $add;
}
?>
