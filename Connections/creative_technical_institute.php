<?php
$hostname_creative_technical_institute = "localhost";
$database_creative_technical_institute = "creative_technical_institute";
$username_creative_technical_institute = "creative_technical_institute";
$password_creative_technical_institute = "1234";
$creative_technical_institute = mysqli_connect( $hostname_creative_technical_institute, $username_creative_technical_institute, $password_creative_technical_institute, $database_creative_technical_institute )or trigger_error( mysqli_connect_error(), E_USER_ERROR );

global $creative_technical_institute;
if ( !function_exists( "GetSQLValueString" ) ) {
    function GetSQLValueString( $theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "" ) {
        //  if (PHP_VERSION < 6) {
        //    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
        //  }
        global $creative_technical_institute;
        $theValue = function_exists( "mysqli_real_escape_string" ) ? mysqli_real_escape_string( $creative_technical_institute, $theValue ) : mysqli_escape_string( $theValue );
        switch ( $theType ) {
            case "text":
                $theValue = ( $theValue != "" ) ? "'" . $theValue . "'": "NULL";
                break;
            case "long":
            case "int":
                $theValue = ( $theValue != "" ) ? intval( $theValue ) : "NULL";
                break;
            case "double":
                $theValue = ( $theValue != "" ) ? doubleval( $theValue ) : "NULL";
                break;
            case "date":
                $theValue = ( $theValue != "" ) ? "'" . $theValue . "'": "NULL";
                break;
            case "defined":
                $theValue = ( $theValue != "" ) ? $theDefinedValue : $theNotDefinedValue;
                break;
        }
        return $theValue;
    }
}
?>