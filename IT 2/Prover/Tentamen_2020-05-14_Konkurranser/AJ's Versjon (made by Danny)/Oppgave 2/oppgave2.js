
(function() {
  const lykkehjul = document.querySelector('.lykkehjul');

  const pil = document.querySelector('.pil');
  let deg = 0;

  pil.addEventListener('click', () => {
    pil.style.pointerEvents = 'none';
    deg = Math.floor(4000 + Math.random() * 4000);
    lykkehjul.style.transition = 'all 10s ease-out';
    lykkehjul.style.transform = `rotate(${deg}deg)`;
  });

  lykkehjul.addEventListener('transitionend', () => {
    pil.style.pointerEvents = 'auto';
    lykkehjul.style.transition = 'none';
    const ny_Deg = deg % 360;
    lykkehjul.style.transform = `rotate(${ny_Deg}deg)`;
			if (ny_Deg >=0 && ny_Deg <=90) {
				var svar = "Ape";
			}
			if (ny_Deg >=270 && ny_Deg <=359) {
				var svar = "Tiger";
			}
			if (ny_Deg >=90 && ny_Deg <=180) {
				var svar = "Elefant";
			}
			if (ny_Deg >=180 && ny_Deg <=270) {
				var svar = "Giraff";
			}

var tippet = localStorage.getItem(1);
	
if (svar === tippet) {
	test.innerHTML = "";
	info.innerHTML = "<div id='boks'><center><h1>Lykkehjul</h1></center><h3>Resultat:</h3> Du har tippet på "+tippet+", <br> mens lykkehjulet stoppet på "+svar+".<p>Dette betyr at du har gjettet riktig! <br>Gratulerer!<br><a href='oppgave2.html'><button id='buttonreset'>Tilbake</button></a></div>";
	}

else {
	test.innerHTML = "";
	info.innerHTML = "<div id='boks'><center><h1>Lykkehjul</h1></center><h3>Resultat:</h3> Du har tippet på dyret "+tippet+",<br> mens lykkehjulet stoppet på "+svar+".<p>Dette betyr at du har gjettet feil! <br>Det var synd da, men du kan alltid prøve igjen!<br><a href='oppgave2.html'><button id='buttonreset'>Tilbake</button></a></div>";
	}
	
  });
})();
