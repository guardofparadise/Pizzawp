<?php
function lapizzeria_database(){
    global $wpdb;
    global $lapizzeria_db_version;
    $lapizzeria_db_version="1.0";
    $table = $wpdb->prefix .'reservations';
   //prefix adds wp_reservations in db
    $charset_collate= $wpdb->get_charset_collate();
    //SQL STATEMENT
    $sql ="CREATE TABLE $table ( 
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(50) NOT NULL,
        date datetime NOT NULL,
        email varchar(50) DEFAULT '' NOT NULL,
        phone varchar(10) NOT NULL,
        message longtext NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";
    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    //dbDelta Modifies the database based on specified SQL statements.
     //Useful for creating new tables and updating existing tables to a new structure.

       

}

add_action('after_setup_theme','lapizzeria_database')


?>