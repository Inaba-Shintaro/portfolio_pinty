#クローンする
git clone https://github.com/Inaba-Shintaro/docker-laravel-handson.git

#appコンテナに入る
docker-compose exec app bash

#composerのインストール
composer install

#.env.exampleファイルをコピーして.envにする
cp .env.example .env

#APP_KEYをジェネレート
php artisan key:generate

#ストレージをリンク
php artisan storage:link

#マイグレートできればおk
php artisan migrate

#コンテナから出る
exit


#開発
docker-compose.ymlがあるディレクトリで
docker-compose up -d

#ローカルホスト
http://localhost:8080/