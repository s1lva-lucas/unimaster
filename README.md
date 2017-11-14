# Unimaster - Unifi Captive Portal

Unimaster is an example of External Captive Portal that you can use in your UBNT APs

### Prerequisites

What things you need to install the software and how to install them

```
MySQL
PHP 5.6 + 
Apache2
```

### Installing

A step by step series of examples that tell you have to get a development env running

Say what the step will be

```
1. First create an MySQL database with the informations provide in config_bd.sql.

2. Configure class.unifi.php with your Unifi Credentials.
	User, Password, Site, Version and URL

3. Configure config.php with the credentials that you set in your MySQL database

4. You must put all the files in: /var/www/guest/s/default/

5. If you want to enable direct access after the first login, configure the Unifi Credentials in index.php and uncomment .

```

## Authors

* **Lucas Assis** - *Initial work* - [Lucas Assis](https://github.com/lucasassis10)

## License

You can enjoy for free.


