<?php require_once('../Connections/creative_technical_institute.php'); ?>
<?php
if ( isset( $_GET[ 'banner_id' ] ) ) {

    $deleteSQL = sprintf( "DELETE FROM `banner_image` WHERE  `banner_id` = %s",
        GetSQLValueString( $_GET[ 'banner_id' ], "int" ) );
    $Result1 = mysqli_query( $creative_technical_institute, $deleteSQL )or die( mysqli_error( $creative_technical_institute ) );

    unlink( "assets/images/banner/" . $row_photo[ 'banner_image' ] );

    $deleteGoTo = "banner_image.php";
    if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
        $deleteGoTo .= ( strpos( $deleteGoTo, '?' ) ) ? "&" : "?";
        $deleteGoTo .= $_SERVER[ 'QUERY_STRING' ];
    }
    header( sprintf( "Location: %s", $deleteGoTo ) );
}
?>