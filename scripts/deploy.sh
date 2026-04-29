#!/bin/bash
# Copiar los archivos de la aplicación al directorio del servidor web
cp -r * /var/www/html/

# Reiniciar Apache para aplicar los cambios
systemctl restart httpd

