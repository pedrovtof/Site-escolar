(()=> {
    const btn = document.getElementById('btnTESTE');  //ID DO BOTAO
    const result = document.getElementById('result');  //MENSAGEM
    const textArea = document.getElementById('redacao'); //COLOCAR AQUI O TEXTAREA
  
    
  
    if (window.SpeechRecognition || window.webkitSpeechRecognition) {
      const MySpeech = new webkitSpeechRecognition();
      MySpeech.lang = 'pt-BR';
  
  
      const onClick = () => {
  
        try {
          MySpeech.start();
          textArea.innerHTML = 'Estou ouvindo...'// ALTERAR PARA TEXT
        } catch (error) {
  
          alert('Erro ::' + error.message)
          
        }
  
      }
  
  
      const onSpeech = (event) => {
  
        const text = event.results[0][0].transcript;
  

            textArea.innerHTML = text || 'Ocorreu um erro!'; //MENSAGEM
        
  
      }
  
      
      MySpeech.addEventListener('result', onSpeech);
      btn.addEventListener('click', onClick);
    } else {
      result.innerHTML = 'Seu navegador não tem suporte a API' //VALIDACAO
      
    }
  
    
  
  })()