 <!-- Contact Start -->
 <div class="container-xxl py-5 mt-5">
     <div class="container">
         <h1 class="text-center fw-semi-bold py-1 px-3" style="margin-top:10%">Login</h1>

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