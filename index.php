# Dockerfile NGINX + PHP-FPM - ALTERNATIVA SEM APACHE
FROM php:8.3-fpm

# Instala NGINX e dependências
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        nginx \
        libpng-dev \
        libonig-dev \
        libjpeg-dev \
        libfreetype6-dev \
        && docker-php-ext-configure gd --with-freetype --with-jpeg \
        && docker-php-ext-install -j$(nproc) \
            mbstring \
            exif \
            pcntl \
            bcmath \
            gd \
        && apt-get clean \
        && rm -rf /var/lib/apt/lists/*

# Configuração do NGINX
RUN echo 'server {\n\
    listen $PORT;\n\
    server_name _;\n\
    root /var/www/html;\n\
    index index.php index.html;\n\
    \n\
    location / {\n\
        try_files $uri $uri/ /index.php?$query_string;\n\
    }\n\
    \n\
    location ~ \.php$ {\n\
        fastcgi_pass 127.0.0.1:9000;\n\
        fastcgi_index index.php;\n\
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;\n\
        include fastcgi_params;\n\
    }\n\
    \n\
    location ~ /\.ht {\n\
        deny all;\n\
    }\n\
}\n\
' > /etc/nginx/sites-available/default

# Copia o site
WORKDIR /var/www/html
COPY . .

# Permissões
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Configura porta
ENV PORT=8080
EXPOSE $PORT

# Script de inicialização
RUN echo '#!/bin/bash\n\
# Substitui $PORT na config do NGINX\n\
sed -i "s/\$PORT/'$PORT'/g" /etc/nginx/sites-available/default\n\
# Inicia PHP-FPM em background\n\
php-fpm -D\n\
# Inicia NGINX em foreground\n\
nginx -g "daemon off;"\n\
' > /start.sh && chmod +x /start.sh

CMD ["/start.sh"]
