
$(document).ready(function(){
    // Add scrollspy to <body>
    //$('body').scrollspy({target: ".myScrollspy", offset: 50});

    // Add smooth scrolling to all links inside a navbar
    $("#myScrollspy a").on('click', function(event){

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash (#)
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area (the speed of the animation)
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });

    // Bij elke resize kijen we of het een telefoonscherm is en activeren/deactiveren we affix
    $(window).resize(function(){
        if($(document).width() <= 760)
        {
            $(window).off('.affix');
            $("#menu").removeAttr("data-spy");
        }
        else
        {
            $(window).on('.affix');
            $("#menu").attr("data-spy","affix");
        }
    });

    //kijken naar de schermgrootte en affix uitzetten als telefoon
    if($(document).width() <= 760)
    {
        $(window).off('.affix');
        $("#menu").removeAttr("data-spy");
    }


});

