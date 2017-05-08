<?php

require_once("config.php");
require_once("header.php");


if($_REQUEST['command']=='delete'){
  remove_product($_REQUEST['pid']);
}
else if($_REQUEST['command']=='clear'){
  unset($_SESSION['shoppingCart']);
}
else if($_REQUEST['command']=='update'){

  $max=count($_SESSION['shoppingCart']);
  //print $max;
  for($i=0;$i<$max;$i++){
    $pid=$_SESSION['shoppingCart'][$i]['product_code'];
    //print $pid;
    $variablevalue = 'product'.$pid;
    print $variablevalue;
    $q= intval($_REQUEST['product'.$pid]);
    print $q;

    if($q>0 && $q<=999){
      $_SESSION['shoppingCart'][$i]['qty']=$q;
    }

    else{
      $errors = array();
      $errors[]='Some proudcts not updated!, quantity must be a number between 1 and 999';
    }
  }
}

?>

<title>Shopping Cart</title>


<script language="javascript">
	function del(pid){
      if(confirm('Do you really mean to delete this item')){
        document.form1.pid.value=pid;
        document.form1.command.value='delete';
        document.form1.submit();
      }
    }

    function clear_cart(){
      if(confirm('This will empty your shopping cart, continue?')){
        document.form1.command.value='clear';
        document.form1.submit();
      }
    }

    function update_cart(){
      document.form1.command.value='update';
      document.form1.submit();
    }


</script>



</head>

<form name="form1" method="post">

<input type="text" name="pid" />
<input type="text" name="command" />


	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Your Shopping Cart</h1>

      <input type="button" value="Continue Shopping" onclick="window.location='index.php'" />
    </div>
    	<div style="color:#F00"><?php print_r($errors); ?></div>

    	<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
    	<?php

        if(is_array($_SESSION['shoppingCart'])){
          echo '
            <tr bgcolor="#FFFFFF" style="font-weight:bold">
            <td>Serial</td>
            <td>Name</td>
            <td>Price</td>
            <td>Qty</td>
            <td>Amount</td>
            <td>Options</td>
            </tr>';


          $max=count($_SESSION['shoppingCart']);

          for($i=0;$i<$max;$i++){
            $pid=$_SESSION['shoppingCart'][$i]['product_code'];
            $q=$_SESSION['shoppingCart'][$i]['qty'];
            $pname=get_product_name($pid);

            //if($q==0) continue;
            ?>

            <tr bgcolor="#FFFFFF">
              <td><?php print $i+1; ?></td>
              <td><?php print $pname; ?></td>
              <td>$ <?php print get_price($pid); ?></td>
              <td><input type="text" name="product<?php print $pid; ?>" value="<?php print $q; ?>" maxlength="3" size="2" /></td>
              <td>$ <?php print get_price($pid)*$q; ?></td>
              <td><a href="javascript:del('<?php print $pid; ?>')">Remove</a></td>
            </tr>
            <?php
          }
          ?>
				<tr>
                <td><b>Order Total: $<?php print get_order_total(); ?></b></td>
                <td colspan="5" align="right"><input type="button" value="Clear Cart" onclick="clear_cart()">
                  <input type="button" value="Update Cart" onclick="update_cart()">
                  <input type="button" value="Place Order" onclick="window.location='billing.php'">
                </td></tr>
          <?php
        }
        else{
          echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
        }
        ?>
        </table>
      <div style="height: 500px;"> </div>
    </div>
</form>



    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active"> SHOPPING CART</li>
        </ul>
        <h3>  SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
        <hr class="soft"/>
        <table class="table table-bordered">
            <tr><th> I AM ALREADY REGISTERED  </th></tr>
            <tr>
                <td>
                    <form class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label" for="inputUsername">Username</label>
                            <div class="controls">
                                <input type="text" id="inputUsername" placeholder="Username">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Password</label>
                            <div class="controls">
                                <input type="password" id="inputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        </table>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Quantity/Update</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Tax</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> <img width="60" src="themes/images/products/4.jpg" alt=""/></td>
                <td>MASSA AST<br/>Color : black, Material : metal</td>
                <td>
                    <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
                </td>
                <td>$120.00</td>
                <td>$25.00</td>
                <td>$15.00</td>
                <td>$110.00</td>
            </tr>
            <tr>
                <td> <img width="60" src="themes/images/products/8.jpg" alt=""/></td>
                <td>MASSA AST<br/>Color : black, Material : metal</td>
                <td>
                    <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
                </td>
                <td>$7.00</td>
                <td>--</td>
                <td>$1.00</td>
                <td>$8.00</td>
            </tr>
            <tr>
                <td> <img width="60" src="themes/images/products/3.jpg" alt=""/></td>
                <td>MASSA AST<br/>Color : black, Material : metal</td>
                <td>
                    <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
                </td>
                <td>$120.00</td>
                <td>$25.00</td>
                <td>$15.00</td>
                <td>$110.00</td>
            </tr>

            <tr>
                <td colspan="6" style="text-align:right">Total Price:	</td>
                <td> $228.00</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align:right">Total Discount:	</td>
                <td> $50.00</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align:right">Total Tax:	</td>
                <td> $31.00</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align:right"><strong>TOTAL ($228 - $50 + $31) =</strong></td>
                <td class="label label-important" style="display:block"> <strong> $155.00 </strong></td>
            </tr>
            </tbody>
        </table>


        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>
                    <form class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
                            <div class="controls">
                                <input type="text" class="input-medium" placeholder="CODE">
                                <button type="submit" class="btn"> ADD </button>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>

            </tbody>
        </table>

        <table class="table table-bordered">
            <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
            <tr>
                <td>
                    <form class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label" for="inputCountry">Country </label>
                            <div class="controls">
                                <input type="text" id="inputCountry" placeholder="Country">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPost">Post Code/ Zipcode </label>
                            <div class="controls">
                                <input type="text" id="inputPost" placeholder="Postcode">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn">ESTIMATE </button>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
        <a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
        <a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>

    </div>
    </div></div>
    </div>
<?php require_once("footer.php"); ?>