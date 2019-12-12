// get modal element
var modal = document.getElementById('simpleModal');
// open modal button
var modalBtn = document.getElementById('modalBtn');
var secondModalBtn = document.getElementById('modal_Btn');
// get close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];

// listen for open click event
modalBtn.addEventListener('click', openModal);
secondModalBtn.addEventListener('click', openModal);
// listen for close click
closeBtn.addEventListener('click', closeModal);

// listen for outside click
window.addEventListener('click', outsideClick);

//function open modal
function openModal() {
  modal.style.display = 'block';
}

//function close modal
function closeModal() {
  modal.style.display = 'none';
}

//function close modal if user clicks outside
function outsideClick(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }

}



