<?php namespace Rgv151\Spratly;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Hash;

class CreateDemoDataCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'spratly:demo';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Insert demo data for Spratly.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
        // Clear User table
        \User::truncate();

        // Make default administrator
		$admin = new \User;
        $admin->username = 'admin';
        $admin->email = 'admin@example.com';
        $admin->password = Hash::make('123456');
        $admin->first_name = 'Super';
        $admin->last_name = 'Administrator';
        $admin->enabled = true;
        $admin->save();
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
		);
	}

}