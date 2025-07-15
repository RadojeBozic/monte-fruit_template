# AgroShopp - Deploy vodič (Linux VPS)

Ovaj dokument opisuje kako da postaviš AgroShopp na Linux serveru sa NGINX + PHP + MySQL.

---

## ✅ 1. Sistemske komponente

- Ubuntu 22.04+
- PHP 8.3+
- Composer
- Node.js (v18+)
- MySQL/MariaDB
- NGINX
- Git

---

## 📦 2. Koraci za deploy

```bash
# 1. SSH na server
ssh user@your-vps-ip

# 2. Kloniraj projekat
git clone https://github.com/tvoj-username/agroshopp-platform.git
cd agroshopp-platform

# 3. Instaliraj zavisnosti
composer install
npm install && npm run build

# 4. Podesi .env
cp .env.example .env
php artisan key:generate

# 5. Migracije
php artisan migrate --seed
```

---

## 🌐 3. NGINX konfiguracija

Primer NGINX fajla:
```nginx
server {
    listen 80;
    server_name agroshopp.rs www.agroshopp.rs;

    root /var/www/agroshopp-platform/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

---

## 🧪 4. Prava i keš

```bash
sudo chown -R www-data:www-data .
php artisan config:cache
php artisan view:cache
```

---

## 📧 5. Mail konfiguracija

Podesi SMTP u `.env` fajlu:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.agroshopp.rs
MAIL_PORT=587
MAIL_USERNAME=info@agroshopp.rs
MAIL_PASSWORD=***
MAIL_ENCRYPTION=tls
```

---

🎯 Uživaj u svojoj produkcionoj AgroShopp platformi!

