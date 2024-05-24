*********************
WEVAI - Prueba técnica
por Pedro Gil
***********************

REQUERIMIENTO

Desarrollar el módulo de la derecha, tanto en desktop como mobile, utilizando únicamente PHP, SCSS/CSS y JS.

Respetar las distancias, tamaños y pesos de texto, colores y demás detalles
- Exportar las imágenes directamente desde este Figma
- Usar fuente Montserrat [https://fonts.google.com/specimen/Montserrat]
- El módulo debe estar contenido en una caja de 1440px de ancho máximo
- Usar la librería Swiper [https://swiperjs.com/get-started#use-swiper-from-cdn]
- Añadir efecto de hover a los bloques como se muestra en el primero
- Al hacer click en “Más información” en cualquier bloque:
    - Debe aparecer la modal de abajo con un efecto de fade-in
    - La modal debe contener el título del bloque clickado
    - La modal debe desaparecer al clickar en el fondo oscurecido o en “Lo quiero” con un efecto de fade-out


/*  PLANTEAMIENTO */

Estructura de carpetas y archivos favoreciendo la separación de funciones, componentes y demás 
con la idea de favorecer su reutilización y la escalabilidad del proyecto, simulando que este componente
forma parte de un proyecto más amplio.

El proyecto ha sidp desarrollo utilizando Visual Studio Code, con un servidor local configurado
mediante el comando php -S localhost:8000, permitiendo probar y desarrollar la aplicación web antes de llevarlo a producción.

 
/* DESARROLLO */
1. Trasladar info del diseño y convertirla en variables (tamaños, colores, etc).

2. Desarrollar partes del componente.

    /* SWIPER */

    - Instalar librería. ✔

    - Loop para generar las tarjetas de proyecto como sliders. ✔

        Nota: Por falta de tiempo y desconocimiento de la librería, opto por overridear el estilo de swiper con !important. 🔨

    - Swiper customizado en mayor parte. Overrideando swiper slide height. ✔

    /* MODAL */
    - Modal consiste en:
        - Modal container con la información del proyecto y el botón de compra. ✔
        - Modal multiply. ✔

    - Animación que permita hacer fade in y fade out. ✔
        Nota: conflicto entre propiedad display y opacity. 
            Solucionado usando setTimeOut. ✔

        Nota: conflicto entre transiciones, opacidad y mix-blend-mode de los distintos elementos del modal. 
            Solucionado separando la adición y eliminación de clases. ✔

    - Función para dar formato al precio, separando entero y decimal para aplicarles diferentes tamaños. ✔
        functions.php > formatPrice()

    /* BUTTONS */

    INFO BTN:
    - Cambiar contenido de botones según resolución. ✔
        buttons.js > updateButtonText();

    - Guardar la id del proyecto en el dataset de cada elemento proyecto. ✔

    - Al clicar llama a la función que muestra el modal usando la id del proyecto. ✔

    

    BUY BTN:
    - Al clicar en ¡Lo quiero! se llama a la función para comprar y cerrar el modal. ✔
        - Añadir clase fade out. ✔
        - Vaciar el texto del modal. ✔
        - Borrar clase fade out. ✔
        - Cambiar el atributo style del modal a none. ✔
    

    Nota: Añadido hover style por decisión propia para mejorar UX.

    
