<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'somatiksoundsystem.com');

// Project repository
set('repository', 'git@github.com:somatik-web/php.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

set('writable_use_sudo', false);
set('writable_mode', 'chmod');

// Hosts

host('somatiksoundsystem.com')
    ->user('deployer')
    ->set('deploy_path', '/var/www/{{application}}');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');

