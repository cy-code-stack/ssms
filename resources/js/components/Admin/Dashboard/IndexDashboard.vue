<template>
    <div class="container-fluid p-1">
        <div class="d-flex justify-content-start align-items-center w-100 m-0">
            <p class="fs-2 fw-semibold text-success mb-0 ms-3">Dashboard</p>
        </div>

        <div class="dashboard-wrapper d-flex justify-content-center align-items-start p-3 m-0">
            <div class="dash-cards d-block col col-lg-6 me-2">
                <div class="summary-card container-fluid mb-2 m-auto d-flex align-items-center justify-content-between">
                    <div class="card text-bg-success" style="min-width: 14rem; min-height: 10rem;">
                        <div class="card-header fs-6">Total of Sweepers</div>
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h1 class="text-white fw-semibold mb-0 text-center">100</h1>
                        </div>
                    </div>
                    <div class="card text-bg-primary" style="min-width: 14rem; min-height: 10rem;">
                        <div class="card-header fs-6">Today's Personel Attendance</div>
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h1 class="text-white fw-semibold mb-0 text-center">100</h1>
                        </div>
                    </div>
                    <div class="card text-bg-warning" style="min-width: 14rem; min-height: 10rem;">
                        <div class="card-header fs-6 text-white">Total of Areas</div>
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h1 class="text-white fw-semibold mb-0 text-center">100</h1>
                        </div>
                    </div>
                </div>
                <div class="map-wrapper card"></div>
            </div>
            <div class="table-wrapper container-fluid col-lg-6 mt-2">
                <div class="d-flex justify-content-between align-items-center w-100 mb-3">
                    <p class="fs-4 fw-semibold text-success mb-0">Attendance</p>
                    <p class="fs-5 fw-semibold mb-0">10:30:21 PM</p>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Time-in</th>
                                <th scope="col">Time-out</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody class="mb-0">
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td class="col col-md-4">Mark Lastname</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="page navigation">
                        <ul class="pagination justify-content-end pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link text-black">Previous</a>
                            </li>
                                <li class="page-item"><a class="page-link text-black" href="#">1</a></li>
                                <li class="page-item"><a class="page-link text-black" href="#">2</a></li>
                                <li class="page-item"><a class="page-link text-black" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link text-black" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>
