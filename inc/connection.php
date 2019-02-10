<?php  
try {
    $db = new PDO("sqlite:".__DIR__."/database.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "Unable to connect";
    exit;
}
try {
    $results = $db->query("SELECT title, category, img FROM Media");
} catch(Exception $e) {
    echo "Unable to retrieve results";
    exit;
}

$catalog = $results->fetchAll();
?>