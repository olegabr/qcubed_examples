# qcubed_examples

The qcubed examples application. See http://qcu.be for more info.

This directory contains the code for the examples web site, which you can run
locally. In order to run all the examples, and pass the QCubed unit tests locally,
you will need to:

1. Set up a database. Use one of the SQL files `mysql_innodb.sql`, `pgsql.sql` and
`sql_server.sql` to set up the examples database, depending on the type of database
you are using.
2. Edit your `configuration.inc.php` file to point to the examples database.
3. Copy the `codegen_options.json` file to your configuration directory.

The `codgen_options.json` file contains options that the unit tests will look for when
running the tests. Delete this file from your configuration directory when you are
ready to build your own site.

## Using docker

If you have already `docker` and `docker-compose` installed, just type:

```
docker-compose up -d
```

Otherwise, type

```
./run.sh
```

This command will install `docker` and `docker-compose` and then run the examples.

Then go to the [http://localhost](http://localhost) to see your examples.

In the file `docker-compose` you can modify the `80:80` part to the `8080:80` or any other port if the port `80` is already used on your system.

Then go to the [http://localhost:8080](http://localhost:8080) to see your examples.

## Running tests

```
rm -rf vendor composer.lock
docker run --rm -v $(pwd):/var/www/html -w /var/www/html composer/composer install
docker-compose build
docker-compose up -d
docker run --rm --network=qcubedexamples_default -v $(pwd)/tests:/var/www/html/tests qcubedexamples_apache ./vendor/bin/codecept run
```
