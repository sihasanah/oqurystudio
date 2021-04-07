<section style="height:100%; width: 100%; box-sizing: border-box; background-color: #141432">
    <div class="header-2-3" style="font-family: 'Poppins', sans-serif;">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a href="index.html">
        <img style="margin-right:0.75rem" src="img/logo.svg" alt="Logo Oqury Studio">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-header-2-3">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="modal-header-2-3 modal fade" id="targetModal-header-2-3" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel-header-2-3" aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-content-header-2-3" style="background-color: #141432;">
            <div class="modal-header" style="padding:	2rem; padding-bottom: 0;">
              <a href="index.html" class="modal-title" id="targetModalLabel-header-2-3">
                <img style="margin-top:0.5rem" src="img/logo.svg" alt="Logo Oqury Studio">
              </a>
              <button type="button" class="close-header-2-3 btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
            </div>
            <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
              <ul class="navbar-nav responsive-header-2-3 me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1)=="" ? 'active text-white' : 'null'}}" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1)=="portfolio-kita" ? 'active text-white' : 'null'}}" href="/portfolio-kita">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1)=="pricing" ? 'active text-white' : 'null'}}" href="/pricing">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1)=="about-us" ? 'active text-white' : 'null'}}" href="/about-us">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1)=="faq" ? 'active text-white' : 'null'}}" href="/faq">FAQ</a>
                </li>
              </ul>
            </div>
            <div class="modal-footer" style="padding:	2rem; padding-top: 0.75rem">
              
              <a href="/contact"> <button class="btn btn-fill-header-2-3">Contact Us</button></a>
            </div>
          </div>
        </div>
      </div>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo-header-2-3">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link {{Request::segment(1)=="" ? 'active text-white' : 'null'}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::segment(1)=="portfolio-kita" ? 'active text-white' : 'null'}}" href="/portfolio-kita">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::segment(1)=="pricing" ? 'active text-white' : 'null'}}" href="/pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::segment(1)=="about-us" ? 'active text-white' : 'null'}}" href="/about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::segment(1)=="faq" ? 'active text-white' : 'null'}}" href="/faq">FAQ</a>
          </li>
        </ul>
        <a href="/contact"><button class="btn btn-fill-header-2-3">Contact Us</button></a>
      </div>
    </nav> 

    

    </div>   

</section>
