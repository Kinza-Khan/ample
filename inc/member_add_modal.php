 <!-- The Modal for add new form -->
 <div class="modal fade bd-example-modal-xl myModal" id="myModal">
   <div class="modal-dialog modal-xl">
     <div class="modal-content">

       <!-- Modal Header -->
       <div class="modal-header bg-primary">
         <h4 class="modal-title">Add New customer</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>

       <!-- Modal body -->
       <div class="modal-body">
         <div class="alert alert-primary alert-dismissible fade show memberFormError" role="alert">
           <span id="memberFormError"></span>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <form id="adMemberForm">
           <div class="row">
           <div class="col-md-2 col-md-2">
               <div class="form-group">
                 <label for="party_id">Party ID:</label>
                 <?php
                 $last_id_query = "SELECT MAX(id) AS last_id FROM member";
                 $last_id_result = $pdo->query($last_id_query);
                 $last_id = $last_id_result->fetchColumn();
                 
                 if ($last_id !== false) {
                     echo '<input type="text" class="form-control add-member" id="party_id" placeholder="Party Id" value="'.($last_id+1).'" disabled>' ;
                 } else {
                     echo "Failed to retrieve the last member ID.";
                 }
                 ?>
               </div>
             </div>
             <div class="col-md-10 col-md-10">
               <div class="form-group">
                 <label for="name">Name *:</label>
                 <input type="text" class="form-control add-member" id="name" placeholder="Customer name" name="name">
               </div>
             </div>
            
             <div class="col-md-6 col-md-6">
               <div class="form-group">
                 <label for="contact">Contact number :</label>
                 <input type="text" class="form-control add-member" id="contact" placeholder="Contact member" name="contact">
               </div>
             </div>
             <div class="col-md-6 col-md-6">
               <div class="form-group">
                 <label for="email">Email:</label>
                 <input type="email" class="form-control add-member" id="email" placeholder="Email optional" name="email">
               </div>
             </div>
             <div class="col-md-6 col-lg-6">
               <div class="form-group">
                 <label for="cus_open_blacnce">Postal Code :</label>
                 <input type="number" class="form-control" name="cus_open_blacnce" id="cus_open_blacnce" placeholder="Postal Code">
               </div>
             </div>
             <!-- <div class="col-md-6 col-md-6">
               <div class="form-group">
                 <label for="reg_date">Registration Date :</label>
                 <input type="date" class="form-control add-member" id="reg_date" name="reg_date">
               </div>
             </div> -->
             <div class="col-md-6 col-md-6">
               <div class="form-group">
                 <label for="company">City :</label>
                 <input type="text" class="form-control add-member" id="company" placeholder="City" name="company">
               </div>
             </div>
             <div class="col-md-12 col-lg-12">
               <div class="form-group">
                 <label for="address">Address:</label>
                 <textarea rows="3" class="form-control" placeholder="Member complect Address" id="address" name="address"></textarea>
               </div>
             </div>
           </div>
           <button type="submit" class="btn btn-primary btn-block rounded-0">Add customer</button>
         </form>
         <!-- </div> -->
       </div>
       <!-- Modal footer -->
       <!--  <div class="modal-footer">
                        <button type="button" class="btn btn-danger rounded-0 btn-sm" data-dismiss="modal">Close</button>
                      </div> -->
     </div>
   </div>
 </div>