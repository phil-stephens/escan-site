<h1><?= $subject ?></h1>

<table>
	<tbody>
		<tr>
			<td style="font-weight: bold;">Name</td>
			<td><?= $_POST['name'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Email Address</td>
			<td><?= $_POST['email'] ?></td>
		</tr>

		<tr>
			<td style="font-weight: bold;">Message</td>
			<td><?= nl2br($_POST['message']) ?></td>
		</tr>
	</tbody>
</table>