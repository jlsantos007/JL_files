<html lang="en">
    <head>
        <title>CodeIgniter TempData Example</title>
    </head>

    <body>
        Temp Data Example
        <h2><?php echo $this->session->tempdata('item');?></h2>
        <a href="tempdata/add">Click Here</a> to add temp data.
    </body>

</html>
