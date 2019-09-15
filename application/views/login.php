<?php
/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/12/2017
 * Time: 1:21 AM
 */?>

<html>
    <head>
        <title>login</title>
    </head>
<body>
    <form action="<?php echo site_url('input/checkUser')?>" method="get">
            <input type="text" name="email">
            <input type="password" name="password">
            <button type="submit">login</button>
    </form>
</body>
</html>
