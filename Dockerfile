# Menggunakan image PHP dengan Nginx dan PostgreSQL support
FROM php:8.3-fpm

# Install dependencies dan PostgreSQL driver
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory di dalam container
WORKDIR /var/www

# Copy semua file proyek ke dalam container
COPY . .

# Install dependensi PHP menggunakan Composer
RUN composer install --no-dev --optimize-autoloader

# Copy file konfigurasi Nginx (jika ada, sesuaikan dengan kebutuhanmu)
# COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

# Expose port
EXPOSE 9000

# Jalankan php-fpm untuk Laravel
CMD ["php-fpm"]
