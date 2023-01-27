<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>таблица истинности</title>
    
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <?php
    $a1 = 0; $b1 = 0;
    $a2 = 0; $b2 = 1;
    $a3 = 1; $b3 = 0;
    $a4 = 1; $b4 = 1;
    ?>

<div class="divmain">
    <h2>Таблица истинности</h2>
    <table id="table1">
<tr class="trFirst">
    <td class="trFirst">A</td><td class="trFirst">B</td><td class="trFirst">!A</td><td class="trFirst">A || B</td><td class="trFirst">A && B</td><td class="trFirst">A xor B</td>
</tr>
<tr>
    <td class="trFirst">
    <?php echo $a1 ?>
    </td>
    <td class="trFirst">
    <?php echo $b1 ?>
    </td>
    <td>
    <?php echo !$a1 ?>
    </td>
    <td>
    <?php 
    echo ($a1 && $b1) ? 'true' : 'false';
    ?>

    </td>
    <td>
    <?php 
    if($a1 && $b1) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>
    <td>
    <?php 
    if($a1 xor $b1) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    <?php echo $a2 ?>
    </td>
    <td class="trFirst">
    <?php echo $b2 ?>
    </td>
    <td>
    <?php echo !$a2 ?>
    </td>
    <td>
    <?php 
    if($a2 || $b2) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>
    <td>
    <?php 
    if($a2 && $b2) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>
    <td>
    <?php 
    if($a2 xor $b2) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    <?php echo $a3 ?>
    </td>
    <td class="trFirst">
    <?php echo $b3 ?>
    </td>
    <td>
    <?php 
    if(!$a3) {
        echo '1';
    } else{
        echo '0';
    }
    ?>
    </td>
    <td>
    <?php 
    if($a3 || $b3) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>
    <td>
    <?php 
    if($a3 && $b3) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>
    <td>
    <?php 
    if($a3 xor $b3) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    <?php echo $a4 ?>
    </td>
    <td class="trFirst">
    <?php echo $b4 ?>
    </td>
    <td>
    <?php 
    if(!$a4) {
        echo '1';
    } else{
        echo '0';
    }
    ?>
    </td>
    <td>
    <?php 
    if($a4 || $b4) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>
    <td>
    <?php 
    if($a4 && $b4) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>
    <td>
    <?php 
    if($a3 xor $b3) {
        echo 'true';
    } else{
        echo 'false';
    }
    ?>
    </td>
</tr>
    </table>


</div>
<?php
$x1 = $y1 = true; $x2 = $y2 = false; $x3 = $y3 = 1; $x4 = $y4 = 0; $x5 = $y5 = -1; $x6 = $y6 = "1"; $x7 = $y7 = null; $x8 = $y8 = "php";
?>
<div class="divmain">
    <h2>Гибкое сравнение в PHP ( == )</h2>
    <table id="table2">
<tr class="trFirst">
    <td class="trFirst"></td>
    <td class="trFirst">true</td>
    <td class="trFirst">false</td>
    <td class="trFirst">1</td>
    <td class="trFirst">0</td>
    <td class="trFirst">-1</td>
    <td class="trFirst">"1"</td>
    <td class="trFirst">null</td>
    <td class="trFirst">"php"</td>
</tr>
<tr>
    <td class="trFirst">
    true
    </td>
    <td>
    <?php if ($y1 == $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 == $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 == $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 == $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 == $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 == $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 == $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 == $x1) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    false
    </td>
    <td>
    <?php if ($y1 == $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 == $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 == $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 == $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 == $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 == $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 == $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 == $x2) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    1
    </td>
    <td>
    <?php if ($y1 == $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 == $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 == $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 == $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 == $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 == $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 == $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 == $x3) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    0
    </td>
    <td>
    <?php if ($y1 == $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 == $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 == $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 == $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 == $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 == $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 == $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 == $x4) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    -1
    </td>
    <td>
    <?php if ($y1 == $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 == $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 == $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 == $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 == $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 == $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 == $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 == $x5) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    "1"
    </td>
    <td>
    <?php if ($y1 == $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 == $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 == $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 == $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 == $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 == $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 == $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 == $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
</tr>
<tr>
    <td class="trFirst">
    null
    </td>
    <td>
    <?php if ($y1 == $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 == $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 == $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 == $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 == $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 == $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 == $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 == $x7) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    "php"
    </td>
    <td>
    <?php if ($y1 == $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 == $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 == $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 == $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 == $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 == $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 == $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 == $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
</tr>
    </table>
</div>

</div>
<?php
$x1 = $y1 = true; $x2 = $y2 = false; $x3 = $y3 = 1; $x4 = $y4 = 0; $x5 = $y5 = -1; $x6 = $y6 = "1"; $x7 = $y7 = null; $x8 = $y8 = "php";
?>
<div class="divmain">
    <h2>Жёсткое сравнение в PHP ( === )</h2>
    <table id="table2">
<tr class="trFirst">
    <td class="trFirst"></td>
    <td class="trFirst">true</td>
    <td class="trFirst">false</td>
    <td class="trFirst">1</td>
    <td class="trFirst">0</td>
    <td class="trFirst">-1</td>
    <td class="trFirst">"1"</td>
    <td class="trFirst">null</td>
    <td class="trFirst">"php"</td>
</tr>
<tr>
    <td class="trFirst">
    true
    </td>
    <td>
    <?php if ($y1 === $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 === $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 === $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 === $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 === $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 === $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 === $x1) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 === $x1) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    false
    </td>
    <td>
    <?php if ($y1 === $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 === $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 === $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 === $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 === $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 === $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 === $x2) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 === $x2) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    1
    </td>
    <td>
    <?php if ($y1 === $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 === $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 === $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 === $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 === $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 === $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 === $x3) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 === $x3) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    0
    </td>
    <td>
    <?php if ($y1 === $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 === $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 === $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 === $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 === $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 === $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 === $x4) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 === $x4) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    -1
    </td>
    <td>
    <?php if ($y1 === $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 === $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 === $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 === $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 === $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 === $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 === $x5) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 === $x5) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    "1"
    </td>
    <td>
    <?php if ($y1 === $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 === $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 === $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 === $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 === $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 === $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 === $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 === $x6) { echo 'true';} else { echo 'false'; }?>
    </td>
</tr>
<tr>
    <td class="trFirst">
    null
    </td>
    <td>
    <?php if ($y1 === $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 === $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 === $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 === $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 === $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 === $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 === $x7) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 === $x7) { echo 'true';} else { echo 'false'; }?>
    </td>

</tr>
<tr>
    <td class="trFirst">
    "php"
    </td>
    <td>
    <?php if ($y1 === $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y2 === $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y3 === $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y4 === $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y5 === $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y6 === $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y7 === $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
    <td>
    <?php if ($y8 === $x8) { echo 'true';} else { echo 'false'; }?>
    </td>
</tr>
    </table>
    <br>
    <h4>
        В приведенных выше таблицах жесткого и не жесткого сравнения показано, что при не жестком сравнении РНР выполняет неявное приведение типов данных
        в type "INT", т.е. строка "1" приводится к INT (1)  и результат ("1" == 1) даст true, то же самое для (1 == true), так как логический тип (boolean)
        значения true так же посредством неявного приведения в РНР превращается в 1.
        Что бы этого избежать исползуется жесткое сравнение ( === ).
        
    </p>
    <?php
echo '<button class = ';
?>
</div>



</body>
</html>