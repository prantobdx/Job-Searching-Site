<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Application">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Widgets">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="bi bi-briefcase-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Jobs">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-jobs" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
        </ul>
    </div>

    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('adminAsset')}}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('dashboard')}}" class="list-group-item"><i class="bi bi-cart-plus"></i>Dashboard</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-application">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Slider Panel</h5>
                        </div>
                        <small class="mb-0">Manage Slider</small>
                    </div>
                    <a href="{{route('add-slider')}}" class="list-group-item"><i class="bi bi-envelope"></i>Add Slider</a>
                    <a href="app-chat-box.html" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Slider</a>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-widgets">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">JobCategory Panel</h5>
                        </div>
                        <small class="mb-0">jobs categories</small>
                    </div>
                    <a href="widgets-static-widgets.html" class="list-group-item"><i class="bi bi-box"></i>Create Category</a>
                    <a href="widgets-data-widgets.html" class="list-group-item"><i class="bi bi-bar-chart"></i>Manage Category</a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-jobs">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Job Panel</h5>
                        </div>
                        <small class="mb-0">Job Details Post</small>
                    </div>
                    <a href="app-emailbox.html" class="list-group-item"><i class="bi bi-envelope"></i>Create Job</a>
                    <a href="app-chat-box.html" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Job</a>
                </div>
            </div>
        </div>
    </div>
</aside>
