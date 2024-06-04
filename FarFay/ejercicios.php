<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <img src="assets/images/SC.png"alt="logo" width="80" height="62">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                
                                <li>
                                    <a href="ejercicios.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Chat Global</span></a>
                                    <a href="ejercicios.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Chat Local</span></a>
                                    <a href="ejercicios.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Chat del Team</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://cdn-icons-png.flaticon.com/512/2744/2744146.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Usuario</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            
                           
                            <li>
                                <a href="index.php"  class="nav-link px-0"> <span class="d-none d-sm-inline">Cerrar Sesion</span></a>
                            </li>
                    </div>
                </div>
            </div>
           <div class="col py-3">
                <div class="container">
                    <h1 class="display-4">¡Reserva Fácil! ¡Reserva Ahora!</h1>
                    <div class="d-flex justify-content-start mb-3">
                        <button class="btn btn-primary" onclick="mostrarEjercicios('casa')">Destinos en México</button>
                        <button class="btn btn-primary ms-2" onclick="mostrarEjercicios('gym')">Destinos Internacionales</button>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4" id="ejerciciosContainer">
                    </div>
                </div>
            </div>
        </div>
    </div>  

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 

     <script>
        // Función para cambiar entre ejercicios en casa y de gimnasio
        function mostrarEjercicios(tipo) {
            const ejerciciosContainer = document.getElementById('ejerciciosContainer');
            ejerciciosContainer.innerHTML = ''; // Limpiar el contenido anterior

            // Agregar tarjetas de ejercicios según el tipo seleccionado
            if (tipo === 'casa') {
                agregarEjercicio('Maroma Beach Riviera Cancún', 'Este elegante resort, un sugerente santuario escondido entre las playas de arena blanca de Riviera Cancún, ofrece lo máximo en placer y lujo.', 'assets/images/Maroma.jpg', 'https://www.youtube.com/watch?v=ps8F77nh8N4', 'https://www.hyatt.com/es-ES/hotel/mexico/secrets-maroma-riviera-cancun/semrc#quickbook');
                agregarEjercicio('Hotel Xcaret Arte', 'un espectacular resort todo incluido frente al mar Caribe en Playa del Carmen, donde se rinde tributo al arte y gastronomía de México.', 'assets/images/Xcaret_Arte.jpg', 'https://www.youtube.com/watch?v=oYyxFPjaEYE', 'https://www.hotelxcaretarte.com/es/');
                agregarEjercicio('Grand Fiesta Americana Coral Beach Cancun All Inclusive', 'Este hotel ofrece la combinación perfecta de lujo y elegancia.Disfrute en nuestro lujoso resort todo incluido en Cancún.', 'assets/images/Americana.jpg', 'https://www.youtube.com/watch?v=ukUnVyQoDMk', 'https://www.grandfiestamericana.com/hoteles-y-resorts/grand-fiesta-americana-coral-beach-cancun-all-inclusive-spa-resort/habitaciones');
                
                // Agregar más ejercicios en casa aquí según sea necesario
            } else if (tipo === 'gym') {
                agregarEjercicio('Hotel Aurora Villa Alaska', 'Propiedad de la familia Gregorio desde 1965, está ubicada en un hermoso entorno entre montañas, el lago, el bosque y las flores.', 'assets/images/Aurora_Villa.jpg', 'https://www.youtube.com/watch?v=SE5RcW4vip8', 'https://hotels.cloudbeds.com/reservation/673OzB#checkin=2024-05-13&checkout=2024-05-14');
                agregarEjercicio('The St. Regis Roma', 'Presentado en la sociedad romana en 1894, el icónico St. Regis Rome es un hotel histórico ubicado en uno de los palacios más impresionantes de la ciudad.', 'assets/images/Roma.jpg', 'https://www.youtube.com/watch?v=eONyxcACz6k', 'https://www.marriott.com/es/hotels/romxr-the-st-regis-rome/overview/');
                agregarEjercicio('Hotel Danieli Venecia', 'Experimente el lujo de 5 estrellas en el Hotel Danieli, con alojamiento elegante, un restaurante en la azotea con impresionantes vistas a la laguna y arquitectura histórica veneciana.', 'assets/images/Venecia.jpg', 'https://www.youtube.com/watch?v=jIhEJD_a9NY', 'https://reservations.hoteldanieli.com/?adult=1&arrive=2024-05-13&chain=30442&child=0&currency=EUR&depart=2024-05-14&hotel=40764&level=hotel&locale=en-US&rooms=1');   
                
                // Agregar más ejercicios de gimnasio aquí según sea necesario
            }
        }

        // Función para agregar una tarjeta de ejercicio al contenedor
        function agregarEjercicio(titulo, descripcion, imagen, videoEnlace, compraEnlace) {
            const ejerciciosContainer = document.getElementById('ejerciciosContainer');
            const ejercicioCard = document.createElement('div');
            ejercicioCard.classList.add('col');
            ejercicioCard.innerHTML = `
                <div class="card h-100">
                    <img src="${imagen}" class="card-img-top" alt="${titulo}">
                    <div class="card-body">
                        <h5 class="card-title">${titulo}</h5>
                        <p class="card-text">${descripcion}</p>
                        
                        <a href="${compraEnlace}" target="_blank" class="btn btn-success mt-2">¡Reservar Ahora!</a>
                    </div>
                </div>
            `;
            ejerciciosContainer.appendChild(ejercicioCard);
        }

        // Mostrar inicialmente ejercicios en casa al cargar la página
        window.onload = function() {
            mostrarEjercicios('casa');
        };
    </script>


</body>
</html>

