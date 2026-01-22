<?php

/**
 * @file
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Submission Form</title>
</head>
<body>

    <!-- <form action="includes/process_form.php" method="POST">

        <h2>Submit Your Information</h2>

        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>
        <br>
        <div>
            <label for="lastname">last name:</label>
            <input type="text" id="lastname" name="lastname">
        </div>
        <br>
        <div>
            <label for="message">Message/Comment:</label>
            <textarea id="message" name="message" rows="5"></textarea>
        </div>
        <br>
        <div>
            <button type="submit">Submit Data</button>
        </div>

    </form> -->

    <?php
    // $arr = [1, 2, 2, 5, 4, 1];
    // print_r(array_unique($arr));
    $arr1 = [1, 2, 2, 5, 4, 1];
    // $arr1 = ['cat', 'dog', 'horse'];
    // $arr2 = ['kook', 'cat', 'horse'];
    // $data = ['salam' => 25, 'kalam' => 30, 'joo' => 40];
    // If (array_key_exists('fdfdf', $data)) {
    //   echo 'yes';
    // }
    // else {
    //   echo 'no';

    /**
     * }.
     */
    function find_val($item) {
      return $item < 2;
    }

    print_r(array_filter($arr1, 'find_val'))
    /**
    *
    */
    // Function check_val($arr1) {
    //     if (in_array('fdfdf', $arr1, TRUE)) {
    //       echo "yes";
    //     }
    //     else {
    //       echo "no";
    //     }
    //   }.
    // print_r(check_val($arr1));.


    /**
       *
       */
    // Function double_val($item) : int {
    //   return $item * 2;
    // }.

    /**
     *
     */
    // Function compare_val($v1, $v2):string {
    //   if ($v1 === $v2) {
    //     return "same";
    //   }
    //   else {
    //     return "different";
    //   }.

    /**
     * }.
     *
     * // $arr = ['php', 'java', 'pythin'];
     * // $arr_2 = [TRUE => 'a', 1 => 'b', '1' => 'c', NULL => 'e'];
     * // var_dump(isset($arr[4]));
     * // array_push($arr, 2, 'koo', 1.5);
     * // // Echo $arr;.
     * // // print_r($arr);
     * // echo $arr_2[NULL];
     * // print_r($arr_2);
     * // $array = ['bana', 'app', 'koo', 'rere', 'sds'];
     * // // Echo $array[1];
     * // // // $array_push('orr');
     * // // $array[] = 'yuu';
     * // // Echo $array;.
     * // $arr_2 = array_slice($array, 1, 3);
     * // // print_r($array);
     * // // print_r($arr_2);.
     * // // echo count($array);
     * // // sort($array);
     * // print_r($arr_2);
     * // print_r($array);
     * // var_dump(isset($array[2]))
     * // $lang = [
     * //   'hindi' => 'india',
     * //   'bangla' => 'bangladesh',
     * //   'Eng' => 'Britan',
     * // ];
     * // array_push($lang, 'latin');.
     * // $lang['braxil'] = 'latin';
     * // print_r($lang);
     * // $x = NULL;
     * // var_dump((string) $x)
     * // $score = 85;
     * // if ($score > 90) {
     * //   echo 'A';
     * // }
     * // else {
     * //   echo 'B';
     * // }.
     * // $greet = "Hello worlderer";.
     * // $greet = ['a' , 'b', 'r', 'o'];
     * // $len = count($greet);
     * // for ($i = 0; $i < $len; $i++) {
     * //   echo $i;
     * // }
     * */
    ?>
     </body>
     </html>
