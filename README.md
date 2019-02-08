<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template with environment settings</h1>
    <br>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

Why .env?
---------
**You should never store sensitive credentials in your code**. Storing
[configuration in the environment](http://www.12factor.net/config) is one of
the tenets of a [twelve-factor app](http://www.12factor.net/). Anything that is
likely to change between deployment environments – such as database credentials
or credentials for 3rd party services – should be extracted from the code into
environment variables.

Basically, a `.env` file is an easy way to load custom configuration variables
that your application needs without having to modify .htaccess files or
Apache/nginx virtual hosts. This means you won't have to edit any files outside
the project, and all the environment variables are always set no matter how you
run your project - Apache, Nginx, CLI, and even PHP 5.4's built-in webserver.
It's WAY easier than all the other ways you know of to set environment
variables, and you're going to love it!

* NO editing virtual hosts in Apache or Nginx
* NO adding `php_value` flags to .htaccess files
* EASY portability and sharing of required ENV values
* COMPATIBLE with PHP's built-in web server and CLI runner

[More](https://github.com/vlucas/phpdotenv)

**Install**

