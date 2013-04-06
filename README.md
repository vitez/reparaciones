Desarrollo propio para reparaciones en tienda Wixair

Ejecución en local, datos para virtual host
<VirtualHost *:80>
	ServerName reparaciones.local
	DocumentRoot "C:\ProjectosSymfony\reparaciones"
	DirectoryIndex app.php
	<Directory "C:\ProjectosSymfony\reparaciones">
		AllowOverride All
		Allow from All
		Deny from None
	</Directory>
</VirtualHost>

hosts:
127.0.0.1 reparaciones.local