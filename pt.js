function showPopup(description) {
    // Mostra o popup
    document.querySelector('.popup').style.display = 'block';
    
    // Atualiza o título e descrição do popup com base na imagem clicada
    document.querySelector('#popup-title').textContent = event.target.alt;
    document.querySelector('#popup-description').textContent = description;
  }
  
  function hidePopup() {
    // Esconde o popup
    document.querySelector('.popup').style.display = 'none';
  }
  