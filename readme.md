Steps to use the starter Project

1) Clone the repository
2) run composer install

3) just after installing composer packages, you might see error related to bindToShared() method,
you can ignore and continue

4) create a .env file and add the following detail according to your need

            APP_NAME=Laravel
            APP_ENV=local
            APP_KEY=base64:sab3PJK9+9fwFAkY99evyQ3jQ8lO9kf2g1bU86A1UcE=
            APP_DEBUG=true
            APP_LOG_LEVEL=debug
            APP_URL=http://localhost

            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=db
            DB_USERNAME=wl3
            DB_PASSWORD=wl3

            BROADCAST_DRIVER=log
            CACHE_DRIVER=file
            SESSION_DRIVER=file
            QUEUE_DRIVER=sync

            REDIS_HOST=127.0.0.1
            REDIS_PASSWORD=null
            REDIS_PORT=6379

            MAIL_DRIVER=smtp
            MAIL_HOST=smtp.mailtrap.io
            MAIL_PORT=2525
            MAIL_USERNAME=null
            MAIL_PASSWORD=null
            MAIL_ENCRYPTION=null

            PUSHER_APP_ID=
            PUSHER_APP_KEY=
            PUSHER_APP_SECRET=

5) run migrations
    php artisan migrate

6) It should be good to go!

