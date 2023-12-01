<?php

/**
 * File: mysql.php
 * Location: ./includes
 *
 * This file contains functions for establishing database connections, executing queries,
 * and managing system variables related to the MySQL database.
 *
 * @author Sazad Ahemad
 * @company Lyncdigit Technologies Pvt. Ltd.
 * @version 1.0
 * @date 21/10/2023
 */

 // Define SITE_HOME constant
if (!defined('SITE_HOME')) {
    define('SITE_HOME', systemVariable('SITE_HOME'));
}

// Define SITE_DIR constant
if (!defined('SITE_DIR')) {
    define('SITE_DIR', systemVariable('SITE_DIR'));
}


/**
 * Establishes a connection to the MySQL database.
 *
 * This function connects to the MySQL database using the configuration details
 * provided in the 'config.php' file. If the connection is successful, it returns
 * the database connection object.
 *
 * @return mysqli|false The MySQL database connection object, or 'false' if the connection fails.
 */
function get_conn()
{
    require_once ___INC___ . 'config.php';

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('Error connecting to MySQL server.');

    mysqli_select_db($conn, DB) or die('Error selecting database.');

    return $conn;
}

/**
 * Generates a SQL SELECT query for retrieving all records from a given table.
 *
 * This function generates a SQL SELECT query to retrieve all records from the specified table.
 *
 * @param string $table_name The name of the database table to retrieve records from.
 *
 * @return string The SQL SELECT query for retrieving all records from the table.
 */
function SELECT($table_name)
{
    $query = "SELECT * FROM $table_name";
    return $query;
}

function DELETE($table_name, $column_name, $value){
    $query = "UPDATE `$table_name` SET `is_deleted` = 1 WHERE `$column_name` = '$value'";
    return $query;
}

function DEACTIVATE($table_name, $column_name, $column_value){
    $query = "UPDATE `$table_name` SET `is_active` = 0 WHERE `$column_name` = '$column_value'";
    return $query;
}

function ACTIVATE($table_name, $column_name, $column_value){
    $query = "UPDATE `$table_name` SET `is_active` = 1 WHERE `$column_name` = '$column_value'";
    return $query;
}


/**
 * Generates a SQL DELETE query to remove records from a table based on a specific condition.
 *
 * This function generates a SQL DELETE query to remove records from the specified table based on
 * a specific condition (specified by a column name and a value).
 *
 * @param string $table_name   The name of the database table from which to delete records.
 * @param string $column_name  The name of the column used for the condition.
 * @param mixed  $value        The value to match in the specified column for deletion.
 *
 * @return string The SQL DELETE query for removing records based on the specified condition.
 *
 * @deprecated This function is deprecated in favor of using the DELETE function.
 */
function DEEP_DELETE($table_name, $column_name, $value)
{
    $query = "DELETE FROM `$table_name` WHERE `$table_name`.`$column_name` = '$value'";
    return $query;
}



/**
 * Generates a SQL SELECT query with a WHERE clause based on a specific condition.
 *
 * This function generates a SQL SELECT query for retrieving records from the specified table
 * based on a specific condition. It creates a WHERE clause to filter records where a specified
 * column matches the provided value.
 *
 * @param string $table_name   The name of the database table to select records from.
 * @param string $column_name  The name of the column used for the condition in the WHERE clause.
 * @param mixed  $value        The value to match in the specified column.
 *
 * @return string The SQL SELECT query with a WHERE clause for the specified condition.
 */
function WHERE($table_name, $column_name, $value)
{
    $query = "SELECT * FROM `$table_name` WHERE `$table_name`.`$column_name` = '$value'";
    return $query;
}

function WHEREm($table_name, $target = array()){
    $query = "SELECT * FROM `$table_name` WHERE ";
    $count = count($target);
    $sl = 1;
    foreach ($target as $column => $column_value) {
        if($sl==$count){
            $query .= " `$column` = '$column_value'";
        } else {
            $query .= " `$column` = '$column_value' AND";
        }

        $sl++;
    }
    $query .= ";";
    return $query;
}


function UPDATE($table_name, $target_name, $value, $updates_colums = array()){
    $query = "UPDATE `$table_name` SET ";
    $count = count($updates_colums);
    $sl = 1;
    foreach ($updates_colums as $column => $column_value) {
        if($sl==$count){
            $query .= " `$column` = '$column_value'";
        } else {
            $query .= " `$column` = '$column_value',";
        }

        $sl++;
    }
    $query .= " WHERE `$target_name` = '$value';";
    return $query;
}


function INSERT($table_name, $rows = array()){
    $query = "INSERT INTO `$table_name` (";
    $count = count($rows);
    $sl = 1;

    foreach ($rows as $column => $column_value) {
        if($sl==$count){
            $query .= " `$column`";
        } else {
            $query .= " `$column`,";
        }

        $sl++;
    }

    $query .= ", `created_by`, `updated_by`) VALUES (";
    $sl = 1;

    foreach ($rows as $column => $column_value) {
        if($sl==$count){
            $query .= " '$column_value'";
        } else {
            $query .= " '$column_value',";
        }

        $sl++;
    }

    $user = getCurrentUser()->id;

    $query .= ", '".$user."', '".$user."');";

    return $query;
}


/**
 * Executes an SQL query using a MySQL database connection.
 *
 * This function executes the provided SQL query using the active MySQL database connection. It sends
 * the query to the database and returns the result of the execution.
 *
 * @param string $query The SQL query to be executed.
 *
 * @return resource|false|void Returns the result resource for successful SELECT queries, `true` for successful
 *    non-SELECT queries (INSERT, UPDATE, DELETE), and `false` if the query execution fails.
 */
function runQuery($query)
{
    $run_query = mysqli_query(get_conn(), $query);
    return $run_query;
}

function queryObject($mysql_result){
    return mysqli_fetch_object($mysql_result);
}


function last_insert_id($table, $column){
    $query = "SELECT * FROM `$table` ORDER BY `$column` DESC LIMIT 1;";
    $row = runQuery($query);
    $row = queryObject($row);
    return $row->$column;
}

function is_active($row){
    if($row->is_active){
        return true;
    }
    return false;
}

function is_deactive($row){
    if($row->is_deactive){
        return true;
    }
    return false;
}

function is_deleted($row){
    if($row->is_deleted){
        return true;
    }
    return false;
}

/**
 * Retrieve a system variable value from the database.
 *
 * This function retrieves the value of a specific system variable from the database. It queries the
 * 'systemv' table to find the value associated with the provided variable name.
 *
 * @param string $variable_name The name of the system variable to retrieve.
 *
 * @return mixed|null The value of the specified system variable if found, or `null` if the variable
 *    is not found in the database.
 */
function systemVariable($variable_name)
{
    $query = WHERE('systemv', 'variable', $variable_name);
    $run_query = runQuery($query);
    $fetch = mysqli_fetch_assoc($run_query);
    return $fetch['value'];
}

/**
 * Retrieve all user types from the database.
 *
 * This function queries the database to retrieve all user types from the 'user_types' table. It returns
 * a result set containing information about different user types.
 *
 * @return bool|resource|false A result set with information about user types or `false` on failure.
 */
function getAllUserTypes()
{
    $query = SELECT('user_types');
    $run_query = runQuery($query);
    return $run_query;
}

/**
 * Get the user type name by user type ID.
 *
 * This function retrieves the user type name associated with the given user type ID from the 'user_types' table.
 *
 * @param int $user_type_id The ID of the user type to look up.
 *
 * @return string|false The user type name or `false` if the user type ID is not found.
 */
function getUserTypeNameByUserTypeId($user_type_id)
{
    $query = WHERE('user_types', 'user_type_id', $user_type_id);
    $run_query = runQuery($query);
    return mysqli_fetch_assoc($run_query)['user_type_name'];
}


/**
 * Get the count of active users.
 *
 * This function retrieves the count of active users (where 'is_deleted' is set to 0) from the 'users' table.
 *
 * @return int The count of active users.
 */
function getUsersCount()
{
    $query = "SELECT COUNT(*) FROM `users` WHERE `users`.`is_deleted` = 0;";
    $run_query = runQuery($query);
    return mysqli_fetch_row($run_query)[0];
}


/**
 * Get user information by email.
 *
 * This function retrieves user information from the 'users' table based on their email address.
 *
 * @param string $email The email address of the user.
 * @return mixed|false The query result containing user information, or false if no user matches the email.
 */
function getUserByEmail($email)
{
    $query = WHERE('users', 'email', $email);
    $run_query = runQuery($query);
    return $run_query;
}


/**
 * Get user information by user ID.
 *
 * This function retrieves user information from the 'users' table based on their user ID.
 *
 * @param int $userid The user ID of the user.
 * @return mixed|false The query result containing user information, or false if no user matches the user ID.
 */
function getUserByUserid($userid)
{
    $query = WHERE('users', 'userid', $userid);
    $run_query = runQuery($query);
    return $run_query;
}


/**
 * Get a list of deleted users.
 *
 * This function retrieves a list of users who have been marked as deleted from the 'users' table.
 *
 * @return mixed|false The query result containing deleted user information, or false if no deleted users exist.
 */
function getDeletedUsers()
{
    $query = WHERE('users', 'is_deleted', 1);
    $run_query = runQuery($query);
    return $run_query;
}


/**
 * Update multiple system variables.
 *
 * This function allows you to update multiple system variables at once. It iterates through an associative array of variables and their values, and updates them in the 'systemv' table.
 *
 * @param array $list_of_variables An associative array where keys are variable names, and values are the new values to set.
 * @param string $current_admin The name of the administrator performing the updates.
 */
function updatesystemVariables($list_of_variables, $current_admin)
{
    foreach ($list_of_variables as $key => $value) {
        updatesystemVariable($key, $value, $current_admin);
    }
}


/**
 * Update a system variable's value.
 *
 * This function updates the value of a specific system variable in the 'systemv' table. It is typically used to modify individual system settings.
 *
 * @param string $variable_name The name of the system variable to be updated.
 * @param mixed $variable_value The new value to set for the system variable.
 *
 * @return bool|mysqli_result|false The result of the database query for updating the variable value.
 */
function updatesystemVariable($variable_name, $variable_value)
{
    $query = "UPDATE `systemv` SET `value` = '$variable_value' WHERE `systemv`.`variable` = '$variable_name';";
    $run_query = runQuery($query);
    return $run_query;
}


/**
 * Get the details of the currently logged-in user.
 *
 * This function retrieves the details of the currently logged-in user by their user ID, which is stored in the '$_SESSION' superglobal. It provides information about the user's account and profile.
 *
 * @return array|null An associative array containing the user's details or 'null' if the user is not logged in.
 */
function getCurrentUser()
{
    if(secure()){
        return mysqli_fetch_object(getUserByUserid($_SESSION[USER_GLOBAL_AUTH]));
    }
}



