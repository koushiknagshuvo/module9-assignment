   <!-- Navbar section end -->
   <section class="Main_section_hero">
       <nav class="navbar navbar-expand-lg navbar-light">
           <div class="container navigation my-3">
               <a class="navbar-brand" href="#"><img src="./images/icon/logo.svg" alt="" srcset="" /></a>

               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                   data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                   aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav  mb-2 mb-lg-0 mx-auto">
                       <li class="nav-item px-2">
                           <a class="nav-link active" aria-current="page" href="/">About Me</a>
                       </li>

                       <li class="nav-item px-2">
                           <a class="nav-link" href="{{ route('service') }}">Services</a>
                       </li>

                       <li class="nav-item px-2">
                           <a class="nav-link" href="#Skills_section"> Skils</a>
                       </li>

                       <li class="nav-item dropdown px-2">
                           <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                               role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Experience and Qualification<i class="bx bx-chevron-down"></i>
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li>
                                   <a class="dropdown-item" href="#Educational_work_Section"> work experience</a>
                               </li>
                               <li>
                                   <a class="dropdown-item" href="#Educational_work_Section">Educational
                                       Qualification</a>
                               </li>
                           </ul>
                       </li>

                       <li class="nav-item px-2">
                           <a class="nav-link" href="{{ route('project') }}">Portfolio</a>
                       </li>
                   </ul>
                   <form class="d-flex contact_button">
                       <button class="btn_Sign-UP" type="submit"><a href="{{ route('contact') }}">Contact Me</a>
                       </button>
                   </form>
               </div>
           </div>
       </nav>

       <!-- Navbar section end -->

   </section>
   <!-- Main_section_hero End -->
