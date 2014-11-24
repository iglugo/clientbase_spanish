clientbase_spanish
==================

Versión libre de myClientBase, aplicación de facturación en la nube. Esta versión tiene integrada la librería de mPDF para evitar problemas en la renderización de caracteres latinos a la hora de generar PDFs y la traducción en español. 
Instalación:
------------

1. Subir los archivos a la web

2. Modificar los permisos de las siguientes carpetas para que se puedan escribir en ellas:
    - /application/helpers/dompdf/lib/fonts/
    - /application/modules_core/invoices/views/invoice_templates/
    - /application/modules_core/payments/views/receipt_templates/
    - /uploads/

3. Crear una base de datos mySQL e introducir los datos en el archivo: /application/config/database.php
    - $db['default']['hostname'] = 'tu_bbdd_hostname';
    - $db['default']['username'] = 'tu_bbdd_username';
    - $db['default']['password'] = 'tu_bbdd_password';
    - $db['default']['database'] = 'tu_bbdd_name';

4. Continuar con la instalación yendo al siguiente link: http://nombre_del_dominio.com/index.php/setup

5. Finalmente, una vez instalada la aplicación, en configuración de sistema podremos cambiar el idioma, y luego en la pestaña GENERAL deberemos de cambiar nuestro general pdf de dompdf --> mpdf para no tener problemas a la hora de generar PDFs si usamos carácteres especiales como tildes, símbolo del euro, eñe, etc.. 
