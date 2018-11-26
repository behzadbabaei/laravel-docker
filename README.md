# laravel-docker using Apache,redis,postgres

## This repository contains a laravel project which is deployed base on docker containers 

there are 3 services in this project:
    * web
    * db
    * cache

for building web service we use context.context means the source  directory used to buil the containers.we put our Dockerfile inside the ./docker/web.
    
All the mentioned serivces above are configured in docker-composer.yml

Please Note:**The root of your project might vary so you need to configure the dockerfile and docker-compose.yml**.

If you faced a issue runnig the compose proccess, please issue it.

In case of having question please contact:**behzadbabaei69@gmail.com**



