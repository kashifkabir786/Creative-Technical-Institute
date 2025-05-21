<?php require_once('../Connections/creative_technical_institute.php'); ?>
<?php
if ( isset( $_GET[ 'student_id' ] ) ) {

    $deleteSQL = sprintf( "DELETE FROM `student` WHERE  `student_id` = %s",
        GetSQLValueString( $_GET[ 'student_id' ], "int" ) );
    $Result1 = mysqli_query( $creative_technical_institute, $deleteSQL )or die( mysqli_error( $creative_technical_institute ) );

    unlink( "assets/images/student/" . $row_photo[ 'image_1' ] );

    $deleteGoTo = "student.php";
    if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
        $deleteGoTo .= ( strpos( $deleteGoTo, '?' ) ) ? "&" : "?";
        $deleteGoTo .= $_SERVER[ 'QUERY_STRING' ];
    }
    header( sprintf( "Location: %s", $deleteGoTo ) );
}
?>