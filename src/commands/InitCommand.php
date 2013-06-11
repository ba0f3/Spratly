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
        Menu::truncate();

        $this->createDefaultUsers();
        $this->createDefaultNavigation();


	}

    public function createDefaultNavigation() {
        $top = Menu::create(array('name' => 'top', 'alias' => 'top', 'path' => '', 'enabled' => true));
        $top->save();

        $left = Menu::create(array('name' => 'left', 'alias' => 'left', 'path' => '', 'enabled' => true));
        $left->save();

        Menu::create(array('parent_id' => $top->id, 'name' => 'Dashboard', 'alias' => 'dashboard-top', 'path' => '/', 'enabled' => true))->save();

        $user = Menu::create(array('parent_id' => $top->id, 'name' => 'Users', 'alias' => 'users', 'path' => '', 'enabled' => true));
        $user->save();

        Menu::create(array('parent_id' => $user->id, 'name' => 'Manage Users', 'alias' => 'manage-users', 'path' => 'users', 'enabled' => true))->save();
        Menu::create(array('parent_id' => $user->id, 'name' => 'Manage Permissions', 'alias' => 'manage-permissions', 'path' => 'permissions', 'enabled' => true))->save();

        Menu::create(array('parent_id' => $left->id, 'name' => 'Dashboard', 'alias' => 'dashboard-left', 'path' => '/', 'icon' => 'dashboard', 'enabled' => true))->save();
        $blog = Menu::create(array('parent_id' => $left->id, 'name' => 'Blog', 'alias' => 'blog', 'path' => '', 'icon' => 'book', 'enabled' => true));
        $blog->save();

        Menu::create(array('parent_id' => $blog->id, 'name' => 'Catagories', 'alias' => 'blog-categories', 'path' => 'blog/categories', 'enabled' => true))->save();
        Menu::create(array('parent_id' => $blog->id, 'name' => 'Posts', 'alias' => 'blog-posts', 'path' => 'blog/posts', 'enabled' => true))->save();

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