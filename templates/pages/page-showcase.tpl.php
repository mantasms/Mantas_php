
<div class="home-page">
    <h1><?php print $page['content']['title']; ?></h1>

    <?php if (isset($page['content']['subtitle'])): ?>
        <h2><?php print $page['content']['subtitle']; ?></h2>
    <?php endif; ?>

    <form action="index.php?page=showcase" method="POST">
        Ka pakelti kvadratu: <input name="skaicius" type="text"/>
        <input type="submit"/>
    </form>
</div>