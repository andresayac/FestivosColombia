# FestivosColombia

### Instalación

```sh
$ git clone https://github.com/andresayac/FestivosColombia.git
```

### Utilizar

```sh
http://127.0.0.1/FestivosColombia
http://localhost/FestivosColombia
```

### Parámetro
Al momento de realizar la petición sin parámetros se toma el día actual en caso de realizar la petición con los parámetros de la tabla sera devuelto un mensaje en json con la información del dia solicitado.

| Parámetro | Ejemplo |
| ------ | ------ |
| day | 01-31 |
| month | 01-12 |
| year | 2000 - 3000 |


### Respuesta(Json)
```sh
festive: true  -> Es Festivo
festive: false -> No Festivo
```

```json
{
  "date": "2020-07-03",
  "festive": false
}
```
