# Dockerfile
FROM php:8.3-fpm-alpine

# Instala extensões necessárias + curl pra PocketBase
RUN apk add --no-cache \
    libpng-dev \
    oniguruma-dev \
    curl \
    && docker-php-ext-install mbstring exif pcntl bcmath gd

# Copia o site
WORKDIR /var/www/html
COPY . .

# Permissões
RUN chown -R www-data:www-data /var/www/html

# Expõe porta 80 (Railway usa $PORT)
EXPOSE 80

# Start PHP-FPM + servidor embutido (pra Railway)
CMD ["sh", "-c", "php -S 0.0.0.0:$PORT -t /var/www/html"]
