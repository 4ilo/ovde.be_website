

//de Eerste functies dienen voor het scrollen naar een bepaalde div bij clicken op een link.

function scrollen (id) 							//deze functie scrolt naar de div die als argument gegeven is.
		{
			// Remove "link" from the ID
    		id = id.replace("link", "");
      		// Scrollen
    		$('html,body').animate({
        		scrollTop: $("#"+id).position().top},'slow');
		}
		
		$(document).ready(function(){						
			
			$("#nav2 > ul > li > a").click(function(e) { 			//kijken of er geklikt wordt op 1 van de links, en dan scrollen naar de juiste div
    			e.preventDefault(); 
    			scrollen(this.id);           
			});

// vanaf dit punt zitten de functies om te detecteren welke div er te zien is op het scherm

			var menu = document.getElementsByClassName("menu2");		//een array opvragen met alle elementen uit de menustructuur voor het scrollen

			$(window).scroll(function(){			//als er gescrold wordt wordt er gecheckt

				for (var i = 0; i < menu.length; i++) 	//een lus om elk element van de array af te gaan en te kijken welke er blauw gemaakt moet worden.
				{
					if (($(window).scrollTop() >= (i*760)) && ($(window).scrollTop() < ((i+1)*760)) ) 	// checken hoeveel pixels we van de top zitten.
					{																					//	760px = 1 pagina
						var actief = document.getElementById("pagina" + (i+1) + "link");		// als de juiste pag gevonden is,
						if (actief.className != "menu2 huidig")									//voegen we de class "huidig" toe 
						{																		//om het blauw te maken
							actief.className += ' huidig';
						}
						

						for (var j = 0; j < menu.length; j++) 	// deze lus dient om alle links van de niet actieve pagina's terug wit te maken
						{
							if(j != i)
							{
								var item = document.getElementById("pagina" + (j+1) + "link");
								item.className = "menu2";
							}
						};

					}
				};

				
			});

		});