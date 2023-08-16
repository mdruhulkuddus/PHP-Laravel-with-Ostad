<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h6>Income </h6>
                    </div>
                    <div class="align-items-center col">
                        <button data-bs-toggle="modal" data-bs-target="#create-modal"
                                class="float-end btn m-0 btn-sm bg-gradient-primary"> Add Event
                        </button>
                    </div>
                </div>
                <hr class="bg-secondary"/>
                <div class="table-responsive">
                    <table class="table  table-flush" id="tableData">
                        <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                        </tr>
                        </thead>
                        <tbody id="tableList">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // getList();
    //
    // async function getList() {
    //     showLoader();
    //     let res = await axios.get('/list-income');
    //     hideLoader();
    //
    //     let tableData = $('#tableData');
    //     let tableList = $('#tableList');
    //
    //     tableData.DataTable().destroy();
    //     tableList.empty();
    //
    //     res.data.forEach(function (item, index) {
    //         let row = `<tr>
    //                          <td>${index + 1}</td>
    //                          <td>${item['income_category']}</td>
    //                          <td>${item['date']}</td>
    //                          <td>${item['amount']}</td>
    //                          <td>${item['description']}</td>
    //                          <td>
    //                             <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-primary"> Edit </button>
    //                             <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-success "> Delete </button>
    //                         </td>
    //                     </tr>`
    //
    //         tableList.append(row)
    //     })
    //
    //     // tableData.DataTable({
    //     //     order:[0, 'desc'],
    //     //     lengthMenu:[2,10,20]
    //     // });
    //      new DataTable('#tableData', {
    //         order: [0, 'desc'],
    //         lengthMenu: [4, 10, 20]
    //     });
    //
    //     $(".editBtn").on('click', function (){
    //         let id = $(this).data('id');
    //         alert(id)
    //     });
    //
    //     $(".deleteBtn").on('click', function (){
    //         let id = $(this).data('id');
    //         $('#delete-modal').modal('show');
    //         $('#deleteID').val(id);
    //     });
    //
    //
    // }



</script>
