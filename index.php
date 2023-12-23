<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Freebid Login</title>
    <script scr='script.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
</head>
<body>
    <div style='width:30%;display:flex;margin:2%;position:absolute' >
    <img style="pointer-events:none" width='30px'src="assets/bottom_logo.png" alt="">
    <h1>reebid</h1>
    </div>
    <h5 id='tandc'>Registrandoti accetti i nostri <a href='https://freebid.biz/Terms_and_Conditions.pdf'>termini e condizioni </a><br>e la nostra <a href='https://freebid.biz/Privacy_Policy.pdf'>privacy policy</a></h5>
    <div id='cookie_background'>
        <div id="cookie-banner" style="display: block;">
            <p>Questo sito utilizza i cookie per garantire un'esperienza migliore. <a href="/Cookie_Policy.pdf">Maggiori informazioni</a></p>
            <button id="accept-cookies">Accetta</button>
        </div>
    </div>
    <img id='faq_button' style="margin:1%;position:absolute;right:0;bottom:0;" width='30px'src="assets/faq_icon.png" alt="">
    <a href="mailto:assistenza@freebid.biz" style='margin:1%;position:absolute;left:0;bottom:0;color:white;text-decoration:none'>Assistenza</a>
    
    <div id='warning_box' >
        <p id="warning_message"></p>
        <button id='close_warning'>✘</button>
    </div>
    
    <div id="faq_popup">
        <div style='overflow-y:auto'id="popup_container">

            <div style="display:flex;margin-bottom:3%">
                <h2>Domande frequenti</h2>
                <button class='close_popup' id="close_faq_popup">✘</button>            
            </div>
            <h3 style='margin-bottom:1%'>Quante puntate al giorno posso riscattare?</h3>
            <h5 style='margin-bottom:2%;line-height: 1.4;'>È un valore molto variabile e dipende unicamente da quante ne vengono pubblicate,la media attualmente si aggira dalle 15 alle 20 al giorno. </h5>
            <h3 style='margin-bottom:1%'>Quali sono le differenze tra i vari "piani" disponibili?</h3>
            <h5 style='margin-bottom:2%;line-height: 1.4;'>Con il livello completo da 2.99€ al mese (non è un pagamento ricorrente, si paga manualmente ogni singola volta, come tutti gli altri abbonamenti sul sito.) verranno rimosse tutte le pubblicità dal sito; con l'abbonamento da 15€ al mese invece il grosso vantaggio è quello di poter riscattare le puntate su un massimo di 3 account al posto di uno; ed infine con l'abbonamento da 50€ all'anno puoi riscattarle su un numero illimitato di account. C'è inoltre un livello gratuito senza limiti di tempo, con cui puoi riscattare le puntate su un solo account. Gli abbonamenti sono inoltre un ottimo modo per supportare il mantenimento e lo sviluppo del sito, dunque ringrazio in anticipo chiunque deciderà di acquistare un qualsiasi piano :).</h5>
            <h3 style='margin-bottom:1%'>È presente qualche recensione di questo servizio?</h3>
            <h5 style='margin-bottom:2%;line-height: 1.4;'>Assolutamene si!, le puoi trovare, insieme a molte altre informazioni, sul <a href="https://t.me/+v_9DMMwXbpw0NDU8">canale Telegram</a> ufficiale di Freebid.</h5>
            <h3 style='margin-bottom:1%'>Ho bisogno di aiuto!</h3>
            <h5 style='margin-bottom:2%;line-height: 1.4;'>Contattaci pure alla nostra email: assistenza@freebid.biz e saremo prontissimi ad aiutarti.</h5>
        </div>
    </div>
    <div id="forms_container">
        <form action="register.php" method="post" id="register_form">
            <h1 style="margin-bottom:15%">Registrati</h1>

            <label for="email">Email:</label>
            <input type="email" name="email" id="register_email" required style="margin-bottom:5%">

            <label for="password">Password:</label>
            <input type="password" name="password" id="register_psw" required style="margin-bottom:5%">

            <label for="confirm_password">Conferma password:</label>
            <input type="password" name="confirm_password" id="confirm_password" required style="margin-bottom:15%">

            <button id="register_btn">Registrati</button>
        </form>
        <div id="splitter"></div>
        <form action="login.php" method="post" id="login_form">
            <h1 style="margin-bottom:28%">Accedi</h1>

            <label for="email">Email:</label>
            <input type="email" name="email" id="login_email" required style="margin-bottom:5%">

            <label for="password">Password:</label>
            <input type="password" name="password" id="login_psw" required style="margin-bottom:15%">

            <label style="margin-bottom:0%"><input type="checkbox" name="rem" >  Ricordami</label>

            <button id="login_btn">Login</button>
        </form>
        
    </div>
    
        
</body>

<script>
    var faq_btn= document.getElementById("faq_button")
    var faq_popup= document.getElementById("faq_popup")
    var close_faq_popup= document.getElementById("close_faq_popup")
    faq_btn.addEventListener("click", (event) => {
    faq_popup.style.display="flex";
    });

    close_faq_popup.addEventListener("click", (event) => {
        faq_popup.style.display="none";
    });
    document.addEventListener("DOMContentLoaded", function () {
    var cookieBanner = document.getElementById("cookie_background");
    var acceptCookiesButton = document.getElementById("accept-cookies");
    
   
    var consentCookie = cookieExists("consentCookie");

    if (!consentCookie) {
       
        cookieBanner.style.display = "flex";

        acceptCookiesButton.addEventListener("click", function () {
            
            cookieBanner.style.display = "none";

            setCookie("consentCookie", "true", 365); 
        });
        }
    });


    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function cookieExists(cookieName) {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();

            if (cookie.indexOf(cookieName + '=') === 0) {
                return true; 
            }
        }
        return null; 
    }


    </script>
</html>

