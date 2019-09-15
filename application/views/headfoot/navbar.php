<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <nav class="navbar navbar-light bg-light">
                <?php if($this->session->userdata('uId')):?>
                    <a class="navbar-brand" href="<?php echo site_url('login/logOut');?>">logOut</a>
                <?php else: ?>
                    <a class="navbar-brand" href="">Login</a>
                    <a class="navbar-brand" href="<?php echo site_url('register');?>">Signup</a>
                <?php endif; ?>
            </nav>
        </div>
    </nav>
</div>