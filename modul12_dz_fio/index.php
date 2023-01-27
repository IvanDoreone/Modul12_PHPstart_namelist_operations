<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Модуль12 PHP Сортировка ФИО</title>
</head>
<body>   
<?php

$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];
?>
<h4>Разбивка ФИО написанного одной сторкой через пробелы</h2>
<?php
//Функция разбивки ФИО написанного одной сторкой через пробелы
function getPartsFromFullname ($stringname) {
    $fiokeys = ['surname', 'name', 'patronomyc',];
    $lenght = count($array);
    $arr1 =  explode (' ', $stringname);
    return array_combine($fiokeys, $arr1);  
}

for ($i=0; $i<count($example_persons_array); $i++) {
    print_r(getPartsFromFullname($example_persons_array[$i]['fullname']));
    echo "<br>";
}

?>
<h4>Объединение Ф,И,О в строку через пробелы</h2>
<?php
//Функция объединения Ф,И,О в строку через пробелы
function getFullnameFromParts ($arr_separate) {
    return $united = implode(" ", $arr_separate);
}
for ($i=0; $i<count($example_persons_array); $i++) {
    $arr_separate = array_values(getPartsFromFullname($example_persons_array[$i]['fullname']));
    print_r(getFullnameFromParts($arr_separate));
    echo "<br>";
}
?>
<h4>Функция сокращения ФИО</h2>
<?php

//Функция сокращения ФИО
function getShortName ($string) {
    $arr = getPartsFromFullname($string);
    $arrshortname[0] = $arr['name'] . ' ';
    $arrshortname[1] = mb_strtoupper( mb_substr($arr['surname'], 0, (count($arr)-2))) .'.';
    return (implode($arrshortname));
}

for ($i=0; $i<count($example_persons_array); $i++) {  
    print_r(getShortName($example_persons_array[$i]['fullname']));
    echo "<br>";
}
?>
<h4>Функция определения пола по имени</h2>
<?php

//Функция определения пола по имени
function getGenderFromName ($string) {
$summgender = 0;

if ( mb_substr(getPartsFromFullname($string)['patronomyc'], -2 ) == 'ич') {
    $summgender++;
} 
if ( mb_substr(getPartsFromFullname($string)['patronomyc'], -3 ) == 'вна') {
    $summgender--;
} 
if ( mb_substr(getPartsFromFullname($string)['name'], -1)  == 'й' || mb_substr(getPartsFromFullname($string)['name'], -1 ) == 'н') {
    $summgender++;
} 
if ( mb_substr(getPartsFromFullname($string)['name'], -1 ) == 'а') {
    $summgender--;
} 
if ( mb_substr(getPartsFromFullname($string)['surname'], -1)  == 'в') {
    $summgender++;
} 
if ( mb_substr(getPartsFromFullname($string)['surname'], -2 ) == 'ва') {
    $summgender--;
} 
return $gendercheck = ($summgender < 0) ?  'женщина' : (($summgender > 0) ?  'мужчина' :  'пол не определен');
}

for ($i=0; $i<count($example_persons_array); $i++) {  
    print_r(getGenderFromName($example_persons_array[$i]['fullname']));
    echo "<br>";
}
?>
<h4>Функция для вывода гендерного состава аудитории</h2>
<?php

//Функция для вывода гендерного состава аудитории
function getGenderDescription ($array) {
for ($i=0; $i<count($array); $i++) {
$arr[$i] =  getGenderFromName($array[$i]['fullname']);
}
$males = array_filter($arr, function ($gender) {
return $gender === 'мужчина';
});
$females = array_filter($arr, function ($gender) {
    return $gender === 'женщина';
    });
    $femalepercent = round((count($females)/count($arr)*100), 1);
    $malepercent = round((count($males)/count($arr)*100), 1);
    $otherpercent = round((100-$femalepercent-$malepercent), 1);
echo <<<HEREDOC
Гендерный состав аудитории:<br>
---------------------------<br>
мужчины: $malepercent%<br>
женщины: $femalepercent%<br>
пол не определен: $otherpercent%<br>
HEREDOC;
};

getGenderDescription ($example_persons_array);

?>
<h4>Функция подбора идеальной пары</h2>
<?php
$surname = 'иванова';
$name = 'ивана';
$patronomyc = 'ивановна';

//Функция подбора идеальной пары => в файле match.php
include 'match.php';
print_r(getPerfectPartner('Кашаева', 'Полина', 'Николаевна', $example_persons_array));
?>

</body>
</html>
