<?php
namespace Deployer;

// Include the Laravel & rsync recipes
require 'recipe/laravel.php';
require 'recipe/rsync.php';

// Config

set('repository', 'https://github.com/ALU-syntax/web-mbkm.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

set('application', 'simbkm');
set('ssh_multiplexing', true); // Speed up deployment

set('rsync_src', function () {
    return __DIR__; // If your project isn't in the root, you'll need to change this.
});

// Configuring the rsync exclusions. 
// You'll want to exclude anything that you don't want on the production server.  
add('rsync', [
    'exclude' => [
        '.git',
        '/.env',
        '/storage/',
        '/vendor/',
        '/node_modules/',
        '.github',
        'deploy.php',
    ],
]);

// Set up a deployer task to copy secrets to the server. 
// Grabs the dotenv file from the github secret
task('deploy:secrets', function () {
    file_put_contents(__DIR__ . '/.env', getenv('DOT_ENV'));
    upload('.env', get('deploy_path') . '/shared');
});


// Hosts

host('production.app.com') // Name of the server
    ->hostname('41.216.185.194') // Hostname or IP address
    ->stage('production') // Deployment stage (production, staging, etc)
    ->user('deploy') // SSH user
    ->set('deploy_path', '/var/www/public'); // Deploy path

// host('neidra.online')
//     ->set('remote_user', 'deployer')
//     ->set('deploy_path', '~/web-mbkm');

// Hooks

after('deploy:failed', 'deploy:unlock'); // Unlock after failed deploy
desc('Deploy the application');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'rsync', // Deploy code & built assets
    'deploy:secrets', // Deploy secrets
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'artisan:storage:link', // |
    'artisan:view:cache',   // |
    'artisan:config:cache', // | Laravel specific steps 
    'artisan:optimize',     // |
    'artisan:migrate',      // |
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);
