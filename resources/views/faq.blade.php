@extends ('layouts.master')

@section('content')

<header style="text-align: center; padding-top: 2%; background-color: #141432; padding-bottom: 10px;">
    <h5 style="font-size: 23px; color: white" data-aos="zoom-in" data-aos-duration="2000">FAQ</h5>
    <h1 style=" color: #cbcbd2; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" data-aos="zoom-in" data-aos-duration="2000">Have any question?</h1>
  </header>
  <section class="sctn">
    <div class="cnter" data-aos="zoom-out" data-aos-duration="2000">
      <div class="accordion">
        <div class="accordion-item" id="General">
          <a class="accordion-link" href="#General">
            General
            <i class="icon ion-md-add"></i>
            <i class="icon ion-md-remove"></i>
          </a>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ea molestiae sapiente illum non maiores corrupti qui perferendis consequuntur ratione dolorum mollitia ipsa et blanditiis error ullam impedit, obcaecati repellendus.
            </p>
          </div>
        </div>
        <div class="accordion-item" id="Maintenance">
          <a class="accordion-link" href="#Maintenance">
            Maintenance
            <i class="icon ion-md-add"></i>
            <i class="icon ion-md-remove"></i>
          </a>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ea molestiae sapiente illum non maiores corrupti qui perferendis consequuntur ratione dolorum mollitia ipsa et blanditiis error ullam impedit, obcaecati repellendus.
            </p>
          </div>
        </div>
        <div class="accordion-item" id="Deployments">
          <a class="accordion-link" href="#Deployments">
            Deployments
            <i class="icon ion-md-add"></i>
            <i class="icon ion-md-remove"></i>
          </a>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ea molestiae sapiente illum non maiores corrupti qui perferendis consequuntur ratione dolorum mollitia ipsa et blanditiis error ullam impedit, obcaecati repellendus.
            </p>
          </div>
        </div>
        <div class="accordion-item" id="Payments">
          <a class="accordion-link" href="#Payments">
            Payments
            <i class="icon ion-md-add"></i>
            <i class="icon ion-md-remove"></i>
          </a>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ea molestiae sapiente illum non maiores corrupti qui perferendis consequuntur ratione dolorum mollitia ipsa et blanditiis error ullam impedit, obcaecati repellendus.
            </p>
          </div>
        </div>
        <div class="accordion-item" id="Training">
          <a class="accordion-link" href="#Training">
            Training
            <i class="ion ion-md-add"></i>
            <i class="ion ion-md-remove"></i>
          </a>
          <div class="answer">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ea molestiae sapiente illum non maiores corrupti qui perferendis consequuntur ratione dolorum mollitia ipsa et blanditiis error ullam impedit, obcaecati repellendus.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection