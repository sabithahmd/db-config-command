sabithahmd/db-config-command
====================

WP CLI command to configure database in wp-config.php

Quick links: [Using](#using) | [Installing](#installing) | [Contributing](#contributing) | [Support](#support)

## Using

## Interactive Mode

~~~
wp db-config
~~~

It will ask for the configuartion values one by one.

## Inline Mode

You can provide the config values along with the command itself.
~~~
wp db-config [--h=<db_host>] [--u=<db_user>] [--p=<db_password>] [--d=<db_name>]
~~~
if some values are missing, then it will ask for that value through interactive mode.

## Installing

Installing this package requires WP-CLI v2.5 or greater. Update to the latest stable release with `wp cli update`.

Once you've done so, you can install the latest stable version of this package with:

```bash
wp package install sabithahmd/db-config:@stable
```

To install the latest development version of this package, use the following command instead:

```bash
wp package install sabithahmd/db-config:dev-master
```

### Reporting a bug

Think you’ve found a bug? We’d love for you to help us get it fixed.

Before you create a new issue, you should [search existing issues](https://github.com/sabithahmd/db-config-command/issues?q=label%3Abug%20) to see if there’s an existing resolution to it, or if it’s already been fixed in a newer version.

Once you’ve done a bit of searching and discovered there isn’t an open or fixed issue for your bug, please [create a new issue](https://github.com/sabithahmd/db-config-command/issues/new). Include as much detail as you can, and clear steps to reproduce if possible. For more guidance, [review our bug report documentation](https://make.wordpress.org/cli/handbook/bug-reports/).

## Support

GitHub issues aren't for general support questions, but there are other venues you can try: https://wp-cli.org/#support


*This README.md is generated dynamically from the project's codebase using `wp scaffold package-readme` ([doc](https://github.com/wp-cli/scaffold-package-command#wp-scaffold-package-readme)). To suggest changes, please submit a pull request against the corresponding part of the codebase.*
