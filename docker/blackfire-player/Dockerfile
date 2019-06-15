FROM php:7.3-cli-alpine

RUN apk add --no-cache wget && \
    wget http://get.blackfire.io/blackfire-player.phar && \
    mv blackfire-player.phar /usr/local/bin/blackfire-player && \
    chmod +x /usr/local/bin/blackfire-player

WORKDIR /app
ENTRYPOINT ["/usr/local/bin/blackfire-player"]
