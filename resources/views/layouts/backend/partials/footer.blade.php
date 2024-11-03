
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
    </div>
    <strong>&copy; {{ date('Y') }} SmartLearn. Created by Pribadi Ramadhan. All rights reserved.</strong>
</footer>

<style>
    /* Style untuk konten */
    .content-wrapper {
        min-height: calc(100vh - 60px) !important; /* Tinggi viewport dikurangi tinggi footer */
    }

    /* Footer styling */
    .main-footer {
        background-color: #252422;
        color: #FFFCF2;
        padding: 0.5rem;
        text-align: center;
        border-top: 3px dashed #EB5E28;
        height: 60px;
    }

    .main-footer b {
        color: #EB5E28;
    }

    .main-footer strong {
        color: #FFFCF2;
    }
</style>