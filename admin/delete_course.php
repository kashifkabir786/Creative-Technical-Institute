<?php require_once('../Connections/creative_technical_institute.php'); ?>
<?php
if ( isset( $_GET[ 'course_id' ] ) ) {

    $deleteSQL = sprintf( "DELETE FROM `course` WHERE  `course_id` = %s",
        GetSQLValueString( $_GET[ 'course_id' ], "int" ) );
    $Result1 = mysqli_query( $creative_technical_institute, $deleteSQL )or die( mysqli_error( $creative_technical_institute ) );

    unlink( "assets/images/course/" . $row_photo[ 'image' ] );

    $deleteGoTo = "course.php";
    if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
        $deleteGoTo .= ( strpos( $deleteGoTo, '?' ) ) ? "&" : "?";
        $deleteGoTo .= $_SERVER[ 'QUERY_STRING' ];
    }
    header( sprintf( "Location: %s", $deleteGoTo ) );
}
?>