<?php
// Set the default status to closed
$status = 'closed';

// If the button parameter is present in the request and has a value of "door", set the status to open
if (isset($_POST['button']) && $_POST['button'] === 'door') {
    $status = 'open';
}

// Write the status to a file on the server
file_put_contents('door_status.txt', $status);

// Return the status as a response to the client
echo $status;
?>
