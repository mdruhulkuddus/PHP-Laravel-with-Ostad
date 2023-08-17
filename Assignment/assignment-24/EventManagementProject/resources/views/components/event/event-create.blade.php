<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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
                                <select class="form-select" id="categoryId" aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
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
                <button id="modal-close" class="btn btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">
                    Close
                </button>
                <button onclick="Save()" id="save-btn" class="btn btn-sm  btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    async function Save() {
        let categoryID = document.getElementById('categoryId').value;
        let title = document.getElementById('title').value;
        let description = document.getElementById('description').value;
        let date = document.getElementById('date').value;
        let time = document.getElementById('time').value;
        let location = document.getElementById('location').value;

        if (categoryID === "Select Category") {
            errorToast("Category is required!")
        }
        else if (title.length === 0) {
            errorToast("Title is required!")
        }
        else if (description.length === 0) {
            errorToast("Description is required!")
        }
        else if (location.length === 0) {
            errorToast("Location is required!")
        }
        else {
            document.getElementById('modal-close').click();
            showLoader();
            let res = await axios.post("/create-event", {
                categoryID: categoryID,
                title: title,
                description: description,
                date: date,
                time: time,
                location: location,

            });
            hideLoader();
            if (res.status === 201) {
                successToast("Request Completed");
                document.getElementById('save-form').reset();
                // list refresh
               await getList();
            } else {
                errorToast("Request Fail !")
            }
        }
    }
</script>
