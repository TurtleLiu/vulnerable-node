$ca = $_POST[’card’];
if($ca matches ’card-1’|’card-2’)
// generate HTML to show a
//selected card in the form

$n = $_POST[’name’];
if( strlen($n) > 10 )
$n = substr ($n, 10);

if($_GET[’op’] == "purchase"){

$cost = $_POST[’quantity’] * $price + $shipping;

if(isset($_POST[’discount’]))
$cost = $cost - $_POST[’discount’] * $cost / 100;

$q = "INSERT INTO orders (‘name‘, ‘address‘, ‘card‘, ‘cost‘) ";
$q .= " VALUES (’$n’, ’$_POST[address]’, $ca, $cost);";

mysql_query($q);
if(mysql_error())
$html .= " Please specify an address";
}
