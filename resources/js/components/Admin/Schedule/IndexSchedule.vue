<template>
    <div class="container-fluid p-3">
        <div class="d-flex flex-row justify-content-center align-items-center">
            <div class="card-wrapper col col-lg-4 container-fluid me-2">
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
                <div class="card mb-3" role="button">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold text-center mb-0">Night Market</h4>
                    </div>
                </div>
            </div>
            <div class="schedule-wrapper col col-lg-8 card p-2">
                <div class="d-flex flex-column justify-content-center align-items-center w-100 p-4">
                    <div class="map-card card align-center"></div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data(){
            return{
              
            }
        },
        methods:{},
    }
</script>

<style scoped>
    .map-card{
        min-height: 30vh !important;
        background-image: url('/assets/images/hero_maps_static_api.png');
        background-repeat: no-repeat;
        background-size: cover;
        border: none !important;
        width: 50vw;
        box-shadow: 0px 0px 3px 3px rgba(175,175,175,0.54);
        -webkit-box-shadow: 0px 0px 3px 3px rgba(175,175,175,0.54);
        -moz-box-shadow: 0px 0px 3px 3px rgba(175,175,175,0.54);
    }
    .schedule-wrapper {
        min-height: 85vh !important;
        border: none !important;
        box-shadow: 0px 0px 3px 3px rgba(175,175,175,0.54);
        -webkit-box-shadow: 0px 0px 3px 3px rgba(175,175,175,0.54);
        -moz-box-shadow: 0px 0px 3px 3px rgba(175,175,175,0.54);
    }
    .card-wrapper {
        max-height: 85vh; 
        overflow-y: auto; 
    }
    .card-wrapper .card {
        min-width: 15rem !important;
        max-height: 25rem !important;
        transition: background-color 0.3s ease;
    }
</style>

