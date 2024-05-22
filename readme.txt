Requerimiento

Desarrollar el módulo de la derecha, tanto en desktop como mobile, utilizando únicamente PHP, SCSS/CSS y JS.

Respetar las distancias, tamaños y pesos de texto, colores y demás detalles
Exportar las imágenes directamente desde este Figma
Usar fuente Montserrat [https://fonts.google.com/specimen/Montserrat]
El módulo debe estar contenido en una caja de 1440px de ancho máximo
Usar la librería Swiper [https://swiperjs.com/get-started#use-swiper-from-cdn]
Añadir efecto de hover a los bloques como se muestra en el primero
Al hacer click en “Más información” en cualquier bloque:
Debe aparecer la modal de abajo con un efecto de fade-in
La modal debe contener el título del bloque clickado
La modal debe desaparecer al clickar en el fondo oscurecido o en “Lo quiero” con un efecto de fade-out


Se valorará positivamente

Uso de lógica PHP (bucles, funciones, etc)
Código limpio, comprensible y bien indentado


Modo de entrega

Se entregará un fichero ZIP. Este fichero debe contener todos los archivos necesarios (estilos, imágenes, JS, etc) y un archivo “index.php” que renderize el contenido del ejercicio.


¿Dudas?

Escribirme directamente a victor.navarro@thenorthstudio.com


/********************/
Pre:
 - Guardar las imágenes
 - Instalar fuente Montserrat
 - Instalar swiper

1. Crear index.js con los proyectos

2. Crear variables

    // COLORS
    --black-100: #00051A;
    --black-90: #1A1E32;
    --white-0: #FFFFFF;
    --white-100: #FBFBFC;
    --tertiary-40: #F0F1F4;
    --ultramar-0: #A1AED6;
    --ultramar-100: #133599;
    --brown--100: #4C3326;

    Linear gradient: -41deg;

    // SIZES

    * MAIN *
    --max-w-main--s: 100%;
    --max-w-main--m: 1440px;

    --max-w-header-s: 100%;
    --max-w-header-m: 937px;
   
    * PROJECT CARD *
    --w-card-project--s: 313px;
    --w-card-project--m: 418px;

    --h-card-project--s: 396px;
    --h-card-project--s: 521px;

    * IMG *
    --w-img-project-s: 286.36px; 
    --h-img-project-s: 239.86px; 

    * BUTTON INFO *
    --w-btn-info--m: 163.64px;
    --h-card-project--s: 40px;
    --h-card-project--s: 45px;

    * MODAL *
    --w-modal--s: 328px;
    --h-modal--s: 168px;
    --w-modal--m: 590px;
    --h-modal--m: 225px;

    
    // PADDINGS
    * Main *
    --p-main--s: 100px 32px;
    --p-main--m: 120px 90px auto 90px;

    --p-img-project--s: 13.30px;
    --p-data-project--s: 19px;
    --p-data-project--m: 25.50px;
    --p-btn-info--s: 8px 16px;
    --p-btn-info--m: 81.22px 16.08px;

    // MARGINS
    * PROJECT CARD *
    --margin-card-project--s: 34px;
    --margin-card-project--m: 48px;

    // GAPS
    --gap--s: 15px;
    --gap--m: 20px;

    // BORDERS
    --border-tertiary: 1px solid var(--tertiary-40);
    --rounded-8: 8px;

    // SHADOWS
    1. 
        color: #000000;
        opacity: 5%;
        y = 4px;
        blur = 6px;
    2. 
        color: #000000;
        opacity: 10%;
        y = 0;px;
        blur: 15px;

    // TYPOS 

    // Font family //
    Montserrat

    // Size //

    * Mobile *
    --xs: 14px;
    --s: 18px;
    --m: 20px;
    --l: 22px;

    * Desktop *
    --xs: 11.26px;
    --s: 19.1px;
    --m: 22px;
    --l: 26px
    --xl: 30px;
    --2xl: 30.03px;
    // Weight

    // Line height //

    * Mobile *
    --line-h-auto: auto;
    --line-h--16: 16.1px;
    --line-h--22: 22.2px;
    --line-h--24: 24px;

    * Desktop *
    --line-h-auto: auto;
    --line-h--19: 19.3px;
    --line-h--21: 21.8px;
    --line-h--30: 30px;
    --line-h--41: 41px;

    // Weight //
    --semibold: 600;
    --bold: 700;

2. Crear componentes
    - Proyecto
        - Img
        - Nombre
        - Precio
        - Botón más info
        - Hover: sombra 
        

    - Botón más info
        - Muestra modal con nombre del Proyecto
    - Modal
        - Overlay negro
        - Se muestra en fade-in
        - Desaparece con fade-out
    