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
    
        $banglaMarks = array(350,360,325,365,3263,245);
        $englishMarks = array(375,368,325,369,329,245);
        $mathMarks = array(355,354,387,332,3263,245);
        $max_marks = max(max($banglaMarks), max($englishMarks), max($mathMarks));
        $min_marks = min(min($banglaMarks), min($englishMarks), min($mathMarks));
        
        echo "Maximum Marks:" .$max_marks; 
        echo "Minimum Marks:" .$min_marks;
        
 
        


    ?>