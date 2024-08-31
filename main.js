


let addForm = document.getElementById("add-user-form");
let showAlert= document.getElementById("showAlert");
let addModal= new bootstrap.Modal(document.getElementById("aprimodale"));
let tbody= document.querySelector('tbody');
// Add new User Ajax request
addForm.addEventListener('submit', async (e) => {
   
    e.preventDefault();
    let formData= new FormData(addForm);
    formData.append("add", 1);
    
    if(addForm.checkValidity() === false){
        e.preventDefault();
        e.stopPropagation();
        addForm.classList.add("was-validated");
        return false;
 
    }else{
        document.getElementById('add').value = 'Plese wait...';
        let data = await fetch("action.php",
             { method: "POST", 
                body: formData,
             
             });
   
     let response = await data.text();

     showAlert.innerHTML = response;
     document.getElementById('add').value= "Aggiungi";
     addForm.reset();
     addForm.classList.remove('was-validated');
     addModal.hide();
     fetchAllpds();
    }
});

let fetchAllpds = async () => {
    let data = await fetch("action.php?read=1", {
        method:"GET",
        
    });

 
    let response = await data.text();

    tbody.innerHTML = response;
};
fetchAllpds();

// Edit ajax request

tbody.addEventListener('click', (e) => {

   
    if(e.target && e.target.matches('a.editLink')) {
e.preventDefault();
let id = e.target.getAttribute("id");

edit(id);

console.log(id); 
    }
});


let edit= async (id) => {
let data= await fetch(`action.php?edit=1&id=${id}`,{
method : "GET",
});
let response = await data.json();
console.log(response);

};