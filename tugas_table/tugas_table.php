<!DOCTYPE html>
<html>
    <head>
        <title>alamat ip</title>
    </head>
    <body>
        <h1>alamat ip localhost</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td bgcolor="grey" colspan="4"> ip address</td>
                <td bgcolor="grey" colspan="2"> hostname</td>
            </tr>
            <tr>
                <td colspan="4">
                    <?php
                    $ip=$_SERVER['REMOTE_ADDR'];
                    echo "$ip";
                    ?>
                </td>
                <td colspan="2"> <?php
                    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                    echo "$hostname";
                ?></td>
            </tr>
        </table>
        
    </body>
</html>