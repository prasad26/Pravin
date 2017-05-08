<?php
/**
 * Created by PhpStorm.
 * User: PraviinM
 * Date: 11/3/15
 * Time: 10:36 AM
 */

require_once("config.php");


?>



<form name="billing">
	<div align="center">
        <h1 align="center">Billing Info</h1>
        <table border="0" cellpadding="2px">
        	<tr><td>Order Total:</td><td><?=get_order_total()?></td></tr>
            <tr><td>Your Name:</td><td><input type="text" name="name" /></td></tr>
            <tr><td>Address:</td><td><input type="text" name="address" /></td></tr>
            <tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
            <tr><td>Phone:</td><td><input type="text" name="phone" /></td></tr>
            <tr><td>&nbsp;</td><td><input type="submit" value="Place Order" /></td></tr>
        </table>
	</div>
</form>

