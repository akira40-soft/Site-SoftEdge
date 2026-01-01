# Dockerfile — SoftEdge Corporation (2025)
FROM php:8.3-apache

# Fix Apache MPM issue - disable all MPMs except prefork
RUN a2dismod mpm_event mpm_worker && \
    a2enmod mpm_prefork rewrite

# Instala apenas o necessário (super leve)
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
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

# Copia o site
WORKDIR /var/www/html
COPY . .

# Permissões corretas
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Configura Apache pra rodar na porta do Railway
ENV PORT=8080
EXPOSE $PORT

# Substitui a porta padrão do Apache pela variável do Railway
RUN sed -i "s/80/$PORT/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Start Apache em foreground
CMD ["apache2-foreground"]
