<?php
//application functions

function get_category_list() {
  include 'connection.php';

  try {
    return $db->query('SELECT category_id, title FROM categories');
  } catch (Exception $e) {
    echo "Error : " . $e->getMessage() . "<br>";
    return array();
  }
}

function get_product_list() {
    include 'connection.php';

    $sql = 'SELECT products.*, categories.title as category FROM products'
        . ' JOIN categories ON products.category_id = categories.category_id';

    try {
        return $db->query($sql);
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return array();
    }
}


function add_category($title){
    include 'connection.php';

    $sql = 'INSERT INTO categories(title) VALUES(?)';

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $title, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

function add_product($category_id, $title, $description){
    include 'connection.php';

    $sql = 'INSERT INTO products(category_id, title, description) VALUES(?, ?, ?)';

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $category_id, PDO::PARAM_INT);
        $results->bindValue(2, $title, PDO::PARAM_STR);
        $results->bindValue(3, $description, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}
