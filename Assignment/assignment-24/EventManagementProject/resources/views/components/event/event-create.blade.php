<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Add Event</h6>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Event Category</label>
                                <select class="form-select" id="category" aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    <option value="salary">Seminar</option>
                                    <option value="salary">Concert</option>
                                    <option value="salary">Conference</option>
                                    <option value="salary">Promotion</option>
                                    <option value="business">Wedding</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-12 p-1">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="col-12 p-1">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" id="description">
                            </div>
                            <div class="col-12 p-1">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="col-12 p-1">
                                <label class="form-label">Time</label>
                                <input type="time" class="form-control" id="time">
                            </div>

                            <div class="col-12 p-1">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control" id="location">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="Save()" id="save-btn" class="btn btn-sm  btn-success" >Save</button>
            </div>
        </div>
    </div>
</div>

<script>
   // async function Save(){
   //      let incomeCategory = document.getElementById('incomeCategory').value;
   //      let entryDate = document.getElementById('entryDate').value;
   //      let amount = document.getElementById('amount').value;
   //      let description = document.getElementById('description').value;
   //      if(incomeCategory === "Select Category" ){
   //          errorToast("Category is required!")
   //      }else if(amount.length === 0){
   //          errorToast("Amount is required!")
   //      }
   //      else{
   //          document.getElementById('modal-close').click();
   //          showLoader();
   //          let res = await axios.post("/create-income", {
   //              incomeCategory:incomeCategory,
   //              entryDate:entryDate,
   //              amount:amount,
   //              description:description,
   //
   //          });
   //          hideLoader();
   //          if (res.status === 201){
   //              successToast("Request Completed");
   //              document.getElementById('save-form').reset();
   //              // list refresh
   //             await getList();
   //          }
   //          else{
   //              errorToast("Request Fail !")
   //          }
   //      }
   //  }
</script>
