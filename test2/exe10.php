<?php
	$ham_price= 4.95;
	$cho_price=1.95;
	$cola_price= 85;

	$tham_price= 2 * 4.95;
	$tcho_price= 1*1.95;
	$tcola_price= 85/100;
	$all_total=$tham_price+$tcho_price+$tcola_price;

	$sales_tax=(7.5/100);
	$pre_tax=(16/100);
	$sales_alltax= $all_total * $sales_tax;
	$allpre_tax=$all_total * $pre_tax;
	$total_price= $all_total+$sales_alltax+$allpre_tax;



echo "<table border=1 cellspacing=0 cellpadding=5px item-align=center>";
echo "<thead>
		<tr>
			<th colspan='5'>INVOICE</th>
			
		</tr>
		<tr>
			<th>No</th>
			<th>Items</th>
			<th>Qty</th>
			<th>Price</th>
			<th>Subtotal</th>
		</tr>

	</thead>
	<tbody>
			<tr>
				<td>1</td>
				<td>Hamburgers</td>
				<td>2</td>
				<td>4.95</td>
				<td>$tham_price</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Chocolate Milkshake</td>
				<td>1</td>
				<td>1.95</td>
				<td>$tcho_price</td>

			</tr>
			<tr>
				<td>3</td>
				<td>Cola</td>
				<td>1</td>
				<td>0.85</td>
				<td>$tcola_price</td>
			</tr>
			
			<tr>
				<td colspan=3> Sales tax</td>
				<td colspan=2>$sales_alltax</td>
			</tr>
			

			<tr>
				
				<td colspan=3>Pre Tax</td>
				
				<td colspan=2>$allpre_tax</td>

			</tr>
			<tr>
				
				<td colspan=3>Total price</td>
				
				<td colspan=2>$total_price</td>

			</tr>
	</tbody>
	";

echo "</table>";



?>