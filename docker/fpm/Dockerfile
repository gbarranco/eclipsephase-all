FROM php:fpm
MAINTAINER Guillaume BARRANCO <guillaume.barranco@free.fr>

ARG DOCKER_UID
ARG DOCKER_GID

RUN apt-get update && apt-get install -y unzip gettext-base

COPY ./root/update_uid_gid.sh /root/update_uid_gid.sh

RUN /root/update_uid_gid.sh
