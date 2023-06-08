<div class="owl-carousel">
  <div class="hero-img item" id="hero-img"></div>
</div>

<div class="hero-section_plan">
  <div class="hero-section_plan-tracking col-5">
    <h4>TRACING / TRACKING</h4>
    <form action="../getdata/tracing-tracking_form.php" method="POST">
      <div class="service">
        <h5>Choose service type:</h5>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="seaService" id="seaService" name="serviceType">
          <label class="form-check-label" for="seaService">
            Sea Services (Enter HBL No)
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="airService" id="airService" name="serviceType" checked>
          <label class="form-check-label" for="airService">
            Air Services (Enter HAWB No)
          </label>
        </div>
      </div>

      <div class="branch">
        <h5>Choose branch office:</h5>

        <div class="branch-container">
          <div class="form-check ">
            <input class="form-check-input" type="radio" value="trackCargo" id="trackCargo" name="branchOffice">
            <label class="form-check-label" for="trackCargo">
              Tracking your cargo for VN bill issue
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="typeNo" id="typeNo" name="branchOffice" checked>
            <label class="form-check-label" for="typeNo">
              Type HBL/HAWB No ...
            </label>
          </div>
        </div>
      </div>

      <button type="submit">TRACKING</button>
    </form>
  </div>
  <div class="hero-section_plan-video col-7" id="video">
  </div>
</div>