 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
     <div class="container">
         <h1 class="display-3 mb-4 animated slideInDown">Login</h1>
         <nav aria-label="breadcrumb animated slideInDown">
             <ol class="breadcrumb mb-0">
                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                 <li class="breadcrumb-item"><a href="#">Pages</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Login</li>
             </ol>
         </nav>
     </div>
 </div>
 <!-- Page Header End -->


 <!-- Contact Start -->
 <div class="container-xxl py-5">
     <div class="container">
         <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Login</p>

         <form action="server.php" method="POST">
             <div class="row g-3">

                 <div class="col-12">
                     <div class="form-floating">
                         <input type="email" class="form-control" name="email" id="subject" placeholder="Email">
                         <label for="subject">Email</label>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="form-floating">
                         <input type="password" class="form-control" id="subject" name="password"
                             placeholder="Password">
                         <label for="subject">Password</label>
                     </div>
                 </div>

                 <div class="col-12">
                     <button class="btn btn-primary py-3 px-5" name="login" type="submit">Login</button>
                 </div>
             </div>
         </form>
     </div>

 </div>
 <!-- Contact End -->