<?php
// MySQL compatibility layer for PHP 8.x
if (!function_exists('mysql_connect')) {
    function mysql_connect($server, $username, $password) {
        global $mysql_link;
        $mysql_link = mysqli_connect($server, $username, $password);
        if (!$mysql_link) {
            die('Connection failed: ' . mysqli_connect_error());
        }
        return $mysql_link;
    }
    
    function mysql_select_db($database_name, $link = null) {
        global $mysql_link;
        $link = $link ?: $mysql_link;
        return mysqli_select_db($link, $database_name);
    }
    
    function mysql_query($query, $link = null) {
        global $mysql_link;
        $link = $link ?: $mysql_link;
        return mysqli_query($link, $query);
    }
    
    function mysql_fetch_array($result, $result_type = MYSQLI_BOTH) {
        return mysqli_fetch_array($result, $result_type);
    }
    
    function mysql_fetch_assoc($result) {
        return mysqli_fetch_assoc($result);
    }
    
    function mysql_num_rows($result) {
        return mysqli_num_rows($result);
    }
    
    function mysql_error($link = null) {
        global $mysql_link;
        $link = $link ?: $mysql_link;
        return mysqli_error($link);
    }
    
    function mysql_insert_id($link = null) {
        global $mysql_link;
        $link = $link ?: $mysql_link;
        return mysqli_insert_id($link);
    }
    
    function mysql_affected_rows($link = null) {
        global $mysql_link;
        $link = $link ?: $mysql_link;
        return mysqli_affected_rows($link);
    }
    
    function mysql_real_escape_string($string, $link = null) {
        global $mysql_link;
        $link = $link ?: $mysql_link;
        return mysqli_real_escape_string($link, $string);
    }
    
    function mysql_free_result($result) {
        return mysqli_free_result($result);
    }
}
?>
