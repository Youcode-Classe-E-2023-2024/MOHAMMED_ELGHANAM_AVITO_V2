const anonnces = document.getElementById('anonnce');
const user = document.getElementById('users');


function anonnce() {
    console.log("sat");
    user.style.display='none';
    anonnces.style.display='flex';   
}
function users() {
    console.log("sat");
    user.style.display='flex';
    anonnces.style.display='none';   
}

// 

// const exampleForm = document.getElementById('yourFormId'); // Replace 'yourFormId' with the actual ID of your form

// exampleForm.addEventListener('submit', function (event) {
//   event.preventDefault(); // Prevent the default form submission behavior

//   const formData = new FormData(exampleForm);
//   formData.append('id', 2);

//   fetch('file.php', {
//     method: 'POST',
//     body: formData, // Pass formData directly as the body
//   })
//     .then(response => response.text())
//     .then(data => {
//       console.log(data);
//     })
//     .catch(error => {
//       console.error('Error sending data:', error);
//     });
// });
