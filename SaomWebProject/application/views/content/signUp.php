


/* s-------------------------------- Can delete is wanted ----------------------s */
<html>
    <head>
        <title>Add an User</title>
    </head>
    <body>
        <div>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <h2>Add Contact Details</h2>
                <p><a href="<?php echo base_url(); ?>SaomBase/index/" class="back"><-Back to Home Menu</a></p>

                <p><strong>First Name:</strong><br/>
                    <input type="text" name="firstName" value="<?php echo set_value('firstName'); ?>" placeholder="Enter First Name" id="special"/></p>
                <?php echo form_error('firstName'); ?>
                <p><strong>Last Name:</strong><br/>
                    <input type="text" name="lastName" value="<?php echo set_value('lastName'); ?>" placeholder="Enter Last Name" id="special"/></p>
                <?php echo form_error('lastName'); ?> 
                <p><strong>Email:</strong><br/>
                    <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter Email Address" id="special"/></p>
                <?php echo form_error('email'); ?> 
                <p><strong>Password:</strong><br/>
                    <input type="text" name="password" value="<?php echo set_value('password'); ?>" placeholder="Enter Password" id="special"/></p>
                <?php echo form_error('password'); ?> 
                <p><strong>Occupation:</strong><br/>
                    <input type="text" name="occupation" value="<?php echo set_value('occupation'); ?>" placeholder="Enter Occupation" id="special"/></p>
                <?php echo form_error('occupation'); ?> 


                <p><input type="submit" name="submit" value="Add Member"></p>
            </form>
        </div>
    </body>
</html>