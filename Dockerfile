# Usando uma imagem base do Apache com suporte a PHP
FROM php:7.4-apache

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli

COPY . /var/www/html

EXPOSE 8080

# Mudando o Apache para ouvir na porta 8080
RUN echo "Listen 8080" >> /etc/apache2/ports.conf

# Defina o comando para iniciar o Apache no modo em segundo plano
CMD ["apache2-foreground"]
