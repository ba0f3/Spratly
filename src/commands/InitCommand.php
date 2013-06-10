<?php namespace Rgv151\Spratly;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Hash;

class InitCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'spratly:init';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Insert default data for Spratly.';

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
        Navigation::truncate();

        $this->createDefaultUsers();
        $this->createDefaultNavigation();


	}

    public function createDefaultNavigation() {
        $top = new Navigation();
        $top->name = 'top';
        $top->path = '';
        $top->enabled = true;
        $top->save();

        $left = new Navigation();
        $left->name = 'left';
        $left->path = '';
        $left->enabled = true;
        $left->save();

        $dashboard = new Navigation();
        $dashboard->parent_id = $top->id;
        $dashboard->name = 'Dashboard';
        $dashboard->path = 'dashboard';
        $dashboard->icon = 'dashboard';
        $dashboard->enabled = true;
        $dashboard->save();
    }

    public function createDefaultUsers() {
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
		return array();
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array();
	}

}