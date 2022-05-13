<p align="center">
    <img src="https://github.com/GeeksHubsAcademy/2020-geekshubs-media/blob/master/image/logo.png" >	
</p>


    Considere el siguiente problema:

    Escriba un programa corto que permita validar el formato DNI español con las siguientes 
	especificaciones.
    
	Dado un input de entrada :

	* 	No puede ser nulo o vacío
    *	Debe de contener 8 números 
	*	Debe de tener una sola letra
	* 	Su tamaño no puedo ser mayor que 9, ni tampoco menor a éste
	*	La letra debe de estar al final de la cadena
	*	La letra debe de ser mayúscula
	*	La letra se calcula haciendo el módulo del alfabeto castellano (sin la 'Ñ','O','I','U') aplicado a los
		números del DNI
    
    En la carpeta 'src/Documento.php' se encuentra el fichero con la definición de nuestros métodos vacíos.
    
        *   El método 'dni' contine la resolución de si un input de entrada es correcto o no.
        *   El método 'getKeyFromDigits' calcula la letra del DNI.

    En la carpeta 'test/DocumentoTest.php' se encuentra el fichero con la suite de test.


    El modus operandi de trabajo es el siguiente:
    
    Debes 'forkear' el proyecto a tu cuenta.
    Puedes hacer PR's ilimitadas e ir validando poco a poco la solución contra nuestro respositorio con CI.
    Puedes trabajar en local y subir la solución haciendo un PR a nuestro repositorio.
    Cuando se envíe la PR final, debes indicar el tiempo de dedicación y los intentos que has hecho.
    También puedes añadir un comentario para dar cualquier tipo de feedback.
    
    En caso de duda, revisa en el apartado de 'Referencias'.

    Runtime:       PHP 7.2
    Configuration: ./203-ts-php/phpunit.xml

    Time: 00:14.020, Memory: 08.25 MB

    .....................................................             53 / 53 (100%)                                                            53 / 53 (100%)
   
    OK (53 tests, 53 assertions)
    Process finished with exit code 0
