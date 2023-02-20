# クローンする
```bash
git clone https://github.com/Inaba-Shintaro/docker-laravel-handson.git
```
*dokcerの起動を忘れずに

# appコンテナに入る
```bash
docker-compose exec app bash
```

# composerのインストール
```bash
composer install
```

# .env.exampleファイルをコピーして.envにする
```bash
cp .env.example .env
```

# APP_KEYをジェネレート
```bash
php artisan key:generate  --show
```
※ここで出力されたAPP_KEYはデプロイの時に使える

# ストレージをリンク
```bash
php artisan storage:link
```

# マイグレートできればおk
```bash
php artisan migrate:fresh
```

# コンテナから出る
```bash
exit
```

# 開発
docker-compose.ymlがあるディレクトリで
```bash
docker-compose up -d
```

# 別リポジトリにpushする時は
①クローンしてきた、リポジトリのユーザー名とリポジトリ名を確認する
```bash
git config remote.origin.url
```
こんな感じか
```bash
https://github.com/旧ユーザー名/旧リポジトリ名.git
https://github.com/Inaba-Shintaro/docker-laravel-handson.git
```
こんな感じ
```bash
git@github.com:旧ユーザー名/旧リポジトリ名.git
git@github.com:Inaba-Shintaro/sample_docker-laravel-handson.git
```
②それを新しくpushしたいリポジトリに変更する
```bash
git remote set-url origin git@github.com:新ユーザー名/新リポジトリ名.git
```

参考
https://qiita.com/P-man_Brown/items/5f90d51d6a966d18deb2

# ローカルホストで表示されるはず、、、
http://localhost:8080/

artisanコマンドを打つときは

```bash
docker-compose exec app bash
```
でappコンテナに入ってから
コマンドをうとう



