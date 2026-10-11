<?php
/**
 * Barbora Karásková — one page (PHP šablona)
 * Veškerý text, ceny a odkazy se načítají z config.php.
 * Tenhle soubor upravujte jen pokud chcete měnit STRUKTURU stránky,
 * ne obsah — obsah patří do config.php.
 */
$obsah = require __DIR__ . '/config.php';

/** Krátká pomocná funkce — bezpečně vypíše text (escapuje HTML). */
function t($text) {
    echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/** Vypíše text tak, jak je, BEZ escapování — použito jen tam, kde
 *  chceme dovolit jednoduché značky jako <strong> přímo v config.php. */
function raw($text) {
    echo $text;
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php t($obsah['meta']['titulek']); ?></title>
<meta name="description" content="<?php t($obsah['meta']['popis']); ?>">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23141414'/%3E%3Ctext x='50' y='68' font-size='58' text-anchor='middle' fill='%23c9a15d' font-family='sans-serif'%3EB%3C/text%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="progress-bar"></div>

<nav class="site-nav">
    <div class="container nav-flex">
        <a href="#uvod" class="nav-logo"><?php t($obsah['nav']['logo']); ?></a>
        <ul class="nav-links">
            <li><a href="#uvod"><?php t($obsah['nav']['domu']); ?></a></li>
            <li><a href="#o-mne"><?php t($obsah['nav']['o_mne']); ?></a></li>
            <li><a href="#sluzby"><?php t($obsah['nav']['sluzby']); ?></a></li>
            <li><a href="#ebook"><?php t($obsah['nav']['ebook']); ?></a></li>
            <li><a href="#kontakt" class="nav-cta"><?php t($obsah['nav']['kontakt']); ?></a></li>
        </ul>
        <button class="nav-toggle" aria-label="Otevřít menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<div class="mobile-menu">
    <a href="#uvod"><?php t($obsah['nav']['domu']); ?></a>
    <a href="#o-mne"><?php t($obsah['nav']['o_mne']); ?></a>
    <a href="#sluzby"><?php t($obsah['nav']['sluzby']); ?></a>
    <a href="#ebook"><?php t($obsah['nav']['ebook']); ?></a>
    <a href="#kontakt"><?php t($obsah['nav']['kontakt']); ?></a>

    <?php if (!empty($obsah['socialni_site'])): ?>
    <div class="social-links social-links--menu">
        <?php if (!empty($obsah['socialni_site']['facebook'])): ?>
        <a href="<?php t($obsah['socialni_site']['facebook']); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Facebook">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3.6l.4-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </a>
        <?php endif; ?>
        <?php if (!empty($obsah['socialni_site']['instagram'])): ?>
        <a href="<?php t($obsah['socialni_site']['instagram']); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Instagram">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="2.5" width="19" height="19" rx="5"/><circle cx="12" cy="12" r="4.3"/><circle cx="17.4" cy="6.6" r="1.1" fill="currentColor" stroke="none"/></svg>
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>

<main>

    <!-- HERO -->
    <section class="hero" id="uvod" data-theme="dark">
        <div class="hero-bg">
            <img src="<?php t($obsah['hero']['obrazek']); ?>" alt="" role="presentation">
        </div>
        <div class="container hero-content">
            <p class="overline reveal"><?php t($obsah['hero']['overline']); ?></p>
            <h1 class="reveal"><?php t($obsah['hero']['nadpis_pred']); ?> <em><?php t($obsah['hero']['nadpis_zvyrazneno']); ?></em><br><?php t($obsah['hero']['nadpis_po']); ?></h1>
            <p class="reveal" style="--delay:0.1s"><?php t($obsah['hero']['text']); ?></p>
            <div class="hero-actions reveal" style="--delay:0.2s">
                <a href="#sluzby" class="btn btn--solid"><?php t($obsah['hero']['tlacitko_1']); ?></a>
                <a href="#kontakt" class="btn"><?php t($obsah['hero']['tlacitko_2']); ?></a>
            </div>
        </div>
        <div class="scroll-cue" aria-hidden="true">
            <span><?php t($obsah['hero']['scroll_text']); ?></span>
            <span class="line"></span>
        </div>
    </section>

    <!-- O MNĚ -->
    <section id="o-mne" data-theme="light">
        <div class="container about">
            <div class="about-img reveal">
                <img src="<?php t($obsah['o_mne']['obrazek']); ?>" alt="<?php t($obsah['nav']['logo']); ?>" loading="lazy">
            </div>
            <div class="about-text">
                <p class="overline reveal"><?php t($obsah['o_mne']['overline']); ?></p>
                <h2 class="reveal"><?php t($obsah['o_mne']['nadpis']); ?></h2>
                <p class="reveal"><?php t($obsah['o_mne']['odstavec_1']); ?></p>
                <p class="reveal" style="--delay:0.1s"><?php t($obsah['o_mne']['odstavec_2']); ?></p>
                <div class="about-stats reveal" style="--delay:0.2s">
                    <?php foreach ($obsah['o_mne']['staty'] as $stat): ?>
                    <div class="stat">
                        <strong><?php t($stat['nadpis']); ?></strong>
                        <span><?php t($stat['popis']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SLUŽBY -->
    <section id="sluzby" data-theme="alt">
        <div class="container">
            <div class="section-head reveal">
                <p class="overline"><?php t($obsah['sluzby_sekce']['overline']); ?></p>
                <h2><?php t($obsah['sluzby_sekce']['nadpis']); ?></h2>
                <p><?php t($obsah['sluzby_sekce']['text']); ?></p>
            </div>

            <?php foreach ($obsah['sluzby'] as $sluzba): ?>
            <div class="service reveal<?php echo !empty($sluzba['obracene']) ? ' service--reverse' : ''; ?>">
                <div class="service-media">
                    <span class="service-num" aria-hidden="true"><?php t($sluzba['cislo']); ?></span>
                    <img src="<?php t($sluzba['obrazek']); ?>" alt="<?php t($sluzba['alt']); ?>" loading="lazy">
                </div>
                <div class="service-copy">
                    <h3><?php t($sluzba['nazev']); ?></h3>
                    <?php foreach ($sluzba['odstavce'] as $odstavec): ?>
                    <p><?php raw($odstavec); ?></p>
                    <?php endforeach; ?>

                    <?php if (!empty($sluzba['cena'])): ?>
                    <div class="service-price">
                        <strong><?php t($sluzba['cena']['hodnota']); ?></strong>
                        <span><?php t($sluzba['cena']['popis']); ?></span>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($sluzba['tiery'])): ?>
                    <div class="plan-tiers">
                        <?php foreach ($sluzba['tiery'] as $tier): ?>
                        <div class="tier">
                            <strong><?php t($tier['hodnota']); ?></strong>
                            <span><?php t($tier['popis']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <a href="#kontakt" class="btn btn--gold"><?php t($sluzba['tlacitko']); ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- EBOOK -->
    <section id="ebook" data-theme="dark">
        <div class="container ebook-wrap">
            <div class="ebook-cover reveal">
                <img src="<?php t($obsah['ebook']['obrazek']); ?>" width="800" height="600" alt="<?php t($obsah['ebook']['alt']); ?>" loading="lazy">
            </div>
            <div class="ebook-copy">
                <p class="overline reveal"><?php t($obsah['ebook']['overline']); ?></p>
                <h2 class="reveal"><?php t($obsah['ebook']['nadpis']); ?></h2>
                <p class="reveal" style="--delay:0.1s"><?php t($obsah['ebook']['odstavec_1']); ?></p>
                <p class="reveal" style="--delay:0.15s"><?php t($obsah['ebook']['odstavec_2']); ?></p>
                <a href="#kontakt" class="btn btn--gold reveal" style="--delay:0.2s"><?php t($obsah['ebook']['tlacitko']); ?></a>
            </div>
        </div>
    </section>

    <!-- KONTAKT -->
    <section id="kontakt" data-theme="light">
        <div class="container contact-grid">
            <div class="contact-info reveal">
                <p class="overline"><?php t($obsah['kontakt_sekce']['overline']); ?></p>
                <h2><?php t($obsah['kontakt_sekce']['nadpis']); ?></h2>
                <p><?php t($obsah['kontakt_sekce']['text']); ?></p>
                <div class="contact-detail">
                    <strong><?php t($obsah['kontakt_sekce']['email_label']); ?></strong>
                    <a href="mailto:<?php t($obsah['kontakt']['email']); ?>"><?php t($obsah['kontakt']['email']); ?></a>
                </div>
                <div class="contact-detail">
                    <strong><?php t($obsah['kontakt_sekce']['lokalita_label']); ?></strong>
                    <span><?php t($obsah['kontakt']['lokalita']); ?></span>
                </div>

                <?php if (!empty($obsah['socialni_site'])): ?>
                <div class="social-links social-links--contact">
                    <?php if (!empty($obsah['socialni_site']['facebook'])): ?>
                    <a href="<?php t($obsah['socialni_site']['facebook']); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3.6l.4-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($obsah['socialni_site']['instagram'])): ?>
                    <a href="<?php t($obsah['socialni_site']['instagram']); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="2.5" width="19" height="19" rx="5"/><circle cx="12" cy="12" r="4.3"/><circle cx="17.4" cy="6.6" r="1.1" fill="currentColor" stroke="none"/></svg>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <form class="contact-form reveal" id="contact-form" style="--delay:0.1s" data-mail="<?php t($obsah['kontakt']['email']); ?>">
                <label for="name"><?php t($obsah['formular']['jmeno_label']); ?></label>
                <input type="text" id="name" name="name" placeholder="<?php t($obsah['formular']['jmeno_placeholder']); ?>" required>
                <label for="email"><?php t($obsah['formular']['email_label']); ?></label>
                <input type="email" id="email" name="email" placeholder="<?php t($obsah['formular']['email_placeholder']); ?>" required>
                <label for="message"><?php t($obsah['formular']['zprava_label']); ?></label>
                <textarea id="message" name="message" rows="5" placeholder="<?php t($obsah['formular']['zprava_placeholder']); ?>" required></textarea>
                <button type="submit" class="btn btn--gold btn--block"><?php t($obsah['formular']['tlacitko']); ?></button>
                <p class="form-note"><?php t($obsah['formular']['poznamka']); ?> <?php t($obsah['kontakt']['email']); ?>.</p>
            </form>
        </div>
    </section>

</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <p><?php t($obsah['paticka']['copyright']); ?></p>
        <p><a href="mailto:<?php t($obsah['kontakt']['email']); ?>"><?php t($obsah['kontakt']['email']); ?></a> &middot; <?php t($obsah['kontakt']['lokalita']); ?></p>

        <?php if (!empty($obsah['socialni_site'])): ?>
        <div class="social-links social-links--footer">
            <?php if (!empty($obsah['socialni_site']['facebook'])): ?>
            <a href="<?php t($obsah['socialni_site']['facebook']); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Facebook">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3.6l.4-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            </a>
            <?php endif; ?>
            <?php if (!empty($obsah['socialni_site']['instagram'])): ?>
            <a href="<?php t($obsah['socialni_site']['instagram']); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Instagram">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="2.5" width="19" height="19" rx="5"/><circle cx="12" cy="12" r="4.3"/><circle cx="17.4" cy="6.6" r="1.1" fill="currentColor" stroke="none"/></svg>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</footer>

<script src="script.js" defer></script>
</body>
</html>
