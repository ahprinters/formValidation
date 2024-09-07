<?php
// How to Get IP Address of User in PHP

// Whether ip is from share internet
    // if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    //     $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    // }
    // // Whether ip is from proxy
    // elseif(!empty($_SERVER['HTTP_X_FORWORDED_FOR'])){
    //     $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    // }
    // // Whether ip is from remote orders
    // else{
    //     $ip_address = $_SERVER['REMOTE_ADDR'];
    // }
    // echo $ip_address;


   
    // How to Get IP Address of User in PHP

    // function getUserIP() {
    //     // Whether ip is from share internet
    //     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //         $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    //     }
    //     // Whether ip is from proxy
    //     elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //         $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //     }
    //     // Whether ip is from remote address
    //     else {
    //         $ip_address = $_SERVER['REMOTE_ADDR'];
    //     }
    //     return $ip_address;
    // }

    // echo getUserIP();

    // 3. How to Detect User Web Browser In PHP
    // echo "Your user Agent is:" .$_SERVER['HTTP_USER_AGENT'];

    // 3. How to Detect User Web Browser In PHP
    // $url = 'http://www.T3so.com/excercises.php';
    // $url = parse_url($url);
    // echo 'Scheme:' .$url['scheme']. "\n";

    // 4. How to get the current file name In PHP

    // $current_file_name = basename($_SERVER['PHP_SELF']);
    // echo $current_file_name. "\n";

    // How to Get the domain name from a URL In PHP
        // $url = 'http://www.T3so.com/excercises.php';
        // $url = parse_url($url);
        // echo 'Host:' .$url['host']. "\n";

    
     //PHP Math Exercises: Find the maximum and minimum marks 
    //  from the specified set of arrays

        // $banglaMarks = array(350,360,325,365,363,245);
        // $englishMarks = array(375,368,325,369,329,245);
        // $mathMarks = array(355,354,387,332,363,245);
        // $max_marks = max(max($banglaMarks), max($englishMarks), max($mathMarks));
        // $min_marks = min(min($banglaMarks), min($englishMarks), min($mathMarks));
        
        // echo "Maximum Marks:" .$max_marks; 
        // echo "<br/>";
        // echo "Minimum Marks:" .$min_marks;
        
 //✅Coding challenge #1. Coding challenge #1: Print numbers from 1 to 10
//  $number = 1;
// while($number <= 10) {
//     echo $number;
//     echo "<br>";
//     $number++;
// }

 //✅Coding challenge #2. 
//  Print the odd numbers less than 100
    
    // for($number=1; $number<100; $number++){
    //     if($number%2==1){
    //         echo "Odd Number:".$number;
    //         echo "<br/>";
    //     }
    // }

  // ✅Coding challenge #3: Print the multiplication table with 7
    // for ($i = 1; $i <= 10; $i++) {
    //     echo "7 x $i = " . (7 * $i) . "<br>";
    // }
    //✅ Coding challenge #4: Print all the multiplication tables with numbers from 1 to 10

    // for ($num = 1; $num <= 10; $num++) {
    //     echo "Multiplication Table for $num:<br>";
    //     for ($i = 1; $i <= 10; $i++) {
    //         echo "$num x $i = " . ($num * $i) . "<br>";
    //     }
    //     echo "<br>"; // Add a line break between tables
    // }
    // ✅Coding challenge #5: Calculate the sum of numbers from 1 to 10

    // To calculate the sum of numbers from 1 to 10, you can use the formula for the sum of an arithmetic series:
    //     S=2n​×(a+l)
    //     where:
        
    //     ( n ) is the number of terms,
    //     ( a ) is the first term,
    //     ( l ) is the last term.
        
    //     For the numbers from 1 to 10:
        
    //     ( n = 10 )
    //     ( a = 1 )
    //     ( l = 10 )
        
    //     So, the sum ( S ) is:
    //     S=210​×(1+10)=5×11=55
    //     Therefore, the sum of the numbers from 1 to 10 is 551.

    // $sum = 0;
    // for ($i = 1; $i <= 10; $i++) {
    //     $sum += $i;
    // }
    // echo "The sum of numbers from 1 to 10 is $sum";
    
    // ✅Coding challenge #6: Calculate 10!

//     $factorial = 1;
//     for ($i = 1; $i <= 10; $i++) {
//     $factorial *= $i;
// }
// echo "The factorial of 10 is $factorial";

//✅ Coding challenge #7: Calculate the sum of odd numbers greater than 10 and less than 30


    ?>