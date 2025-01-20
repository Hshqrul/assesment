<?php
if (isset($_POST['action']) && $_POST['action'] == 'myFunction') {
    myFunction();
}

function myFunction() {
    echo "Hello from PHP!";
}
?>
