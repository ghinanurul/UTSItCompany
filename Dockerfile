# Gunakan image dasar PHP
FROM php:8.3-fpm

# Install dependensi sistem dan ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql mbstring


# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory di dalam container
WORKDIR /var/www

# Copy semua file proyek ke dalam container
COPY . .

# Jalankan Composer install setelah semua dependensi siap
RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan key:generate


# Expose port
EXPOSE 8080

# Jalankan php-fpm
CMD php artisan serve --host=0.0.0.0 --port=8080
