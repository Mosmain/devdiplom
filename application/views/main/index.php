<h2>Главная страница</h2>

<p>Тестовые ссылки:</p>

<ul>
	<li><a href="/chavo">На 404 страницу</a></li>
	<li><a href="/account/register">Регистрация</a></li>
	<li><a href="/account/login">Авторизация</a></li>
</ul>

<?php foreach ($news as $val): ?>
	<h3><?php echo $val['title']; ?></h3>
	<p><?php echo $val['description']; ?></p>
	<hr>
<?php endforeach; ?>