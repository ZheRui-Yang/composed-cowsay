# Docker composed fortune cowsay

A static website application shows a ASCII cow saying a random fortune, base on docker-compose.

![thumbnail](thumbnail.jpg)

Docker composes two separate part of service:

1. A python flask server to produce cowsay and fortune string
2. A Xampp docker container host a website

## Requirements

- Docker
- Docker-compose

## Usage

First run this command

```console
$ docker compose up
```

Then navigate your web browser to `localhost:41062/www` and enjoy the wisdom of cow!

(Tip: you can append `?char=trex` to the URL to change the cow to a T-Rex)

To close server, push \<Ctrl-C> to stop containers. After containers are stopped, use command below to teardown docker compose

```console
$ docker compose down
```
