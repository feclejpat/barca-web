<?php
/**
 * =============================================================================
 *  OBSAH WEBU — Barbora Karásková
 * =============================================================================
 *
 *  Tady upravujete VEŠKERÝ text na webu, ceny i odkazy na sociální sítě.
 *  Design (barvy, fonty, rozestupy...) se odsud nemění — o ten se stará
 *  soubor styles.css. Tady jen měníte OBSAH.
 *
 *  JAK UPRAVOVAT:
 *  - Měňte pouze text MEZI uvozovkami '...' (jednoduché uvozovky).
 *  - Pokud text sám obsahuje uvozovku nebo apostrof, napište před něj
 *    zpětné lomítko, např.: 'Barbořin \'oblíbený\' recept'
 *  - U některých textů (např. odstavce) můžete použít i jednoduché HTML
 *    značky, třeba <strong>tučně</strong> pro tučné slovo.
 *  - Po uložení souboru stačí v prohlížeči obnovit stránku (F5).
 *  - Nic jiného (hranaté závorky, šipky =>, čárky na konci řádků) neměňte,
 *    jinak se stránka nenačte správně.
 *
 * =============================================================================
 */

return [

    // -------------------------------------------------------------------
    // ZÁKLADNÍ ÚDAJE (název stránky v prohlížeči, popis pro vyhledávače)
    // -------------------------------------------------------------------
    'meta' => [
        'titulek'      => 'Barbora Karásková | Nutriční koučink a osobní trénink',
        'popis'        => 'Nutriční koučink, osobní trénink a online spolupráce s Barborou Karáskovou. Cesta k udržitelnému zdraví a formě bez drastických diet.',
    ],

    // -------------------------------------------------------------------
    // KONTAKTNÍ ÚDAJE — používají se v sekci Kontakt i v patičce
    // -------------------------------------------------------------------
    'kontakt' => [
        'email'    => 'karaskovabarbora@seznam.cz',
        'lokalita' => 'Praha – Pekárenský dvůr',
    ],

    // -------------------------------------------------------------------
    // SOCIÁLNÍ SÍTĚ
    // Vložte sem odkazy na své profily. Pokud některou síť nechcete
    // zobrazovat, smažte celý řádek (i s čárkou na konci).
    // -------------------------------------------------------------------
    'socialni_site' => [
        'facebook'  => 'https://www.facebook.com/TODO-vas-profil',
        'instagram' => 'https://www.instagram.com/TODO-vas-profil',
    ],

    // -------------------------------------------------------------------
    // HORNÍ MENU (navigace)
    // -------------------------------------------------------------------
    'nav' => [
        'logo'    => 'Barbora Karásková',
        'domu'    => 'Domů',
        'o_mne'   => 'O mně',
        'sluzby'  => 'Služby',
        'ebook'   => 'Ebook',
        'kontakt' => 'Kontakt',
    ],

    // -------------------------------------------------------------------
    // ÚVODNÍ SEKCE (HERO)
    // -------------------------------------------------------------------
    'hero' => [
        'overline'          => 'Nutriční koučink & osobní trénink',
        'nadpis_pred'       => 'Cesta k',
        'nadpis_zvyrazneno' => 'udržitelnému',
        'nadpis_po'         => 'zdraví a formě',
        'text'              => 'Jsem Barbora, vaše průvodkyně světem moderní výživy a pohybu. Pomáhám lidem dosáhnout jejich cílů bez drastických diet, s důrazem na dlouhodobé zdraví a radost ze života.',
        'tlacitko_1'        => 'Moje služby',
        'tlacitko_2'        => 'Napsat zprávu',
        'scroll_text'       => 'Scrollujte',
        'obrazek'           => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&q=80&w=1600',
    ],

    // -------------------------------------------------------------------
    // SEKCE „O MNĚ“
    // -------------------------------------------------------------------
    'o_mne' => [
        'overline'   => 'Kdo jsem',
        'nadpis'     => 'O mně',
        'odstavec_1' => 'Jsem Ing. Barbora Karásková, nutriční koučka a osobní trenérka. Ve své praxi spojuji odborné vzdělání v oblasti výživy s praktickými zkušenostmi z tréninku, abych klientům pomohla najít rovnováhu mezi jídlem, pohybem a každodenním životem.',
        'odstavec_2' => 'Nevěřím na drastické diety ani univerzální recepty. Každou spolupráci stavím na diagnostice, datech a individuálním přístupu – ať už se potkáváme osobně v Praze, nebo spolupracujeme online odkudkoli.',
        'obrazek'    => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&q=80&w=800',
        'staty' => [
            ['nadpis' => 'Diagnostika těla',   'popis' => 'Měření na profesionálních vahách'],
            ['nadpis' => 'Individuální plán',  'popis' => 'Žádné univerzální diety'],
            ['nadpis' => 'Osobně i online',    'popis' => 'Praha nebo kdekoli'],
        ],
    ],

    // -------------------------------------------------------------------
    // SEKCE „SLUŽBY“ — úvodní text sekce
    // -------------------------------------------------------------------
    'sluzby_sekce' => [
        'overline' => 'Jak vám mohu pomoci',
        'nadpis'   => 'Služby na míru vašim cílům',
        'text'     => 'Vyberte si oblast, která vás zajímá nejvíce – nutriční koučink, osobní trénink, nebo online spolupráci odkudkoli.',
    ],

    // -------------------------------------------------------------------
    // JEDNOTLIVÉ SLUŽBY
    // Každá služba má buď jednu cenu ('cena' => [...]), nebo víc cenových
    // variant ('tiery' => [...]) jako u online spolupráce. Nepoužitý typ
    // u dané služby jednoduše smažte nebo nechte prázdný.
    // -------------------------------------------------------------------
    'sluzby' => [

        // 01 — Nutriční koučink
        [
            'cislo'     => '01',
            'nazev'     => 'Nutriční koučink & diagnostika',
            'obrazek'   => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&q=80&w=800',
            'alt'       => 'Zdravá výživa',
            'obracene'  => false,
            'odstavce'  => [
                'Diagnostika složení těla probíhá na profesionálních vahách – zjistíte, kolik máte svalové hmoty, tuku a jaká je vaše metabolická úroveň. Na to navazuje konzultace, při které společně rozebereme vaše stravovací návyky, zdravotní stav a denní režim.',
                'Nečekejte striktní jídelníček na gramy. Dostanete strategii, díky které se naučíte o jídle přemýšlet tak, aby vás neomezovalo, ale podporovalo na cestě za vysněnou postavou.',
            ],
            'cena'      => ['hodnota' => '300 Kč', 'popis' => '/ 20 min · diagnostika těla + interpretace výsledků'],
            'tiery'     => null,
            'tlacitko'  => 'Rezervovat termín',
        ],

        // 02 — Osobní trénink
        [
            'cislo'     => '02',
            'nazev'     => 'Osobní trénink',
            'obrazek'   => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&q=80&w=800',
            'alt'       => 'Fitness trénink',
            'obracene'  => true,
            'odstavce'  => [
                'Od března 2026 otevírám své lekce v novém luxusním fitku <strong>Body Care</strong> v rezidenci Pekárenský dvůr. Zaměřuji se na funkční trénink, který tělo nejen vytvaruje, ale především zbaví bolestí a nefunkčních pohybových vzorců.',
                'Specializuji se na <strong>SM systém</strong> – cvičení spirální stabilizace páteře vhodné pro sedavé zaměstnání i problémy se zády – a na <strong>TRX</strong>, závěsný systém pro rozvoj síly celého těla.',
            ],
            'cena'      => ['hodnota' => '600 Kč', 'popis' => '/ hodina · vstup do fitka + odborné vedení'],
            'tiery'     => null,
            'tlacitko'  => 'Mám zájem o lekci',
        ],

        // 03 — Online spolupráce (má dvě cenové varianty místo jedné ceny)
        [
            'cislo'     => '03',
            'nazev'     => 'Online spolupráce',
            'obrazek'   => 'https://images.unsplash.com/photo-1588196749597-9ff075ee6b5b?auto=format&fit=crop&q=80&w=800',
            'alt'       => 'Online konzultace',
            'obracene'  => false,
            'odstavce'  => [
                'Ať jste kdekoli, můžeme na vašem zdraví a formě pracovat společně i na dálku. Spolupráce probíhá formou pravidelných videohovorů a průběžné online analýzy vašeho pokroku.',
            ],
            'cena'      => null,
            'tiery'     => [
                ['hodnota' => '1 200 Kč', 'popis' => 'Úvodní konzultace – analýza jídelníčku, cíle, první kroky (60 min)'],
                ['hodnota' => '2 500 Kč', 'popis' => 'Měsíční koučink – pravidelné kontroly, úpravy plánu, podpora na chatu'],
            ],
            'tlacitko'  => 'Chci online koučink',
        ],
    ],

    // -------------------------------------------------------------------
    // SEKCE „EBOOK“
    // -------------------------------------------------------------------
    'ebook' => [
        'overline'   => 'Pro čtenáře',
        'nadpis'     => 'Doba zrychlená: Klíč ke stravě',
        'odstavec_1' => 'Praktický průvodce stravováním pro uspěchanou dobu – jak nakupovat, vařit a jíst zdravě i s nabitým kalendářem, bez zbytečných výčitek a přísných diet.',
        'odstavec_2' => 'Máte k ebooku dotaz, nebo si ho chcete rovnou objednat? Napište mi.',
        'tlacitko'   => 'Mám zájem o ebook',
        'obrazek'    => 'https://images.unsplash.com/photo-1495521821757-a1efb6729352?auto=format&fit=crop&q=80&w=800',
        'alt'        => 'Čtení receptů a nutričních tipů z ebooku Doba zrychlená: Klíč ke stravě na tabletu v kuchyni',
    ],

    // -------------------------------------------------------------------
    // SEKCE „KONTAKT“
    // -------------------------------------------------------------------
    'kontakt_sekce' => [
        'overline'          => 'Spojme se',
        'nadpis'            => 'Pojďme se spojit',
        'text'              => 'Máte dotaz k ebooku nebo chcete začít spolupráci? Napište mi přímo zde nebo na můj email.',
        'email_label'       => 'Email',
        'lokalita_label'    => 'Lokalita',
    ],

    // -------------------------------------------------------------------
    // KONTAKTNÍ FORMULÁŘ
    // -------------------------------------------------------------------
    'formular' => [
        'jmeno_label'         => 'Jméno',
        'jmeno_placeholder'   => 'Vaše jméno',
        'email_label'         => 'Email',
        'email_placeholder'   => 'Váš email',
        'zprava_label'        => 'Zpráva',
        'zprava_placeholder'  => 'S čím vám mohu pomoci?',
        'tlacitko'            => 'Odeslat zprávu',
        'poznamka'            => 'Odesláním se otevře váš e-mailový klient s předvyplněnou zprávou na',
    ],

    // -------------------------------------------------------------------
    // PATIČKA
    // -------------------------------------------------------------------
    'paticka' => [
        'copyright' => '© 2026 Barbora Karásková | Všechna práva vyhrazena',
    ],

];
