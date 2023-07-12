<?php

namespace WP_CLI\DbConfig;

use WP_CLI;
use WP_CLI_Command;

class DbConfigCommand extends WP_CLI_Command {

	/**
	 * Greets the world.
	 *
	 * ## EXAMPLES
	 *
	 *     # Greet the world.
	 *     $ wp hello-world
	 *     Success: Hello World!
	 *
	 * @when before_wp_load
	 *
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 */
	public function __invoke( $args, $assoc_args ) {
		
		if(!isset($assoc_args['h']))
		{
			WP_CLI::line("Enter DB Host");
			$assoc_args['h'] = readline(":");
		}

		if(!isset($assoc_args['u']))
		{
			WP_CLI::line("Enter DB User");
			$assoc_args['u'] = readline(":");
		}

		if(!isset($assoc_args['p']))
		{
			WP_CLI::line("Enter DB Password");
			$assoc_args['p'] = readline(":");
		}

		if(!isset($assoc_args['d']))
		{
			WP_CLI::line("Enter DB Name");
			$assoc_args['d'] = readline(":");
		}

		$this->updateDbCredentials($assoc_args);

		
		WP_CLI::success( 'Database credentials updated :)');
	}

	private function updateDbCredentials($db_creds)
	{
		$error = WP_CLI::launch_self('config set',['DB_HOST', $db_creds['h']], [], false);
		if($error)
		{
			WP_CLI::error("Unable to update db host in config file");
		}

		$error = WP_CLI::launch_self('config set',['DB_USER', $db_creds['u']], [], false);
		if($error)
		{
			WP_CLI::error("Unable to update db user in config file");
		}

		$error = WP_CLI::launch_self('config set',['DB_PASSWORD', $db_creds['p']], [], false);
		if($error)
		{
			WP_CLI::error("Unable to update db password in config file");
		}

		$error = WP_CLI::launch_self('config set',['DB_NAME', $db_creds['d']], [], false);
		if($error)
		{
			WP_CLI::error("Unable to update db name in config file");
		}
	}
}
