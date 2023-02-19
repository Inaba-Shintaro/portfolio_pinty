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
php artisan key:generate
```

# ストレージをリンク
```bash
php artisan storage:link
```

# マイグレートできればおk
```bash
php artisan migrate
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

# ローカルホストで表示されるはず、、、
http://localhost:8080/

artisanコマンドを打つときは

```bash
docker-compose exec app bash
```
でappコンテナに入ってから
コマンドをうとう

