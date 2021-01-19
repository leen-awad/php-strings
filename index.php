<?php
// 1-php string 1. Write a PHP script to : a) transform a string all uppercase letters. b) transform a string all lowercase letters. c) make a string's first character uppercase. d) make a string's first character of all the words uppercase.

echo(strtoupper("the quick brown fox jumps over the lazy dog."))."\n";

echo(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."\n";

echo(ucfirst("the quick brown fox jumps over the lazy dog."))."\n";

echo(ucwords("the quick brown fox jumps over the lazy dog."))."\n";



// 2-Write a PHP script to split the following string. Sample string : '082307' Expected Output : 08:23:07

$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";



//3- Write a PHP script to check whether a string contains a specific string? Sample string : 'The quick brown fox jumps over the lazy dog.' Check whether the said string contains the string 'jumps'.
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }


// 4- Write a PHP script to extract the file name from the following string. Sample String : 'www.example.com/public_html/index.php' Expected Output : 'index.php'
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; 


// 5-Write a PHP script to extract the user name from the following email ID. Sample String : 'Orange@example.com' Expected Output : 'Orange'
$mailid  = 'orang@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";


// 6-Write a PHP script to get the last three characters of a string. Sample String : 'Orange@example.com' Expected Output : 'com'
$str1 = 'orange@example.com';
echo substr($str1, -3)."\n";



// 7-Write a PHP script to generate simple random passwords [do not use rand() function] from a given string. Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' Note : Password length may be 6, 7, 8 etc. Expected OutPut: 254ABCc
function generateRandom($len){
    $str_original="orange coding academy";
    $shuffled = str_shuffle($str_original);
    $result= substr($shuffled, 0, $len);
    return $result;
};

echo generateRandom(7);



// 8-Write a PHP script to replace the first 'the' of the following string with 'That'. Sample date : 'the quick brown fox jumps over the lazy dog.' Expected Result : That quick brown fox jumps over the lazy dog.

$str4="the quick brown fox jumps over the lazy dog.";
echo preg_replace("/the/","That",$str4,1);


// 9-Write a PHP script to find the first character that is different between two strings. String1 : 'football' String2 : 'footboll' Expected Result : First difference between two strings at position 5: "a" vs "o"

$string1="Football";
$string2="Footboll";
$pos = strspn($string1 ^ $string2, "\0");
printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);


// 10-Write a PHP script to put a string in an array. Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."; Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=>

    $print1="Twinkle, twinkle, little star,\n How I wonder what you are.\n Up above the world so high,\n Like a diamond in the sky.";
    $arrayTest=explode("\n",$print1);
    
    var_dump($arrayTest);
    echo"<br><br>";


// 11-Write a PHP script to print the next character of a specific character. Sample character : 'a' Expected Output : 'b' Sample character : 'z' Expected Output : 'a'

function nextcharacter($character){
    $character_ascii=ord($character);
    if($character_ascii == 122 ){
        return "a";
    } else if ($character_ascii == 90)
    {
        return "A";
    }
    else{
        $next_character_ascii=$character_ascii+1;
        $next_character=chr($next_character_ascii);
        return $next_character;
    }

}
echo nextcharacter("z")."<br>";


// 12-Write a PHP script to remove a part of a string from the beginning. Sample string : 'orange@example.com' Expected Output : 'example.com'

$str1 = 'orange@example.com';
echo substr($str1, -11)."\n";


// 13-Write a PHP script to insert a string at the specified position in a given string. Original String : 'The brown fox' Insert 'quick' between 'The' and 'brown'. Expected Output : 'The quick brown fox'
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";


// 14-Write a PHP script to get the first word of a sentence. Original String : 'The quick brown fox' Expected Output : 'The'





// 15-Write a PHP script to remove all leading zeroes from a string. Original String : '000547023.24' Expected Output : '547023.24
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";


// 16-Write a PHP script to remove part of a string. Original String : 'The quick brown fox jumps over the lazy dog' Remove 'fox' from the above string. Expected Output : 'The quick brown jumps over the lazy dog'

$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";




// 17-Write a PHP script to remove trailing slash from a string. Original String : 'The quick brown fox jumps over the lazy dog///' Expected Output : 'The quick brown fox jumps over the lazy dog'
$str_origenal="The quick brown fox jumps over the lazy dog";
$slash_removd=rtrim($str_origenal,"/");
echo($slash_removd)

// 18-Write a PHP script to get the characters after the last '/' in an url. Sample URL : 'http://www.example.com/5478631' Expected Output : '5478631'

$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; 







// 20-Write a PHP script to select first 5 words from the following string.
//  Sample String : 'The quick brown fox jumps over the lazy dog' 
//  Expected Output : 'The quick brown fox jumps'
$str5_original="The quick brown fox jumps over the lazy dog";
$str5_seperated=explode(" ",$str5_original);
$array_sliced=array_splice($str5_seperated,0,5);
$str_updated2=implode($array_sliced," ");

echo "*question #20 solution:"."<br>";
echo "- original string (".$str5_original." )<br>";
echo "first 5 words :".$str_updated2."<br>";



// 21-Write a PHP script to remove comma(s) from the following numeric string. 
// Sample String : '2,543.12' 
// Expected Output : 2543.12;
$str6_original='2,543.12';
$commas_removed=str_replace(",","",$str6_original);

echo "*question #21 solution:"."<br>";
echo "- original string (".$str6_original." )<br>";
echo "Commas removed :".$commas_removed."<br>";



// 22-Write a PHP script to print let
// Write a PHP script to print letters from 'a' to 'z';
echo "*question #22 solution:"."<br>";
echo "letters from 'a' to 'z' : <br>";

for($i=97;$i<=122;$i++){
    echo " ".chr($i);
}

?>