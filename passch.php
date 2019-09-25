<?php

if( $_POST ){
	
	$fname = $_POST['oldpass'];
	$lname = $_POST['newpass'];
	$email = $_POST['cnewpass'];
	?>
    
    <div class="alert alert-info">
            <strong>Success</strong>, Password change Successfully...
    </div>
    
    
    <tr>
    <td>First Name</td>
    <td><?php echo $fname ?></td>
    </tr>
    
    <tr>
    <td>Last Name</td>
    <td><?php echo $lname ?></td>
    </tr>
    
    <tr>
    <td>Your eMail</td>
    <td><?php echo $email; ?></td>
    </tr>
    
    <tr>
    <td>Contact No</td>
    <td><?php echo $phno1; ?></td>
    </tr>
    <tr>
    <td>First Name</td>
    <td><?php echo $fname1 ?></td>
    </tr>
    
    <tr>
    <td>Last Name</td>
    <td><?php echo $lname1 ?></td>
    </tr>
    
    <tr>
    <td>Your eMail</td>
    <td><?php echo $email1; ?></td>
    </tr>
    
    <tr>
    <td>Contact No</td>
    <td><?php echo $phno; ?></td>
    </tr>
    
    </table>
    <?php
	
}