<?php if (!isset($_COOKIE["consent"])){?>
    <div id="cookieConsent" class="fade show d-flex justify-content-between my-auto" role="alert">
        <p class="align-self-center">En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies dans un but statistique. <a href="privacy.php">En savoir plus</a>.</p>
        <button type="button" class="accept-policy close" data-dismiss="alert" aria-label="Close" data-cookie="consent">
            <span aria-hidden="true">Accepter</span>
        </button>
    </div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65203139-1"></script>
    <script>
        (function () {
            var button = document.querySelector("#cookieConsent button[data-cookie]");
            button.addEventListener("click", function (event) {
                var d = new Date();
                d.setTime(d.getTime() + (365*24*60*60*1000));
                var expires = "expires="+ d.toUTCString();
                document.cookie = `consent=Yes; ${expires}`; ;
                document.querySelector("#cookieConsent").classList.remove("show");

                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }
                gtag('js', new Date());

                gtag('config', 'UA-65203139-1');
            }, false);
        })();
    </script>
<?php }?>