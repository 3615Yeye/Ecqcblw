Mousetrap.bind(window.ecqcblw.combinaison, function() {
    // Fait appel à l'API est-ce que c'est bientôt le weekend intégrée dans l'extension
    $.get("/index.php?eID=ecqcblw", function( weekendData ) {
        // is_weekend = "yes";

        var is_weekend = weekendData.is_weekend ? "yes" : "no";

        $.get("https://yesno.wtf/api/?force=" + is_weekend, function( data ) {
            $.magnificPopup.open({
                items: {
                    src: data.image
                },
                type: 'image',
                mainClass: 'mfp-ecqcblw',
                removalDelay: 300,
                image: {
                    markup: "<div class='mfp-figure'>"+
                    "<p class='titre'>" + window.ecqcblw.titrePopup + "</p>"+
                    "<div class='mfp-img'></div>"+
                    "<div class='mfp-bottom-bar'>"+
                    "<div class='mfp-title'></div>"+
                    "<div class='mfp-counter'></div>"+
                    "</div>"+
                    "<p class='reponse tada'>" + weekendData.text + "</p>"+
                    "</div>", // Popup HTML markup. `.mfp-img` div will be replaced with img tag, `.mfp-close` by close button
                },
                callbacks: {
                    open: function() {
                        // Referme les Magnific Popup ouvertes après un délai exprimé en secondes
                        window.ecqcblw.timeout = window.setTimeout(function() {
                            $.magnificPopup.close();
                        }, window.ecqcblw.tempsAffichage);
                    },
                    close: function() {
                        // Désactive le délai avant la fermeture des Magnific Popup
                        // Utile en cas d'usage frénétique de la fonctionnalité par ceux qui comprennent vite mais à qui il faut expliquer longtemps
                        window.clearTimeout(window.ecqcblw.timeout);
                    },
                }
            });
        });
    });
});
