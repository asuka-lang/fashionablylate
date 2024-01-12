# fashionablylate
## 環境構築
#### Dockerビルド
<p>1.git clone git@github.com:coachtech-material/laravel-docker-template.git</p>
<p>2.docker-compose up -d --build</p>
<h2>laravel環境構築</h2>
<p>1.docker-compose exec php bash</p>
<p>2.composer install</p>
<p>3..env.exampleファイルから.envファイルを作成し、環境変数を変更（DB:Mysql)</p>
<p>4.php artisan key:generate</p>
<p>5.php artisan migrate</p>
<p>6.php artisan db:seed</p>
<p>7.composer require laravel/Fortify</p>
