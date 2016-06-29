	function validateForm() {
			var x = document.forms["myForm"]["ime"].value;
			if (x == null || x == "") {
			alert("Morate napisati ime!");
			return false;
			}
			
			var x = document.forms["myForm"]["prezime"].value;
			if (x == null || x == "") {
			alert("Morate napisati prezime!");
			return false;
			}
			
			var x = document.forms["myForm"]["email"].value;
			if (x == null || x == "") {
			alert("Morate napisati e-mail!");
			return false;
			}
			
			var x = document.forms["myForm"]["email"].value;
			var atpos = x.indexOf("@");
			var dotpos = x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
				alert("Nije valjana e-mail adresa");
				return false;
			}
			
			var x = document.forms["myForm"]["tekst"].value;
			if (x == null || x == "") {
			alert("Morate napisati pitanje, jer bez pitanja, kontakt dio nema smisla. :)");
			return false;
			}
			
			
		}