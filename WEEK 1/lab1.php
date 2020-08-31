<!DOCTYPE html>
<html>

<head>
    <title>Lab1 by Dev Bhatt</title>
</head>

<body>
    <?php
    // -------------- Q1 -------------------
    echo "<pre>";
    echo "<h1>Question 1</h1>";
    echo "<hr>";
    echo "Hello World";

    // -------------- Q2 -------------------

    echo "<h1>Question 2</h1>";
    echo "<hr>";
    $list = array(87, 75, 93, 95);
    $avg = 0;

    for ($i = 0; $i < count($list); $i++) {

        $avg = $avg + $list[$i];
    }
    $avg = $avg / 4;

    echo "Average = " . $avg;

    // -------------- Q3 -------------------

    echo "<h1>Question 3</h1>";
    echo "<hr>";

    unset($list[1]);
    $avg = 0;
    //echo $list;
    foreach ($list as $value) {
        //    echo $value;
        $avg = $avg + $value;
    }
    $avg = $avg / count($list);
    echo $avg;

    // -------------- Q4 -------------------

    echo "<h1>Question 4</h1>";
    echo "<hr>";
    $array = array(
        array(1, 2, 3, 4, 5),
        array(6, 7, 8, 9, 10),
        array(11, 12, 13)
    );
    echo "<h4>Question 4a</h4>";
    echo '$array = [';
    for ($i = 0; $i < count($array); $i++) {

        $innerArray = $array[$i];
        echo "<br> [";
        for ($j = 0; $j < count($innerArray); $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "]";
    }
    echo " <br> ]";
    echo "<h4>Question 4b</h4>";

    echo "<h3> The element with value of 8: 8 and its indexes are [1][2] </h3>";
    echo ' $array[1][2] = ' . $array[1][2];

    echo "<h4>Question 4d</h4>";

    $array[2][] = 14;
    $array[] = [15, 16, 17];
    $array[] = 18;

    for ($i = 0; $i < count($array); $i++) {
        $innerArray = $array[$i];
        echo "<br>";
        if (is_array($innerArray)) {
            for ($j = 0; $j < count($innerArray); $j++) {
                echo '[' . $i . ']' . '[' . $j . '] => ' . $array[$i][$j] . "   ";
            }
        } else {
            echo '[' . $i . ']=>' . $array[$i];
        }
    }

    echo "<br>";
    echo "<h4>Question 4e</h4>";
    foreach ($array as $key => $item) {
        echo "<br>";
        if (is_array($item)) {

            foreach ($item as $key2 => $value) {
                echo '[' . $key . ']' . '[' . $key2 . '] => ' . $value . "  ";
            }
        } else {
            echo '[' . $key . ']=>' . $item;
        }
    }

    echo "<h4>Question 4f</h4>";

    $array2 = array(

        "name" => array("first" => "Dev",
                        "last" => "Bhatt"),
        "address" => array("street"  => "123 Main street",
                            "city"   => "Rochester",
                            "state"  => "New York",
                            "zip"    => "14623")
    
    );

    foreach ($array2 as $key => $value){
    
        foreach ($value as $key2 => $item ){
            echo "\n[".$key."]". "[".$key2."]".$item;
        }
        echo "<br>";
    }
    echo "<h4>Question 4e</h4>";

    $array2["name"]["middle"]="none";
    $array2["name"][] = ["my"=>"name"];
    $array2["name"][] = 25;
    $array2[] = [1,2,3,4,5];
    $array2[][] = ["testing "=>"yes"];

    foreach ($array2 as $key => $value){
        if(is_array($value)) {
            foreach ($value as $key2 => $item) {
                if (is_array($item)){
                    echo "<br>";
                    foreach ($item as $key3 => $something){
                        echo "\n[" . $key . "]". "[" . $key2 . "]"  . "[" . $key3 . "]" . $something ."\n"; 
                    }
                }
                else {
                    echo "[" . $key . "]" . "[" . $key2 . "]" . $item."\n";
                }
            }
        }
        echo "<br>";
    }
    // var_dump($array2);
    echo "</pre>";

    ?>
</body>

</html>