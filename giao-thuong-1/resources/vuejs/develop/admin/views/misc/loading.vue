<template>
    <div>
        <modal class="page-loading-modal" name="page-loading" transition="pop-out" :width="60" height="auto" :scrollable="false">
            <div id="page-loading">
                <div class="loader no-select">
                    <Plane></Plane>
                </div>
            </div>
        </modal>
    </div>
</template>

<script>
    import {Plane} from 'vue-loading-spinner';

    export default {
        name: "Loading",
        components: {
            Plane
        }
    }
</script>

<style>
    .v--modal-overlay.page-loading-modal{
        background: rgba(254, 254, 254, 0.2)!important;
    }
</style>