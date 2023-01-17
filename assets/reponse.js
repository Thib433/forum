function submitForm(reponse) {
    var form = document.getElementById(reponse);
    var request = new XMLHttpRequest();
  
    // Préparer l'appel à l'API en utilisant la méthode POST et en envoyant les données du formulaire
    request.open('POST', form.postAnswerAction.php, true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    request.send(new FormData(form));
  
    // Gérer la réponse de l'API
    request.onload = function() {
      if (request.status >= 200 && request.status < 400) {
        // La soumission du formulaire s'est bien passée
        console.log('Formulaire soumis avec succès');
      } else {
        // Il y a eu un problème lors de la soumission du formulaire
        console.error('Erreur lors de la soumission du formulaire');
      }
    };
  }
  