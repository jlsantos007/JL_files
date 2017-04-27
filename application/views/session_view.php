<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CodeIgniter Session Example</title>
    </head>

    <body>
        Welcome <?php echo $this->session->userdata('name');?>
        <br>
        <a href="<?php echo base_url().'index.php/sessionex/unset';?>">Click Here</a> to unset session data.
    </body>

</html>
