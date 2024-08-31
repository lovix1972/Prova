<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestione Finanziaria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
<!-- Add modal start -->
<div class="modal " tabindex="-1" id="aprimodale" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title">Registra Nuovo PDS</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
         </div>
    
      <div class="modal-body " >
        <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-4 gx-3">    
            <div class="col">  
            <input type="number" name="n_pds" id="n_pds" class="form-control form-control-lg" placeholder=" #PDS" required>
            <div class ="invalid-feedback">#PDS richiesto!</div>
            </div>
            <div class="col">  
            <input type="date" name="data_pds" id="data_pds" class="form-control form-control-lg" placeholder="Data PDS" required>
            <div class ="invalid-feedback">Data richiesta!</div>
            </div>

            <div class="mb-3">  
            <input type="text" name="protocollo" id="protocollo" class="form-control form-control-lg" placeholder="#Protocollo" required>
            <div class ="invalid-feedback">#Protollo Richiesto!</div>
            </div>

            <div class="mb-4">  
            <input type="number" name="capitolo" id="capitolo" class="form-control form-control-lg" placeholder="Capitolo" required>
            <div class ="invalid-feedback">#capitolo Richiesto!</div>
            </div>
            <div class="mb-4">  
            <input type="number" name="art" id="art" class="form-control form-control-lg" placeholder="Articolo" required>
            <div class ="invalid-feedback">#Articolo Richiesto!</div>
            </div>
            <div class="mb-4">  
            <input type="number" name="prog" id="prog" class="form-control form-control-lg" placeholder="Programma" required>
            <div class ="invalid-feedback">#Programma Richiesto!</div>
            </div>

            <div class="mb-3">  
            <input type="text" name="oggetto" id="oggetto" class="form-control form-control-lg" placeholder="Oggetto" required>
            <div class ="invalid-feedback">Oggetto richiesto!</div>
            </div>
            <div class="mb-3">  
            <input type="text" name="reparto" id="reparto" class="form-control form-control-lg" placeholder="Reparto" required>
            <div class ="invalid-feedback">Reparto richiesto!</div>
            </div>
      <div class="mb-3">
        <input type="submit" value="Registra" class="btn btn-primary btn-block btn-lg" id="add">
        <button type="button" class="btn btn-secondary btn-block btn-lg" data-dismiss="modal">Close</button>

          </div>
        </form>
            </div>    

            
        </div>
    </div> 
  </div>
</div>

<!-- Add modal End -->

<!-- Edit modal start -->
<div class="modal " tabindex="-1" id="editmodale" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title">Modifica PDS</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
         </div>
    
      <div class="modal-body " >
        <form id="edit-user-form" class="p-2" novalidate>
          <input type="hidden" name="id" id="id">
            <div class="row mb-4 gx-3">    
            <div class="col">  
            <input type="number" name="n_pds" class="form-control form-control-lg" placeholder=" #PDS" required>
            <div class ="invalid-feedback">#PDS richiesto!</div>
            </div>
            <div class="col">  
            <input type="date" name="data_pds" class="form-control form-control-lg" placeholder="Data PDS" required>
            <div class ="invalid-feedback">Data richiesta!</div>
            </div>

            <div class="mb-3">  
            <input type="text" name="protocollo"  class="form-control form-control-lg" placeholder="#Protocollo" required>
            <div class ="invalid-feedback">#Protollo Richiesto!</div>
            </div>

            <div class="mb-4">  
            <input type="number" name="capitolo" class="form-control form-control-lg" placeholder="Capitolo" required>
            <div class ="invalid-feedback">#capitolo Richiesto!</div>
            </div>
            <div class="mb-4">  
            <input type="number" name="art" class="form-control form-control-lg" placeholder="Articolo" required>
            <div class ="invalid-feedback">#Articolo Richiesto!</div>
            </div>
            <div class="mb-4">  
            <input type="number" name="prog"  class="form-control form-control-lg" placeholder="Programma" required>
            <div class ="invalid-feedback">#Programma Richiesto!</div>
            </div>

            <div class="mb-3">  
            <input type="text" name="oggetto" class="form-control form-control-lg" placeholder="Oggetto" required>
            <div class ="invalid-feedback">Oggetto richiesto!</div>
            </div>
            <div class="mb-3">  
            <input type="text" name="reparto"  class="form-control form-control-lg" placeholder="Reparto" required>
            <div class ="invalid-feedback">Reparto richiesto!</div>
            </div>
      <div class="mb-3">
        <input type="submit" value="Edit" class="btn btn-primary btn-success btn-lg" id="edit">
       

          </div>
        </form>
            </div>    

            
        </div>
    </div> 
  </div>
</div>

<!-- Edit modal End -->

    <div class="container">
        <div class ="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                    <div>
                       <h4 class ="text-primary" >Inserimento Dati</h4>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#aprimodale">Nuovo Inserimento</button>
                    </div>
                   </div>           
                </div>    
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="showAlert" id="showAlert">

                    </div>
                    </div>
                </div> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">  
                        <table class="table table-striped table-bordered text-center">
                               
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>n PDS</th>
                                <th>n° Protocollo</th>
                                   <th>Data</th><th>Capitolo</th>
                                <th>Articolo</th>
                                <th>Programma</th>
                             
                                <th>Oggetto</th>
                                <th>Reparto</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            
                            </tbody>
                        </table>
                    </div>
               </div>
            </div>              
        </div>
 <script src="main.js" ></script>        
</body>

</html>