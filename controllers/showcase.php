<?php
// Nustatome pagr. $page masyvui
// vertes atitinkamai pagal tai, ką daro mūsų puslapis

// Paciam indekse.php naudojami
$page['title'] = 'Mano paroda';
$page['show_footer'] = TRUE;
$page['show_header'] = TRUE;

// Template naudojami
$page['content']['title'] = 'Mano paroda: Skaičiuoklė';
$page['content']['subtitle'] = 'ivesk skaiciu';

// Nuskaitom formos inputa
if (isset($_POST['skaicius'])) {
    $skaicius = $_POST['skaicius'];
    if (!empty($skaicius)) {
        // Templato subtitle
        $page['content']['subtitle'] = 'Atsakymas ' . kvadratas($skaicius);
    }

}

function kvadratas($skaicius) {
    $kvadratas = $skaicius ** 2;
    return $kvadratas;
}


// Visus 'content' skiltyje esančius kintamuosius
// nustatome pasirinktinai pagal tai, kaip suformavome
// template į kurį juos spausdinsime.
//$page['content']['subtitle'] = 'Showcase subtitle';

// Index.php esame nurodę išspausdinti 'rendered' indekso
// turinį iš 'content'. Todėl šiam indeksui priskiriame
// sugeneruotą HTML kodą, gaunamą iš render_page funkcijos

// Funkcija render_page, $page masyvą perduoda į template, kurią
// nurodome antrame parametre. 
$page['content']['rendered'] = render_page($page, 'page-showcase');