<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.5s" data-wow-delay="0s">
    <div class="container-fluid">
        <div class="row">
            <nav class="main-nav">
                <div class="col-12 d-flex" style="height: 75px; !important;">
                    <!-- ***** Logo Start ***** -->
                    <div class="col-sm-2 d-flex">
                        <i class="fa-solid fa-map-location-dot fa-4x"></i>
                        <p class="h2">Aluga-SC</p>
                    </div>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <ul class="nav">
                            <form id="search-form" name="gs" method="submit" role="search" action="#">
                                <div class="col-lg-3 align-self-center">
                                    <fieldset>
                                        <select name="area" class="form-select" aria-label="Area" id="chooseCategory"
                                            onchange="this.form.click()">
                                            <option selected></option>
                                            <option value=""></option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-3 align-self-center">
                                    <fieldset>
                                        <input type="address" name="address" class="searchText"
                                            placeholder="Enter a location" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-3 align-self-center">
                                    <fieldset>
                                        <select name="price" class="form-select" aria-label="Default select example"
                                            id="chooseCategory" onchange="this.form.click()">
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
                                        <button class="main-button"><i class="fa fa-search"></i> Search
                                            Now</button>
                                    </fieldset>
                                </div>
                            </form>
                        </ul>
                    </div>
                </div>
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
    </div>
</header>
