<!-- 
    Tai yra template, kurią sukūrėme su mintim naudoti mūsų homepage`ui.
    Tačiau, mes ją galėsime naudoti NEBŪTINAI TIK homepage. Su bet kuriuo
    kitu controlleriu galėsime ją "renderinti" taip pat. 
!-->
<div class="main">
    <h1><?php print $page['content']['title']; ?></h1>
    
    <!--<div class="home_nuotrauka"></div>-->
    <!-- 
        Jeigu yra galimybė, kad tam tikrų elementų nespausdinsime,
        pirma patikriname ar $page['content'][?kazkoks_indeksas?]
        yra nustatytas prieš spausdindami tag'us
    !-->
    <?php if (isset($page['content']['subtitle'])): ?>
        <h2><?php print $page['content']['subtitle']; ?></h2>
    <?php endif; ?>
        
    <?php if (isset($page['content']['alus'])): ?>
        <h2><?php print $page['content']['alus']; ?></h2>
    <?php endif; ?>
    <hr>
</div>