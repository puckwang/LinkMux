@servers(['web' => ['puck@lmux.puckwang.com']])

@task('deploy', ['on' => 'web'])
    export NVM_DIR="$HOME/.nvm"
    [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
    [ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion"
    cd /home/lmux/dev
    php artisan down
    sudo git pull
    sudo composer install --no-plugins --no-scripts
    sudo composer install --optimize-autoloader
    npm install
    npm run prod
    php artisan migrate
    php artisan config:cache
    php artisan route:cache
    php artisan up
@endtask