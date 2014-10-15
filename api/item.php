<?php
    
    if(session_id() == '') {
        session_start();
    }

    require_once 'api.php';
    
    if (empty($selectingDatabase)) {
        $thisDir = dirname(__FILE__);
        require( dirname($thisDir) . '/db_operations/db_connection.php');
    }

    class ItemController extends API
    {

        /**
         * Example of an Endpoint
         */
         protected function item($args, $file) {

            if(!isset($_SESSION['user_id'])) {
                return "User not Authenticated! You must be logged in to view this resource.";
            }

            if ($this->method == 'GET') {

                if (sizeof($args) > 0) {

                    $id = $args[0];
                    
                    $result = mysql_query(
                        "SELECT * from item where id = '" . $id . "'"
                    );

                    $itemExists = mysql_num_rows($result);

                    if($itemExists < 1)
                        return "No item found with id: " . $args[0];

                    while ($row = mysql_fetch_array($result)) 
                    {
                        $new_array[$row['id']]['id'] = $row['id'];
                        $new_array[$row['id']]['name'] = $row['name'];
                        $new_array[$row['id']]['price'] = $row['price'];
                    }

                    return $new_array;
                }
                
                
                $result = mysql_query(
                    "SELECT * from item"
                );

                while ($row = mysql_fetch_array($result)) 
                {
                    $new_array[$row['id']]['id'] = $row['id'];
                    $new_array[$row['id']]['name'] = $row['name'];
                    $new_array[$row['id']]['price'] = $row['price'];
                }

                return $new_array;
            }

            if ($this->method == 'POST') {
                
                if (empty($_POST['name']) || empty($_POST['price'])){

                    $data = json_decode(file_get_contents('php://input'), true);

                    if (empty($data['name']) || empty($data['price'])) {
                        return "Name and price of the item to be added are required!";
                    }

                    $_POST['name'] = $data['name'];
                    $_POST['price'] = $data['price'];
                    
                }
                
                $name = $_POST['name'];
                $price = $_POST['price'];

                if($price < 0)
                    return "Price of your item can't be zero or negative! You don't want to sell it for free. Do you?";

                $result = mysql_query(
                    "INSERT INTO item (name, price) VALUES ( '" . $name . "', '"
                         . $price . "')"
                );

                if(!$result)
                    return "Error adding item!";

                else
                    return "Item added successfully!";

            }

            if ($this->method == 'PUT') {

                $data = json_decode($file, true);

                if(empty($data['name']) || empty($data['price']))
                    return "Name and price of the item to be updated are required!";
                
                $name = $data['name'];
                $price = $data['price'];

                if($price < 0)
                    return "Price of your item can't be zero or negative! You don't want to sell it for free. Do you?";

                if (sizeof($args) > 0) {
                    
                    $id = $args[0];

                    $result = mysql_query(
                        "UPDATE item set name = '" . $name . "' , price = '" . 
                        $price . "' where id = '" . $id . "'"
                    );

                    if(!$result)
                        return "Error updating item!";
                    else if(mysql_affected_rows() < 1)
                        return "No item updated, possibly item not found with id: " . $id . "!";
                    else
                        return "Item updated successfully!";

                }

                return "'id' of the item to be updated is required. Add it to the end of url";
            }

            if ($this->method == 'DELETE') {
                
                if (sizeof($args) > 0) {
                    $id = $args[0];

                    $result = mysql_query(
                        "DELETE from item where id = '" . $id . "'"
                    );

                    if(!$result)
                        return "Error deleting item!";
                    else if(mysql_affected_rows() < 1)
                        return "No item deleted, possibly item not found with id: " . $id . "!";
                    else
                        return "Item deleted successfully!";
                }

                return "'id' of the item to be deleted is required. Add it to the end of url";
            }
         }
     }
?>