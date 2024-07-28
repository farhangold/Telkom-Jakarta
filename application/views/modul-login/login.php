<div class="container d-flex vh-100"  style="background-image: url('assets/images/tlt.png');">
        <div class="row align-self-center w-100">
            <div class="col-md-6 offset-md-3">
                <div class="card login-card">
                    <div class="card-body text-center">
                        <img src="assets/images/logo.png" alt="Logo" style="height: 100px;">
                        <form class="user mt-4">
                            <div class="form-group">
                                <label for="userType"></label>
                                <select class="form-control" id="userType">
                                    <option value="Admin">Admin</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="User">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a id="loginButton" class="btn btn-danger btn-user btn-block">
                                    Login
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginButton').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah default action dari link
            // Logika validasi login bisa ditambahkan di sini
            window.location.href = 'Dashboard/DasboardPage'; // Redirect ke halaman Dashboard.php
        });
    </script>