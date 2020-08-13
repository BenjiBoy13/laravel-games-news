<h1> Laravel Test Case (Games News)</h1>
<hr />
<h2> Installation & Configuration steps </h2>

<h3> Project basic config </h3>
<p> Install dependencies </p>

```
composer install
```

<p> Create the <b>.env</b> file on your root directory and copy the following</p>

```dotenv
LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel   
DB_USERNAME=root
DB_PASSWORD=           

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
```

<p> Change the database configuration to match your db server </p>
<p> Generate your key </p>

```
php artisan generate:key
```

<h3> Initialize seeding and install admin </h3>
<p> Run the following commands </p>

```
php artisan migrate
php artisan db:seed --class=NewsSeeder 
php artisan admin:install
```

<p> Note: The admin install command will seed the credentials into DB, a warning message may appear at the end of the installation process, you can ignore it.</p>

<h3> Launch the server </h3>
<p> launch your local server, you should now be able to login in <b> /admin </b>, password and username for admin panel = <b> admin </b> </p>
<p> You can see, edit and create news at http://localhost:8000/admin/news </p>

```
php artisan:serve
```


