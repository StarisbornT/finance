<!-- Sidebar  -->
<?php include 'sidebar.php' ?>
<!-- end sidebar -->
<!-- right content -->
<div id="content">
    <!-- topbar -->
    <?php include 'topbar.php' ?>
    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>
            <div>
                <h1>Welcome <?php echo $name ?></h1>
                <h4>Email <?php echo $email; ?></h4>
            </div>
        </div>

        <?php include 'footer.php'; ?>