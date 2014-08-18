<h1>Partner Enquiry Form</h1>

<table>
	<tbody>
		<tr>
			<td style="font-weight: bold;">Company Name</td>
			<td><?= $_POST['company_name'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Street Address</td>
			<td><?= $_POST['address'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">City</td>
			<td><?= $_POST['city'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">State</td>
			<td><?= $_POST['state'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Postcode</td>
			<td><?= $_POST['postcode'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Email Address</td>
			<td><?= $_POST['email'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Principal Phone</td>
			<td><?= $_POST['principal_phone'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Secondary Phone</td>
			<td><?= $_POST['secondary_phone'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">ABN</td>
			<td><?= $_POST['abn'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">ACN</td>
			<td><?= $_POST['acn'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Website</td>
			<td><?= $_POST['website'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Business Type</td>
			<td><?= $_POST['business_type'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Customer Base</td>
			<td><?= $_POST['customer_base'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Marketing Plan</td>
			<td><?= nl2br($_POST['marketing_plan']) ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Current Anti-Virus</td>
			<td><?= nl2br($_POST['current_antivirus']) ?></td>
		</tr>

	</tbody>
</table>