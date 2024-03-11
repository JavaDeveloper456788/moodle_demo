<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Adresár so súbormi pre správu servera';
$string['availablelangs'] = 'Dostupné jazykové balíčky';
$string['chooselanguagehead'] = 'Vyberte jazyk';
$string['chooselanguagesub'] = 'Zvoľte si jazyk pre inštaláciu. Tento jazyk bude tiež použitý ako východzí jazyk portálu, ale môže byť neskôr zmenený.';
$string['clialreadyconfigured'] = 'Konfiguračný súbor config.php už existuje. Spusťte admin/cli/install_database.php, ak chcete inštalovať Moodle pre tento portál.';
$string['clialreadyinstalled'] = 'Súbor config.php už existuje. Použite admin/cli/install_database.php ak chcete aktualizovať váš portál.';
$string['cliinstallheader'] = 'Moodle {$a} inštalačný program z príkazového riadku';
$string['clitablesexist'] = 'Databázové tabuľky už existujú, CLI inštalácia nemôže pokračovať.';
$string['databasehost'] = 'Databázový server';
$string['databasename'] = 'Názov databázy';
$string['databasetypehead'] = 'Vyberte ovládač pre databázu';
$string['dataroot'] = 'Adresár pre údaje';
$string['datarootpermission'] = 'Prístupové práva k údajovému adresáru';
$string['dbprefix'] = 'Predpona tabuliek';
$string['dirroot'] = 'Adresár Moodle';
$string['environmenthead'] = 'Kontrola programového prostredia...';
$string['environmentsub2'] = 'Každé vydanie Moodle vyžaduje určitú minimálnu verziu PHP a niekoľko povinných rozšírení PHP. Plná kontrola prostredia sa vykonáva pred každou inštaláciou a aktualizáciou. Prosím, kontaktujte správcu servera, ak neviete, ako nainštalovať novú verziu, alebo povoliť rozšírenia PHP.';
$string['errorsinenvironment'] = 'Kontrola programového prostredia zlyhala!';
$string['installation'] = 'Inštalácia';
$string['langdownloaderror'] = 'Bohužiaľ, jazyk "{$a}" sa nepodarilo nainštalovať. Inštalácia bude pokračovať v angličtine.';
$string['memorylimithelp'] = '<p>PHP limit pamäte pre Váš server je momentálne nastavený na {$a}.</p>

<p>Toto môže neskôr spôsobiť problémy v Moodle, najmä ak máte veľa modulov a/alebo veľa používateľov.</p>

<p>Odporúčame Vám, aby ste nastavili PHP s vyšším limitom pamäte, ak je to možné, napr. 40M. Na to existuje veľa spôsobov, ktoré môžete vyskúšať:</p>
<ol>
<li>Ak je to možné, znovu vytvorte PHP s <i>--enable-memory-limit</i>. Toto umožní Moodle samonastavenie limitu pamäte.</li>
<li>Ak máte prístup k Vášmu php.ini súboru, môžete zmeniť <b>memory_limit</b> nastavenie, napr. na 40M. Ak nemáte prístup k súboru, môžete sa na to spýtať Vášho administrátora.</li>
Na niektorých PHP serveroch, si môžete vytvoriť súbor .htaccess v Adresári Moodle, ktorý bude obsahovať tento riadok: <p><blockquote><div>php_value memory_limit 40M</div></blockquote></p>
<p>Avšak, na niektorých serveroch bude toto brániť <b>všetkým</b> PHP stránkam v práci (budete vidieť chyby, keď sa pozriete na stránky), takže budete musieť odstrániť súbor .htaccess.</p></li>
</ol>';
$string['paths'] = 'Cesty';
$string['pathserrcreatedataroot'] = 'Inštalátor nemôže vytvoriť dátový adresár ({$a->dataroot}). ';
$string['pathshead'] = 'Vytvoriť cesty';
$string['pathsrodataroot'] = 'Kmeňový adresár nie je zapisovateľný';
$string['pathsroparentdataroot'] = 'Nadriadený adresár ({$a->parent}) nie je zapisovateľný. Inštalátor nemôže vytvoriť dátový adresár ({$a->dataroot}). ';
$string['pathssubadmindir'] = 'Na niektorých serveroch je URL adresa /admin vyhradená pre špeciálne účely (napr. pre ovládací panel). Na takých serveroch môže dojsť ku kolízii so štandardným umiestnením stránok pre administratívu Moodle. Ak máte tento problém, premenujte adresár <em>admin</em> vo vašej inštalácii Moodle a sem zadajte jeho nový názov - napríklad <em>moodleadmin</em>. Všetky generované odkazy na stránky správy Moodle budú používať tento nový názov.';
$string['pathssubdataroot'] = '<p>Potrebujete adresár, kam Moodle bude ukladať nahrané súbory.</p>
<p>Adresár by mal povoliť čítanie a zapisovanie údajov používateľom web serveru (webový server býva väčšinou spustený pod používateľom "www-data" alebo "apache"), ale nesmie byť prístupný priamo cez web rozhranie. Pokiaľ ešte neexistuje, inštalácia sa pokúsi o jeho vytvorenie. </p>';
$string['pathssubdirroot'] = '<p>Absolútna cesta adresára Moodle inštalácie.</p>';
$string['pathssubwwwroot'] = '<p>Zadajte úplnú webovú adresu, na ktorej bude Moodle dostupný, t.j. adresa, ktorú zadajú používatelia do adresného riadku svojho prehliadača, aby spustili Moodle.</p>
<p>Moodle potrebuje jedinečnú adresu, nie je možné ho prevádzkovať na niekoľkých URL súčasne. Ak používate niekoľko verejných domén, musíte si sami nastaviť permanentné presmerovanie na jednu z nich a tú potom použiť.</p>
<p> Ak je váš server dostupný z vonkajšej a vnútornej siete pod rôznymi IP adresami, použite jeho verejnú adresu a nastavte si váš DNS server tak, že ju môžu používať aj používatelia z vnútornej siete.</p>
<p>Ak nie je aktuálna adresa správna, zmeňte URL adresu v adresnom riadku prehliadača a spusťte inštaláciu.</p>';
$string['pathsunsecuredataroot'] = 'Umiestnenie dátového adresára nie je bezpečné';
$string['pathswrongadmindir'] = 'Administrátorský adresár neexistuje';
$string['phpextension'] = 'Rozšírenie PHP {$a}';
$string['phpversion'] = 'Verzia PHP';
$string['phpversionhelp'] = '<p>Moodle si vyžaduje verziu PHP aspoň  5.6.5 alebo 7.1 (7.0.x má určité obmedzenia jadra).</p>
<p>Vy máte momentálne nainštalovanú túto verziu {$a}.</p>
<p>Musíte aktualizovať PHP alebo sa presunúť na hostiteľský počítač s novšou verziou PHP</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Podarilo so vám úspešne nainštalovať a spustiť balíček <strong>{$a->packname} {$a->packversion}</strong>. Gratulujeme!';
$string['welcomep30'] = 'Táto verzia <strong>{$a->installername}</strong> obsahuje aplikáciu k vytvoreniu prostredia, v ktorom bude prevádzkovaný váš <strong>Moodle</strong>. Menovite sa jedná o:';
$string['welcomep40'] = 'Balíček tiež obsahuje <strong>Moodle vo verzii {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Použitie všetkých aplikácií v tomto balíčku je viazané ich príslušnými licenciami. Kompletný balíček <strong>{$a->installername}</strong> je software s <a href="http://www.opensource.org/docs/definition_plain.html"> otvoreným kódom (open source)</a> a je šírený pod licenciou <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Nasledujúce stránky vás povedú v nekoľkých jednoduchých krokoch nastavením <strong>Moodle</strong> na vašom počítači. Môžete prijať východzie nastavenie, alebo si ich upraviť podľa svojich potrieb.';
$string['welcomep70'] = 'Stlačením nižšie uvedeného tlačidla "Ďalší" pokračujte v nastavení vašej inštalácie Moodle.';
$string['wwwroot'] = 'Web adresa';
