# Dockerfile — SoftEdge Corporation (2025) - SOLUÇÃO DEFINITIVA
FROM php:8.3-apache

# Remove todos os MPMs e deixa apenas o prefork
RUN rm -f /etc/apache2/mods-enabled/mpm_event.* \
          /etc/apache2/mods-enabled/mpm_worker.* && \
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

# Configura Apache para rodar na porta do Railway
ENV PORT=8080
EXPOSE $PORT

# Substitui a porta padrão do Apache
RUN sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf && \
    sed -i "s/:80/:$PORT/g" /etc/apache2/sites-available/000-default.conf && \
    echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Script de start personalizado
RUN echo '#!/bin/bash\n\
# Remove qualquer MPM que possa ter sido ativado\n\
rm -f /etc/apache2/mods-enabled/mpm_event.*\n\
rm -f /etc/apache2/mods-enabled/mpm_worker.*\n\
# Garante que apenas mpm_prefork está ativo\n\
a2enmod mpm_prefork 2>/dev/null || true\n\
# Inicia Apache\n\
exec apache2-foreground\n\
' > /start.sh && chmod +x /start.sh

# Start com script customizado
CMD ["/start.sh"]
