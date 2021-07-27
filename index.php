<?php 
 $faqs = [
    [
        "title" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
        "answer" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
                    Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
                    Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
                    Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
                    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.
                    ",
    ],
    [
        "title" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
        "answer" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro 
                    e accessibili quando ne hai bisogno.
                    Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. 
                    Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. 
                    Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. 
                    Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.
                    Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.
                    Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
    ]
 ];



?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php google faq</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <!-- header top -->
        <div class="top">
            <div class="logo_wrap">
                <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="logo">
                <span class="">Privacy e termini</span>
            </div>
            <div class="account_wrap">
                <svg class="gb_Ve" focusable="false" viewBox="0 0 24 24"><path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path></svg>
                <!-- <img class="gb_Ca gbii" src="https://lh3.googleusercontent.com/ogw/ADea4I583njUoOOaUFQ53Aqdftv6Jy8o8a14HW1OEtUi=s32-c-mo" srcset="https://lh3.googleusercontent.com/ogw/ADea4I583njUoOOaUFQ53Aqdftv6Jy8o8a14HW1OEtUi=s32-c-mo 1x, https://lh3.googleusercontent.com/ogw/ADea4I583njUoOOaUFQ53Aqdftv6Jy8o8a14HW1OEtUi=s64-c-mo 2x" alt="" aria-hidden="true" data-noaft=""> -->
                <img src="img/user.png" alt="user"/>
            </div>
        </div>
       <!-- fine header top -->
       <!-- header bottom -->
       <div class="bottom">
            <ul>
                <li>Introduzione</li>
                <li class="px_15">Norme sulla privacy</li>
                <li class="px_15">Termini di servizio</li>
                <li class="px_15">Tecnologie</li>
                <li>Domande frequenti</li>
            </ul>
       </div>
       <!--fine header bottom -->

    </header>
    <main class="w_70">
        
    <?php foreach($faqs as $faq){?>
        <p>
            <h2> <?php echo $faq["title"]?>  </h2>

            <p class="answer"><?php echo $faq["answer"]?> </p>
        </p>
    <?php }?>
    </main>
    <footer>
        <div class="footer_wrap w_70">
            <ul>
                <li>Google <span class="trattino">-</span> </li>
                <li>Tutto su Google <span class="trattino">-</span> </li>
                <li>Privacy <span class="trattino">-</span> </li>
                <li>Termini</li>
            </ul>
            <select name="" id="">
                <option value="af">Afrikaans</option><option value="id">Bahasa Indonesia</option><option value="ms">Bahasa Melayu</option><option value="ca">Català</option><option value="cs">Čeština</option><option value="da">Dansk</option><option value="de">Deutsch</option><option value="et">Eesti</option><option value="en">English</option><option value="en-GB">English (United Kingdom)</option><option value="es">Español</option><option value="es-419">Español (Latinoamérica)</option><option value="eu">Euskara</option><option value="fil">Filipino</option><option value="fr">Français</option><option value="fr-CA">Français (Canada)</option><option value="gl">Galego</option><option value="hr">Hrvatski</option><option value="zu">Isizulu</option><option value="is">Íslenska</option><option selected="" value="it">Italiano</option><option value="sw">Kiswahili</option><option value="lv">Latviešu</option><option value="lt">Lietuvių</option><option value="hu">Magyar</option><option value="nl">Nederlands</option><option value="no">Norsk</option><option value="pl">Polski</option><option value="pt-BR">Português (Brasil)</option><option value="pt-PT">Português (Portugal)</option><option value="ro">Română</option><option value="sk">Slovenčina</option><option value="sl">Slovenščina</option><option value="sr-Latn">Srpski</option><option value="fi">Suomi</option><option value="sv">Svenska</option><option value="vi">Tiếng Việt</option><option value="tr">Türkçe</option><option value="el">Ελληνικά</option><option value="bg">Български</option><option value="ru">Русский</option><option value="sr">Српски</option><option value="uk">Українська</option><option value="iw">‫עברית‬</option><option value="ur">‫اردو‬</option><option value="ar">‫العربية‬</option><option value="fa">‫فارسی‬</option><option value="am">አማርኛ</option><option value="mr">मराठी</option><option value="hi">हिन्दी</option><option value="bn">বাংলা</option><option value="gu">ગુજરાતી</option><option value="ta">தமிழ்</option><option value="te">తెలుగు</option><option value="kn">ಕನ್ನಡ</option><option value="ml">മലയാളം</option><option value="th">ไทย</option><option value="ko">한국어</option><option value="zh-HK">中文 (香港)</option><option value="zh-CN">中文（简体中文）</option><option value="zh-TW">中文（繁體中文）</option><option value="ja">日本語</option>
            </select>
        </div>
        
    </footer>
</body>
</html>
