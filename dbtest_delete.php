<?php

include 'hgconnect.php';

$sql = "SELECT * FROM `user_info`";

$result = $db->query($sql);

?>

<p><b>Results:</b></p>  <!-- Display full set of results from database-->

<table border="1" cellpadding="5" cellspacing="0">
    <tr style="text-align: left;">
        <th style="width: 150px;">firstname</th>
        <th style="width: 150px;">lastname</th>
        <th style="width: 150px;">username</th>
        <th style="width: 150px;">password</th>
        <th style="width: 200px;">email</th>
    </tr>

    <?php
    
    while ($row = $result->fetch_object()) {
        $user_id = $row->user_id;
        $firstname = htmlentities($row->firstname, ENT_QUOTES, "UTF-8");
        $lastname = htmlentities($row->lastname, ENT_QUOTES, "UTF-8");
        $username = htmlentities($row->username, ENT_QUOTES, "UTF-8");
        $password = htmlentities($row->password, ENT_QUOTES, "UTF-8");
        $email = htmlentities($row->email, ENT_QUOTES, "UTF-8");
        ?>
    
        <tr>
            <td><?php echo $firstname; ?></td>
            <td><?php echo $lastname; ?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $email; ?></td>
            <td><a href="hgdelete.php?user_id=<?php echo $user_id; ?>">Delete</a></td>
        </tr>
    
        <?php
    
    }

    ?>

</table>


