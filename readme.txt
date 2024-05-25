/*  PLANTEAMIENTO */

Estructura de carpetas y archivos favoreciendo la separación de funciones, componentes y demás 
con la idea de favorecer su reutilización y la escalabilidad del proyecto, simulando que este componente
forma parte de un proyecto más amplio.

El proyecto ha sidp desarrollo utilizando Visual Studio Code, con un servidor local configurado
mediante el comando php -S localhost:8000, permitiendo probar y desarrollar cómodamente antes de llevarla a producción.

Scss con Prepros.

 
/* DESARROLLO */
1. Trasladar info del diseño y convertirla en variables (tamaños, colores, etc).

2. Desarrollar partes del componente.

    /* BASE DE DATOS */

    - Crear archivo dataProjectsCarousel.php que contiene datos usados en el componente. ✔
    - Convertirlo en json para uso en front.
        Ubicación: projectsCarousel.php


    /* SWIPER */

    Debe generar un slider por proyecto en la base de datos.

    - Instalar librería. ✔

    - Loop para generar las tarjetas de proyecto como sliders. ✔

        Nota: Por falta de tiempo y desconocimiento de la librería, opto por overridear el estilo de swiper con !important.  🔨

        Update: Swiper customizado en mayor parte. Overrideando swiper slide height. ✔

    - Guardar la id del proyecto en el dataset de cada proyecto mostrado para usarlo en modal. ✔
    

    /* MODAL */

    Debe mostrar el nombre del proyecto y un botón de compra. Al clicar en el botón o en la capa multiply se cierra el modal.

    - Consiste en:
        - Modal container con la información del proyecto y el botón de compra. ✔
        - Modal multiply. ✔

    - Función para dar formato al precio, separando nº entero y decimal para aplicarles diferentes tamaños. ✔
        Ubicación:  functions.php > formatPrice()

    - Función para:
        - Mostrar el modal usando la id del proyecto al clicar sobre botón. ✔
        - Dar clases fade in. ✔
        
        Ubicación:  modal.js > showModal();
    
    - Función para: 
        - Dar y quitar clase fade out. ✔
        - Vaciar el texto del modal. ✔
        - Cambiar el atributo style del modal a none. ✔
        - Cerrar el modal. ✔

        Ubicación:  modal.js > closeModal();


    ❕ Nota: conflicto entre propiedad display y opacity de los elementos en modal. 
        Update: Solucionado usando setTimeOut. ✔

    ❕ Nota: conflicto entre transiciones, opacidad y mix-blend-mode de los elementos en modal. 
        Update: Solucionado separando la adición y eliminación de clases. ✔


    /* BUTTONS */

    INFO BTN:
    - Cambiar contenido de botones según resolución. ✔
        Ubicación: buttons.js > updateButtonText(); (Cambiado)

        Update: Manejo por css para reducir código y consumo de recursos.
            Ubicación: Project info btn > buttons.scss


    BUY BTN:
    Al clicar en ¡Lo quiero! se llama a la función para comprar y cerrar el modal. ✔

    - Función para:
        - Mostrar producto seleccionado ✔
        - Cerrar modal ✔

        Ubicación: modal.js > buyProject();


    Nota: Añadido hover style por decisión propia para mejorar UX.