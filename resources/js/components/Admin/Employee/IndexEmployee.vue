<template>
    <div class="container-fluid p-3">
        <div class="employee-search bg-light container-fluid card p-3 w-100 mb-3">
            <p class="fs-6 text-black-50 fw-medium mb-3"><small>What are you looking for?</small></p>
            <div class="form-wrapper p-0 w-100 mb-2 d-flex justify-content-around align-items-center">
                <div class="form-group position-relative">
                    <label class="text-black-50 fw-medium fs-6 mb-1">Search</label>
                    <div class="input-group">
                        <input type="text" class="form-control rounded-1 p-2" placeholder="Start with firstname">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
                <div class="form-group position-relative">
                    <label class="text-black-50 fw-medium fs-6 mb-1">Position</label>
                    <div class="input-group">
                        <select class="form-control p-2">
                            <option selected disabled>Choose here</option>
                            <option value="Sweepers">Sweepers</option>
                            <option value="Garbage Collector">Garbage Collector</option>
                        </select>
                    </div>
                </div>
                <div class="form-group position-relative">
                    <label class="text-black-50 fw-medium fs-6 mb-1">Area</label>
                    <div class="input-group">
                        <select class="form-control p-2">
                            <option selected disabled>Choose here</option>
                            <option value="Night Market">Night Market</option>
                            <option value="Part">Park</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="employee-info bg-light container-fluid card p-3 w-100 min-vh-100">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <p class="fs-5 mb-1 fw-semibold">Alphabetical Order</p>
                <button class="btn btn-success btn-sm d-flex align-items-center" @click="addEmployeeModal">Add Employee</button>
            </div>
            <div class="alphabet-wrapper d-flex justify-content-between align-items-center w-100 mb-2" role="button">
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium active">A</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">B</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">C</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">D</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">E</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">F</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">G</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">H</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">I</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">J</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">K</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">L</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">M</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">N</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">O</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">P</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">Q</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">R</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">S</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">T</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">U</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">V</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">W</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">X</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">Y</div>
                <div class="card border border-0 rounded-1 alphabet-filter fs-5 fw-medium">Z</div>
            </div>
            <div class="d-flex justify-content-between align-items-center w-100 p-2 mb-2">
                <div class="card-wrapper">
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../../../../../public/assets/images/avatar.png" class="card-img-top image-fluid mt-4" alt="img-card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-0">Juan dela Cruz</h4>
                            <p class="text-center mb-2"><small class="text-black-50 fw-medium">example@gmail.com</small></p>
                            <div class="d-flex flex-column justify-content-start mb-3">
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-broom me-3"></i><small>Sweepers</small></p>
                                <p class="fs-5 fw-medium mb-0 text-black-50"><i class="fa-solid fa-map-location me-3"></i><small>Night Market</small></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="#" role="button" class="btn btn-outline-success" @click="editEmployeeModal">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <add-employee-modal></add-employee-modal>
    <edit-employee-modal></edit-employee-modal>
</template>

<script>
import AddEmployeeModal from './AddEmployeeModal.vue';
import EditEmployeeModal from './EditEmployeeModal.vue';
    export default {
        components:{
            AddEmployeeModal,
            EditEmployeeModal
        },
        methods:{
            addEmployeeModal(){
                $("#add-employee-modal").modal("show");
            },
            editEmployeeModal(){
                $("#edit-employee-modal").modal("show");
            },
        },
    }
</script>



<style scoped>
    .input-group {
        width: 100%;
    }
    .alphabet-wrapper{
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }
    .alphabet-wrapper .alphabet-filter{
        flex: 1 1;
        min-height: auto;
    }
    .input-group .form-control {
        border-radius: 0.25rem;
        min-width: 20rem !important;
    }

    .input-group-text {
        background-color: transparent;
        border: 1px solid #ced4da;
        border-left: none;
        border-radius: 0 0.25rem 0.25rem 0;
        padding: 0.375rem 0.75rem;
    }

    .input-group-text .fa-search {
        color: #6c757d;
    }
    .card-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .card-wrapper .card {
        flex: 1 1 200px;
        min-width: 15rem !important;
        min-height: auto;
    }
    .card-img-top {
        width: 150px; 
        height: 150px; 
        object-fit: cover; 
        border-radius: 50%; 
        margin: 0 auto; 
        display: block; 
    }
    .divider {
        font-size: 24px; 
    }
</style>
