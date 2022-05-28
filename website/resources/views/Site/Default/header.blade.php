
<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
<div class="preloader-inner">
  <span class="dot"></span>
  <div class="dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <nav class="main-nav">
        <!-- ***** Logo Start ***** -->
        
        <i class="fa-solid fa-map-location-dot fa-4x"></i>
        <p>Aluga-SC</p>
        <!-- ***** Logo End ***** -->
        <!-- ***** Menu Start ***** -->
        <ul class="nav">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                          <option selected></option>
                          <option value="New Village"></option>
                          <option value="Old Town"></option>
                          <option value="Modern City"></option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <input type="address" name="address" class="searchText" placeholder="Enter a location" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                          <option selected>Price Range</option>
                          <option value="$100 - $250">$100 - $250</option>
                          <option value="$250 - $500">$250 - $500</option>
                          <option value="$500 - $1000">$500 - $1,000</option>
                          <option value="$1000+">$1,000 or more</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3">                        
                  <fieldset>
                      <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </ul>        
        <a class='menu-trigger'>
            <span>Menu</span>
        </a>
        <!-- ***** Menu End ***** -->
      </nav>
    </div>
  </div>
</div>
</header>