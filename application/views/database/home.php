<table>

<?php
/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 9/17/2017
 * Time: 4:35 PM
 */
foreach ($allUser->result() as $user):
?>
<tr>
    <td>
        <?php echo $user->uId?>
    </td>
    <td>
        <?php echo $user->firstName?>
    </td>

    <td>
        <?php echo $user->lastName?>
    </td>

    <td>
        <?php echo $user->uId?>
    </td>
</tr>
<?php endforeach;?>

</table>