function loadSVG(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            callback(null, xhr.responseText);
        } else {
            callback(new Error(xhr.statusText), null);
        }
    };
    xhr.onerror = function() {
        callback(new Error('Network error'), null);
    };
    xhr.send();
}

document.addEventListener('DOMContentLoaded', function() {
    loadSVG('/imgs/mapa.svg', function(error, svg) {
        if (error) {
            console.error('Error cargando el SVG:', error);
            return;
        }

        // Insertar el SVG en el contenedor
        document.getElementById('svg-container').innerHTML = svg;

        // Seleccionar los elementos del SVG
        let pathSvg = document.querySelector('svg');

        let Brasil = pathSvg.querySelector('#Brasil');
        let Uruguay = pathSvg.querySelector('#Uruguay');
        let EstadosUnidos = pathSvg.querySelector('#EstadosUnidos');
        let Suiza = pathSvg.querySelector('#Suiza');
        let NuevaZelanda = pathSvg.querySelector('#NuevaZelanda');
        let Bvi = pathSvg.querySelector('#Bvi');

        let paises = [Brasil, Uruguay, EstadosUnidos, Suiza, NuevaZelanda, Bvi];

        let data = {
            Brasil : {
                direccion : 'Avenida Paulista, 1234',
                ciudad: 'São Paulo',
                telefono : '+55 (11) 91234-5678',
            },
            Uruguay : {
                direccion : 'Calle 18 de Julio, 567',
                ciudad: 'Montevideo',
                telefono : '+598 (98) 123-4567',
            },
            EstadosUnidos : {
                direccion : '742 Evergreen Terrace',
                ciudad: 'Springfield',
                telefono : '+1 (555) 123-4567',
            },
            Suiza : {
                direccion : 'Bahnhofstrasse 1',
                ciudad: 'Zürich',
                telefono : '+41 (44) 123-4567',
            },
            NuevaZelanda : {
                direccion : 'Bag End, Hobbiton',
                ciudad: 'La Comarca',
                telefono : '+64 (21) 123-4567',
            },
            Bvi : {
                direccion : '123 Palm Tree Avenue',
                ciudad: 'Charlotte Amalie, St. Thomas',
                telefono : '+1 (340) 555-1234',
            },
        }
        
        // Agregar evento mouseover a cada país
        paises.forEach(function(pais) {
            pais.addEventListener('mouseover', function() {
                let recuadro = document.createElement('div');
                let lista = document.createElement('ul');
                let direccion = document.createElement('li');
                let ciudad = document.createElement('li');
                let telefono = document.createElement('li');

                recuadro.classList.add('recuadro');
                
                // Debe aparecer debajo del path
                recuadro.style.position = 'fixed';
                recuadro.style.top = this.getBoundingClientRect().bottom + 'px';
                recuadro.style.left = this.getBoundingClientRect().left + 'px';

                recuadro.style.backgroundColor = '#FBFAF8';
                recuadro.style.border = '0.25px solid #A99C6B';
                recuadro.style.paddingTop = '20px';
                recuadro.style.paddingRight = '20px';

                direccion.textContent = data[this.id].direccion;
                ciudad.textContent = data[this.id].ciudad;
                telefono.textContent = data[this.id].telefono;

                lista.appendChild(direccion);
                lista.appendChild(ciudad);
                lista.appendChild(telefono);

                recuadro.appendChild(lista);

                document.body.appendChild(recuadro);
            });

            pais.addEventListener('mouseout', function() {
                let recuadro = document.querySelector('.recuadro');
                if (recuadro) {
                    recuadro.remove();
                }
            });
        });

    });
});