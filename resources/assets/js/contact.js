
//vanaf hier volgt de controle voor het formulier

		var naam,email,vraag;

		function controleer () 		//de functie controleer kijkt of alles juist ingevuld is en geeft de errors
		{
			naam = document.getElementById("naam");
			email = document.getElementById("email");
			vraag = document.getElementById("vraag");

			//voor het naam-vak

			if (naam.value == "") 
			{
				document.getElementById("errorN").style.display = "inline";
			}
			else
			{
				document.getElementById("errorN").style.display = "none";
			}

			//voor het email-vak

			if (email.value == "") 
			{
				document.getElementById("errorE").style.display = "inline";
			}
			else
			{
				if ((email.value.indexOf("@") == -1) || (email.value.indexOf(".") == -1) || (email.value.length < 4)) 
				{
					document.getElementById("errorE").style.display = "inline";
				}
				else
				{
					document.getElementById("errorE").style.display = "none";
				}	
			}

			//voor het vraag-vak

			if (vraag.value == "") 
			{
				document.getElementById("errorV").style.display = "inline";
			}
			else
			{
				document.getElementById("errorV").style.display = "none";
			}

		}

		function check () 		//de functie check controleer bij elke verandering of alles juist is ingevuld, en zet of gemailt mag worden of niet
		{
			naam = document.getElementById("naam");
			email = document.getElementById("email");
			vraag = document.getElementById("vraag");

			if ((naam.value != "") && ((email.value.indexOf("@") != -1) && (email.value.indexOf(".") != -1) && (email.value.length > 4)) && (vraag.value != "")) 		//als alles juist is, mag er gemailt worden
			{
				document.getElementById("knop").type = "submit";
			}
			else
			{
				document.getElementById("knop").type = "button";
			}
		}

		function leeg ()		//deze functie maakt alle velden leeg, en controleert terug of er verzonden mag worden.
		{
			naam = document.getElementById("naam");
			email = document.getElementById("email");
			vraag = document.getElementById("vraag");

			naam.value = "";
			email.value = "";
			vraag.value = "";

			check();

		}

		function checkgemaild () 
		{
			argumenten = window.location.search;			//geeft de inhou in de adresbalk na de url (vb: ?mailok)
			if (argumenten == "?mailok") 
			{
				document.getElementById("verplicht").innerHTML = "Uw vraag werd met succes verstuurd.";
			}
		}


