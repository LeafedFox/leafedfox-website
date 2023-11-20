
window.addEventListener('load', () => {
  fetch('https://discordlookup.mesavirep.xyz/v1/user/200622061062717440')
    .then(response => response.json())
    .then(data => {
      const profileImage = document.querySelector('#profile-image');
      profileImage.src = data.avatar.link;
      profileImage.classList.remove('animate-pulse');
    })
    .catch(error => {
      console.error('Error:', error);
    });
});
