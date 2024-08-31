


let addForm = document.getElementById("add-user-form");

let updateForm = document.getElementById("edit-user-form");
let showAlert= document.getElementById("showAlert");
let addModal= new bootstrap.Modal(document.getElementById("aprimodale"));
let editModal= new bootstrap.Modal(document.getElementById("editmodale"));
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


   
        }
    });


let edit = async (id) => {
let data= await fetch(`action.php?edit=1&id=${id}`,{
method : 'GET',
});
let response = await data.json();
console.log(response);

document.getElementById("id").value=response.id;
document.getElementById("n_pds").value=response.n_pds;
document.getElementById("data_pds").value=response.data_pds;
document.getElementById("protocollo").value=response.protocollo;
document.getElementById("capitolo").value=response.capitolo;
document.getElementById("art").value=response.art;
document.getElementById("prog").value=response.prog;
document.getElementById("oggetto").value=response.oggetto;
document.getElementById("reparto").value=response.reparto;
};

//Update PDS Ajax

updateForm.addEventListener('submit', async (e) => {
   
    e.preventDefault();
    let formData= new FormData(updateForm);
    formData.append("update", 1);
    
    if(updateForm.checkValidity() === false){
        e.preventDefault();
        e.stopPropagation();
        updateForm.classList.add("was-validated");
        return false;
 
    }else{
        document.getElementById('edit-btn').value = 'Plese wait...';
        let data = await fetch("action.php",
             { method: "POST", 
                body: formData,
             
             });
   
     let response = await data.text();
console.log(response);
     showAlert.innerHTML = response;
     document.getElementById('edit-btn').value= "Modifica";
     updateForm.reset();
     updateForm.classList.remove('was-validated');
     updateModal.hide();
     fetchAllpds();
    }
});