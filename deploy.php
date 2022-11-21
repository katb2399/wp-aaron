<?php

namespace Deployer;
require 'recipe/common.php';


// Config
set('repository', 'https://github.com/katb2399/wpaaron_jennifer_viktoriia_katharina.git');

set('shared_files', ['public/wp-config.php']);
set('shared_dirs', ['public/wp-content/uploads']);



// Hosts
host('193.170.119.192')
    ->set('remote_user', 'admin')
    ->set('port','5412')
    ->set('deploy_path', '/home/admin/wpaaron');


// Tasks
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:publish'
]);


after('deploy:failed', 'deploy:unlock');

?>
