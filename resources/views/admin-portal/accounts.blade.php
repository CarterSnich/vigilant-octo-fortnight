@include('layouts.admin-nav')
@yield('admin-nav')

<div class="main_container">

    <!--CONTENT CONTAINER-->
    <div class="container-wrapper">
        <div class="container">
            <div class="header">
                <div class="portal-title">
                    <h2 class="portal-name">Accounts</h2>
                </div>

                <div class="btn-accounts">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2 btn-staff" type="button">Staff</button>
                        <button class="btn btn-primary btn-student" type="button">Student</button>
                    </div>
                </div>
            </div>
            <!-- CONTENT AFTER TITLE -->
            <div class="top-content">
                <div class="filter">
                    <p> Filter by: </p>
                    <div class="dropdown">
                        <!-- College Dropdown -->
                        <button class="btn btn-secondary dropdown-toggle filter-btn" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            College
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Arts and Sciences</a></li>
                            <li><a class="dropdown-item" href="#">Management and Entrepreneurship</a></li>
                            <li><a class="dropdown-item" href="#">Education</a></li>
                        </ul>

                        <!-- Year Level Drop Down -->
                        <button class="btn btn-secondary dropdown-toggle filter-btn" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Year Level
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1</a></li>
                            <li><a class="dropdown-item" href="#">2</a></li>
                            <li><a class="dropdown-item" href="#">3</a></li>
                            <li><a class="dropdown-item" href="#">4</a></li>
                        </ul>

                        <!-- Organization Dropdown -->
                        <button class="btn btn-secondary dropdown-toggle filter-btn" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Org
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">DIGITS</a></li>
                            <li><a class="dropdown-item" href="#">APSS</a></li>
                            <li><a class="dropdown-item" href="#">English-Circle</a></li>
                        </ul>
                    </div>

                    <!-- Search Bar -->
                    <div class="search">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>


            </div>

            <!-- TABLE CONTENT -->
            <div class="table-content">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Organization</th>
                            <th scope="col">Year-Level</th>
                            <th scope="col">Section</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">123</th>
                            <td>Mark Twain</td>
                            <td>DIGITS</td>
                            <td>3</td>
                            <td>AI34</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary me-md-2" type="button">Edit</button>
                                    <button class="btn btn-primary" type="button">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">456</th>
                            <td>Keanu Reeves</td>
                            <td>DIGITS</td>
                            <td>4</td>
                            <td>AI41</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary me-md-2" type="button">Edit</button>
                                    <button class="btn btn-primary" type="button">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">789</th>
                            <td>Jill Valentine</td>
                            <td>DIGITS</td>
                            <td>2</td>
                            <td>AI22</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary me-md-2" type="button">Edit</button>
                                    <button class="btn btn-primary" type="button">Delete</button>
                                </div>
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- STUDENTS TAB -->
    <!-- <div class="student-tab-section" id="form-section d-none"> -->
</div>
</div>

<!-- <script>
    // student button
    document.getElementById('btn-student').addEventListener('click', function() {
        document.getElementById('student-tab-section').classList.remove('d-none')
        document.getElementById('staff-tab-section').classList.add('d-none')
    })

    // staff button
    document.getElementById('btn-staff').addEventListener('click', function() {
        document.getElementById('staff-tab-section').classList.add('d-none')
        document.getElementById('student-tab-section').classList.remove('d-none')
    })
</script> -->

</body>

</html>
