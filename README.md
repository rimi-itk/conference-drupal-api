# Conference

Create local settings file with database connection:

```sh
cat <<'EOF' > web/sites/default/settings.local.php
<?php
$databases['default']['default'] = [
 'database' => getenv('DATABASE_DATABASE') ?: 'db',
 'username' => getenv('DATABASE_USERNAME') ?: 'db',
 'password' => getenv('DATABASE_PASSWORD') ?: 'db',
 'host' => getenv('DATABASE_HOST') ?: 'mariadb',
 'port' => getenv('DATABASE_PORT') ?: '',
 'driver' => getenv('DATABASE_DRIVER') ?: 'mysql',
 'prefix' => '',
];
EOF
```

```sh
docker-compose up -d
docker-compose exec phpfpm composer install
```

Using `symfony` binary:

```sh
docker-compose up -d
symfony composer install
symfony php vendor/bin/drush --yes site:install minimal
symfony local:server:start --port=8888 --daemon
symfony php vendor/bin/drush --uri=https://127.0.0.1:8888 user:login
```
