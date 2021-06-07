## TECNOLOGÍAS USADAS

- Framework Laravel
- MySql
- Bootstrap
- Livewire
- AlpineJs
- Eloquent
- Docker


## FUNCIONALIDAD

Sistema que emula la funcionalidad de administración de empleados de una empresa. Posee las siguientes características:

- Posee páginas de registro necesarias para poder acceder a la administración de los empleados.

- Utiliza LivewireDatabase para mostrar todo el listado de empleados registrados

- Proporciona un formulario para crear nuevos empleados y para poder editarlos

- Muestra cada empleado de manera independiente

- Muestra a que grupo de trabajo pertenece cada empleado, podiendo ser modificado en tiempo real aprovechando la funcionalidad que proporciona livewire y apoyandose en Alpine.js



## INSTALACIÓN

(Necesario tener instalado DockerDekstop: https://docs.docker.com/docker-for-windows/install/)

Dentro de la carpeta raíz:

    docker-compose up -d


## DESCARGAR IMAGEN PROYECTO DESDE DOCKERHUB

    docker pull amarinprof/ehidra:v1
