<?php
//Функция подбора идеальной пары
function getPerfectPartner ($surname, $name, $patronomyc, $array) {

    $freshmah = mb_convert_case(getFullnameFromParts([$surname, $name, $patronomyc]), MB_CASE_TITLE_SIMPLE);
    if (getGenderFromName($freshmah) === 'пол не определен') {
        echo "<script>alert('Пол не определен, ведите другое имя!')</script>";
        echo 'Введите новое имя';
        goto end;
    }  else {
        print_r("Вы добавили: $freshmah");
        echo "<br>";echo "<br>";
    }
    start:
    $pair = $array[rand(0, (count($array)-1))]['fullname'];
    if (getGenderFromName($freshmah) !== getGenderFromName($pair) && getGenderFromName($pair) !== 'пол не определен') {
        $rand = (rand(5000, 10000))/100;
        $freshmanshort = getShortName($freshmah);
        $pairshort = getShortName($pair);
        echo <<<HEREDOC
        $freshmanshort + $pairshort = <br>
        &#9825; Идеально на $rand% &#9825;
        HEREDOC;
    } else {
        goto start;
    }
    end:
    }
    
    
?>    