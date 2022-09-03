function iniciar() {
        var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
        var myRecognition = new SpeechRecognition();
        myRecognition.lang = 'pt-BR';
        myRecognition.start();
		myRecognition.addEventListener('result', function (evt) {
		if (window.SpeechRecognition || window.webkitSpeechRecognition) {
            var resultSpeak = evt.results[0][0].transcript;
			var Res = (resultSpeak).toUpperCase();
			if (Res == "OCORRÊNCIA" || Res == "OCORRÊNCIA POR VOZ" || Res == "MANEJO" || Res == "OCORRÊNCIAS"){
				window.location.href = "manejo.php";
			}else if(Res == "ANIMAL" || Res == "CADASTRAR ANIMAL" || Res == "ANIMAIS"){
				window.location.href = "../../index.php";
			}else if(Res == "SECAGEM" || Res == "SECO" || Res == "SECAGEM POR VOZ"){
				window.location.href = "estado.php";
			}else if(Res == "SAIR" || Res == "FIM" || Res == "OBRIGADO"){
				window.location.href="../view/https://www.agrovoice.ueg.br"
			}else if(Res == "INÍCIO" || Res == "INICIAR"){
				window.location.href = "../view/inicio.php";
			}else if(Res == "ORDENHA" || Res == "ORDENHA POR VOZ" || Res == "CONTROLE LEITEIRO" || Res == "TIRAR LEITE" || Res == "LEITE"){
				window.location.href = "../view/ordenha.php";
			}
			iniciar();
			myRecognition.addEventListener('error', function() {
				iniciar();
			}, false);
		iniciar();
    	} else {
        	alertify.error("Problema de navegador use o Google Chrome!");
			iniciar();
		}
			iniciar();
	}, false);
}