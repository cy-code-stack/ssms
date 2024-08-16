<template>
    <div class="modal fade" id="add-employee-modal">
        <div class="modal-dialog modal-fade">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-6">Add Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="company-serv card w-100 mb-3 d-flex align-items-between justify-content-between p-4">
                            <p class="fw-medium">Please enter of the employee details</p>
                                <div class="form-group mb-1">
                                    <label class="form-label mb-1">Firstname <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter your firstname">
                                </div>
                                <div class="form-group mb-1">
                                    <label class="form-label mb-1">Lastname <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter your lastname">
                                </div>
                                <div class="form-group mb-1">
                                    <label class="form-label mb-1">Home Address </label>
                                    <input type="text" class="form-control" placeholder="Complete Home Address">
                                </div>
                                <div class="form-group mb-1">
                                    <label class="form-label mb-1">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="youremail@gmail.com">
                                </div>
                                <div class="d-flex align-items-between justify-content-center mb-1">
                                    <div class="form-group me-2 w-100">
                                        <label class="form-label mb-1">Position <span class="text-danger">*</span></label>
                                        <select class="form-control">
                                            <option selected disabled>Choose here</option>
                                            <option value="Sweeper">Sweeper</option>
                                            <option value="Garbage Collector">Garbage Collector</option>
                                        </select>
                                    </div>
                                    <div class="form-group w-100">
                                        <label class="form-label mb-1">Area <span class="text-danger">*</span></label>
                                        <select class="form-control">
                                            <option selected disabled>Choose here</option>
                                            <option value="Night Market">Night Market</option>
                                            <option value="Park">Park</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label mb-1">Cellphone Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" placeholder="09123456789">
                                </div>
                                <div class="active-btn">
                                    <button type="submit" class="btn btn-success text-white btn-md-1 w-100">Add Employee</button>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    @import "/resources/css/employee.css";
</style>

<script>
export default {
data() {
    return {};
},
methods: {},
mounted() {
    // console.log("Component loaded");
},
};
</script>
