#!/usr/bin/env bash

envsubst '\${FPM_HOST} \${FPM_PORT} \${NGINX_HTTP_PORT} \${UPLOAD_MAX_FILESIZE} \${SERVERNAME}' < /etc/nginx/conf.d/eclipse-phase.template > /etc/nginx/conf.d/default.conf
exec nginx-debug -g 'daemon off;'
