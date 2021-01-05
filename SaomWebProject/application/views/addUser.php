<html>
    <head>
        <title>Add an User</title>
    </head>
    <body>
        <div>
           
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <h2>Register</h2>
                <p><a href="<?php echo base_url(); ?>index.php/SaomBase" class="back"><-Back to Home Menu</a></p>

                <p><strong>First Name:</strong><br/>
                    <input type="text" name="studentFName" value="<?php echo set_value('studentFName'); ?>" placeholder="Enter First Name" id="special"/></p>
                <?php echo form_error('studentFName'); ?>
                <p><strong>Last Name:</strong><br/>
                    <input type="text" name="studentLName" value="<?php echo set_value('studentLName'); ?>" placeholder="Enter Last Name" id="special"/></p>
                <?php echo form_error('studentLName'); ?> 
                <p><strong>Email:</strong><br/>
                    <input type="email" name="emailAddress" value="<?php echo set_value('emailAddress'); ?>" placeholder="Enter Email" id="special"/></p>
                <?php echo form_error('emailAddress'); ?> 
                <p><strong>Password:</strong><br/>
                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Enter Password" id="special"/></p>
                <?php echo form_error('password'); ?> 
                <p><strong>Address:</strong><br/>
                    <input type="text" name="Address" value="<?php echo set_value('Address'); ?>" placeholder="Enter Address" id="special"/></p>
                <?php echo form_error('Address'); ?> 
                <p><strong>Phone Number:</strong><br/>
                    <input type="text" name="phoneNumber" value="<?php echo set_value('phoneNumber'); ?>" placeholder="Enter Phone Number" id="special"/></p>
                <?php echo form_error('phoneNumber'); ?> 
                <p><strong>Course:</strong><br/>
                    <input type="text" name="Course" value="<?php echo set_value('Course'); ?>" placeholder="Enter Course" id="special"/></p>
                <?php echo form_error('Course'); ?> 
                <p><strong>DOB:</strong><br/>
                    <input type="date" name="DOB" value="<?php echo set_value('DOB'); ?>" placeholder="Enter DOB" id="special"/></p>
                <?php echo form_error('DOB'); ?> 


                <p><input type="submit" name="submit" value="Register"></p>
            </form>
        </div>
    </body>
</html>