const form = document.querySelector('.login form');
const SendBtn = form.querySelector('.button button');
const MsgError = document.querySelector('.text_error');


form.onsubmit =(e)=>{
  e.preventDefault();
}


SendBtn.onclick = ()=>{
      xhr = new XMLHttpRequest();
      xhr.open("POST" , "php/login.php" , true);
      xhr.onload =()=>{
            if (xhr.readyState === XMLHttpRequest.DONE) {
         
                if (xhr.status === 200) {
                  let data = xhr.response;
                      if (data == 'success') {
                                                    // Remplace le texte "Envoyer" par une icône de chargement
                            SendBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>   Connexion  en cours...';

                            // Désactive le bouton pendant l'opération
                            SendBtn.disabled = true;

                            // Simule un délai pour représenter l'envoi des données (par exemple, 3 secondes)
                            setTimeout(function() {
                              // Une fois terminé, réactive le bouton et remet le texte original
                              SendBtn.innerHTML = '<i class="fas fa-sync-fa-spin"></i> Connexion ';
                              SendBtn.disabled = false;
                            },4000); // 3 secondes de délai
                            setInterval(()=>{
                                   location.href = 'accueil.html';
                            },2000)
                          
                    }
                    else{
                      MsgError.textContent = data;
                      MsgError.style.display = "block";
                    }
             
                    
                }
            }
      }

      let fordata = new FormData(form);
      xhr.send(fordata);
}

document.querySelectorAll('.toggle-password').forEach(item => {
  item.addEventListener('click', function () {
      const input = this.previousElementSibling;
      const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
      input.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
  });
});
function SendEn() {
  
  const sendButton = document.getElementById('SendF');

  // Remplace le texte "Envoyer" par une icône de chargement
  sendButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i>   Enregistrement  en cours...';

  // Désactive le bouton pendant l'opération
  sendButton.disabled = true;

  // Simule un délai pour représenter l'envoi des données (par exemple, 3 secondes)
  setTimeout(function() {
    // Une fois terminé, réactive le bouton et remet le texte original
    sendButton.innerHTML = '<i class="fas fa-sync-fa-spin"></i> Enregistrer ';
    sendButton.disabled = false;
  }, 3000); // 3 secondes de délai
}
