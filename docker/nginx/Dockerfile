FROM nginx:1.16

RUN apt update \
    && apt install -y curl

COPY ./default.conf /etc/nginx/conf.d/default.conf
