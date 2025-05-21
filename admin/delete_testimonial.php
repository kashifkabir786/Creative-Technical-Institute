<?php require_once('../Connections/creative_technical_institute.php'); ?>
<?php
if ( isset( $_GET[ 'testimonial_id' ] ) ) {

    $deleteSQL = sprintf( "DELETE FROM `testimonial` WHERE  `testimonial_id` = %s",
        GetSQLValueString( $_GET[ 'testimonial_id' ], "int" ) );
    $Result1 = mysqli_query( $creative_technical_institute, $deleteSQL )or die( mysqli_error( $creative_technical_institute ) );

    unlink( "assets/images/testimonial/" . $row_photo[ 'image' ] );

    $deleteGoTo = "testimonial.php";
    if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
        $deleteGoTo .= ( strpos( $deleteGoTo, '?' ) ) ? "&" : "?";
        $deleteGoTo .= $_SERVER[ 'QUERY_STRING' ];
    }
    header( sprintf( "Location: %s", $deleteGoTo ) );
}
?>