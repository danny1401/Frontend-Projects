
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
			if (ny_Deg >=90 && ny_Deg <=180) {
				var svar = "Ape";
			}
			if (ny_Deg >=0 && ny_Deg <=90) {
				var svar = "Tiger";
			}
			if (ny_Deg >=180 && ny_Deg <=270) {
				var svar = "Elefant";
			}
			if (ny_Deg >=270 && ny_Deg <=359) {
				var svar = "Giraff";
			}

var tippet = localStorage.getItem(1);
	
if (svar === tippet) {
	info.innerHTML = "<h3>Resultat</h3><div>Du har tippet riktig! Gratulerer!<p>Du har tippet på "+tippet+" og lykkehjulet stoppet på "+svar+".</div>";
}
else {
	info.innerHTML = "<h3>Resultat</h3><div>Du har tippet feil! Det var synd da, men du kan alltid prøve igjen!<p>Du har tippet på dyret "+tippet+", mens lykkehjulet stoppet på "+svar+".</div>";
}
	
  });
})();
