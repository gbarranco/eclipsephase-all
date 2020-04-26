FROM nginx:latest
MAINTAINER Guillaume BARRANCO <guillaume.barranco@free.fr>

ARG DOCKER_UID
ARG DOCKER_GID

COPY ./root/update_uid_gid.sh /root/update_uid_gid.sh

RUN /root/update_uid_gid.sh
