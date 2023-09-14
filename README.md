
# Pokemon Finder

Siga estos pasos para poder ejecutar la app en su maquina




## Instalacion

Clonar el proyecto

```bash
  git clone https://github.com/espindola-lucas/pokemon-finder.git
  cd pokemon-finder
```

Construir imagenes 

```bash
  docker-compose up -d
```

Descargar dependencias 

```bash
  docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer install
```

Copiar el archivo .env.example -> .env

```bash
  cp .env.example .env
```

Darle permisos a la carpeta del proyecto

```bash
  cd ..
  sudo chmod 777 pokemon-finder/ -R
```

Darle permisos a la carpeta del proyecto

```bash
  cd pokemon-finder
  php artisan key:generate
```
    
