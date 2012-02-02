{extends "base.tpl"}

{block "body"}
	<h2>Edit Service:</h2>
	<form method="POST" action=".">
		<input type="hidden" name="service[type]" value="service" />
		<p>
			<label for="id_service_type">Service Type:</label>
			<input type="text" name="service[service_type]" value="{$service->service_type}" />
		</p>
		<p>
			<input type="submit" value="Add">
		</p>
	</form>
{/block}