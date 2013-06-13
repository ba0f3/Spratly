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

        Role::truncate();
        Permission::truncate();

        //Form::truncate();
        //FormField::truncate();

        $this->createDefaultUsers();
        $this->createDefaultNavigation();
        $this->createDefaultRoles();
        $this->createDefaultForms();

	}

    public function createDefaultNavigation() {
        $top = Menu::create(array('name' => 'top', 'alias' => 'top', 'path' => ''));
        $top->save();

        $left = Menu::create(array('name' => 'left', 'alias' => 'left', 'path' => ''));
        $left->save();

        Menu::create(array('parent_id' => $top->id, 'name' => 'Dashboard', 'alias' => 'dashboard-top', 'path' => '/', 'order' => -99999))->save();

        $settings = Menu::create(array('parent_id' => $top->id, 'name' => 'Settings', 'alias' => 'users', 'path' => '', 'order' => 1));
        $settings->save();

        Menu::create(array('parent_id' => $settings->id, 'name' => 'Manage Users', 'alias' => 'manage-users', 'path' => 'users'))->save();
        Menu::create(array('parent_id' => $settings->id, 'name' => 'Manage Permissions', 'alias' => 'manage-permissions', 'path' => 'permissions'))->save();

        Menu::create(array('parent_id' => $top->id, 'name' => 'Developer', 'alias' => 'developer', 'path' => '', 'order' => 2))->save();

        Menu::create(array('parent_id' => $left->id, 'name' => 'Dashboard', 'alias' => 'dashboard-left', 'path' => '/', 'icon' => 'dashboard', 'order' => -99999))->save();
        $blog = Menu::create(array('parent_id' => $left->id, 'name' => 'Blog', 'alias' => 'blog', 'path' => '', 'icon' => 'book'));
        $blog->save();

        Menu::create(array('parent_id' => $blog->id, 'name' => 'Catagories', 'alias' => 'blog-categories', 'path' => 'blog/categories'))->save();
        Menu::create(array('parent_id' => $blog->id, 'name' => 'Posts', 'alias' => 'blog-posts', 'path' => 'blog/posts'))->save();

    }

    public function createDefaultUsers() {
        // Make default administrator
        User::create(array('username' => 'admin', 'email' => 'admin@example.com', 'password' => Hash::make('123456'), 'first_name' => 'Super', 'last_name' => 'Admin', 'enabled' => true, 'role_id' => 1))->save();

        User::create(array('username' => 'john', 'email' => 'john@example.com', 'password' => Hash::make('123456'), 'first_name' => 'John', 'last_name' => 'Doe', 'enabled' => true, 'role_id' => 4))->save();

    }

    public function createDefaultRoles() {
        $administrator = Role::create(array('name' => 'Administrator', 'Has full control over every aspect of the site.'));
        $administrator->save();

        $developer = Role::create(array('name' => 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.'));
        $developer->save();

        $powerUser = Role::create(array('name' => 'Power User', 'Can handle day-to-day management, but does not have full power.', 'removable' => true));
        $powerUser->save();

        $user = Role::create(array('name' => 'User', 'This is the default user with access to login.', 'default' => true, 'removable' => true));
        $user->save();
    }

    public function createDefaultForms() {

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
