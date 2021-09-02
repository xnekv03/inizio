1. formulář pro zadávání IČO
2. formulář bude napojen na ARES (https://wwwinfo.mfcr.cz/ares/ares_xml.html.cz)
3. po odeslání formuláře bude kontaktována služba ARES a z této služby budou získané údejo o firmě podle zadaného IČO
4. použít composer pro nainstalování nějakého balíčku pro práci s databázi
5. vyhledané údaje společne se zadaným hledaným ICO a datumem vyhledání uložit do databáze
6. vytvořit stránku, na které se budou propisovat vyhledané ICO výrazy a jejich výsledky z databáze s možnosti řazení dle názvu firmy a data vyhledání vzestupně a sestupně a přidat stránkování po 3
7. nasadit hotovou práci na libovolný hosting pod libovolnou adresu, která ale musí být pro nás přistupná

Bonusové body:
- pro nastylování použijte některý z frameworků (např. Bootstrap)
- získávejte data pomocí AJAX volání (bez reloadu stránky)
- bod 6.
    - na stránce zobrazit jen vyhledaný výraz a datum, po kliknutí na daný výraz vyskočí modal s detailem, data ziskávat pomocí ajax dotazu a dynamicky propisovat
    - přidat filtr na název firmy

- vytvořit validní RSS feed v2
    - pro dataset použijte mysql sakila sample database, tabulku address
    - feed bude obsahovat adresy, kde
        - title bude sloupec address
        - link bude validní odkaz na detail, na kterém se vypíše veškeré informace k adrese
        - pubDate bude sloupec last_update ve formátu ISO 8601 standard
    - feed se bude řadit dle sloupce last_update
    - na detailu adresy bude políčko a tlačítko k zaslání emailu s informacemi o dané adrese
    - zaslat adresu RSS feedu nebo vytvořit odkaz na stránce pro přístup.