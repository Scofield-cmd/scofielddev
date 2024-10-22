
    $(document).ready(function() {
      // Fonction pour charger le contenu avec AJAX
      $('.load-content').on('click', function(e) {
        e.preventDefault(); // Empêche le comportement par défaut du lien
        var page = $(this).data('page'); // Récupère la page à charger
        $('#content').load(page); // Charge la page dans la zone de contenu
      });
    });
   
   
   // Simule l'état de l'utilisateur (non connecté au départ)
    let isLoggedIn = false;

    // Fonction qui change l'état de connexion
    function toggleLogin() {
      isLoggedIn = !isLoggedIn; // Inverse l'état de connexion

      // Sélectionne le bouton
      const authButton = document.getElementById('authButton');

      // Change le texte du bouton en fonction de l'état de l'utilisateur
      if (isLoggedIn) {
        authButton.textContent = 'Déconnexion';
        authButton.classList.remove('btn-primary');
        authButton.classList.add('btn-danger');
      } else {
        authButton.textContent = 'Connexion';
        authButton.classList.remove('btn-danger');
        authButton.classList.add('btn-primary');
      }
    }


  function sendData() {
    const sendButton = document.getElementById('sendButton');

    // Remplace le texte "Envoyer" par une icône de chargement
    sendButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> En cours d\'enregitrement...';

    // Désactive le bouton pendant l'opération
    sendButton.disabled = true;

    // Simule un délai pour représenter l'envoi des données (par exemple, 3 secondes)
    setTimeout(function() {
      // Une fois terminé, réactive le bouton et remet le texte original
      sendButton.innerHTML = 'Enregistrer';
      sendButton.disabled = false;
    }, 3000); // 3 secondes de délai
  }

function EditData() {
    const sendButton = document.getElementById('EditButton');

    // Remplace le texte "Envoyer" par une icône de chargement
    sendButton.innerHTML = '<i class="fas fa-sync fa-spin"></i> Mise á jour en cours...';

    // Désactive le bouton pendant l'opération
    sendButton.disabled = true;

    // Simule un délai pour représenter l'envoi des données (par exemple, 3 secondes)
    setTimeout(function() {
      // Une fois terminé, réactive le bouton et remet le texte original
      sendButton.innerHTML = '<i class="fas fa-sync"></i> Mettre á jour';
      sendButton.disabled = false;
    }, 3000); // 3 secondes de délai
  }
  
  function EditPassword() {
    const sendButton = document.getElementById('EditPass');

    // Remplace le texte "Envoyer" par une icône de chargement
    sendButton.innerHTML = '<i class="fas fa-sync fa-spin"></i> Changement  en cours...';

    // Désactive le bouton pendant l'opération
    sendButton.disabled = true;

    // Simule un délai pour représenter l'envoi des données (par exemple, 3 secondes)
    setTimeout(function() {
      // Une fois terminé, réactive le bouton et remet le texte original
      sendButton.innerHTML = '<i class="fas fa-sync"></i> Changer ';
      sendButton.disabled = false;
    }, 3000); // 3 secondes de délai
  } 
  
  function AddInvoice() {
    const sendButton = document.getElementById('createInvoice');

    // Remplace le texte "Envoyer" par une icône de chargement
    sendButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enregistrement  en cours...';

    // Désactive le bouton pendant l'opération
    sendButton.disabled = true;

    // Simule un délai pour représenter l'envoi des données (par exemple, 3 secondes)
    setTimeout(function() {
      // Une fois terminé, réactive le bouton et remet le texte original
      sendButton.innerHTML = '<i class="fas fa-sync-fa-spin"></i> Enregistrer ';
      sendButton.disabled = false;
    }, 3000); // 3 secondes de délai
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


function SendConnexion() {
  
  const sendButton = document.getElementById('Sendconn');

  // Remplace le texte "Envoyer" par une icône de chargement
  sendButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i>   Connexion  en cours...';

  // Désactive le bouton pendant l'opération
  sendButton.disabled = true;

  // Simule un délai pour représenter l'envoi des données (par exemple, 3 secondes)
  setTimeout(function() {
    // Une fois terminé, réactive le bouton et remet le texte original
    sendButton.innerHTML = '<i class="fas fa-sync-fa-spin"></i> Connexion ';
    sendButton.disabled = false;
  }, 3000); // 3 secondes de délai
}


// new DataTable('#example', {
//   responsive: true
// });