<?php
/**
 * Created by PhpStorm.
 * User: Emerson
 * Date: 10/21/2015
 * Time: 2:07 PM
 */


function password_logic() {

//text processing...
    $big_wordlist = file(public_path('/assets/files/wordscraped_data.txt', FILE_IGNORE_NEW_LINES)); //referred to http://stackoverflow.com/questions/1776033/php-get-array-of-words-from-txt-file
    $trimmedArray = array_map('trim', $big_wordlist);//remove whitespace

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $emptyRemoved = array_filter($trimmedArray); //needed to remove empty array elements, referred to http://stackoverflow.com/questions/3654295/remove-empty-array-elements
        /* special characters */
        $str = '!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';


        shuffle($emptyRemoved);//randomize the array everytime a user submits

        $numWords = $_POST["numWords"];

        echo '<font color="green">';
        if ($numWords=='' or $numWords==null) //user didn't enter a number for words
        {echo "Please enter 1 to 10 for the number of words in your password.";}
        else {
            //numWords
            for ($i = 1; $i <= htmlspecialchars($_POST["numWords"]); $i++) {
                if (isset($_POST["camelBool"])) //for camelCase
                {echo (ucwords(strtolower($emptyRemoved[$i-1])));}
                else {echo (strtolower($emptyRemoved[$i-1]));}

                if (isset($_POST["hyphensBool"])) //for hyphens
                {if ($i < htmlspecialchars($_POST["numWords"])) {echo "-";};}

            }

            if (isset($_POST["numBool"])) //password has a number
            {echo rand(0,9);}

            if (isset($_POST["symbolBool"])) //password has a symbol
            {$randomChar = $str[rand(0, strlen($str)-1)];
                echo $randomChar;}
        }
        echo '</font>';
    }
}
?>
