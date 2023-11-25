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

