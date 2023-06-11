<style>
    .dropdown {
      position: relative;
      display: inline-block;
      background-color:red
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color:red
      z-index: 1;
      
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
#type-dropdown{
    background-color:orange;
    padding:10px 15px;
    width:300px
}
#area-dropdown{
    background-color:orange;
    padding:10px 15px;
    width:300px
}
.bt{
    padding:7px 13px ;
    margin:2px 4px;
    background-color:orange;
    border-radius:8px

}
.bt:hover{
    background-color:white;
    border-radius:8px
}


/* //restuarant */
.resdropdown {
      position: relative;
      display: inline-block;
     
    }

    .resdropdown-content {
      display: none;
      position: absolute;
   
      z-index: 1;
      
    }

    .resdropdown:hover .resdropdown-content {
      display: block;
    }

    .resbt{
    padding:7px 13px ;
    margin:2px 4px;
    background-color:orchid;;
    border-radius:8px

}
.resbt:hover{
    background-color:white;
    border-radius:8px
}

#restype-dropdown{
    background-color:orchid;
    padding:10px 15px;
    width:300px
}
#resarea-dropdown{
    background-color:orchid;
    padding:10px 15px;
    width:300px
}
  </style>

<ul class="slider">
    <li style="background-image: url('images/slider/img1.jpg');">
        &nbsp;
    </li>
</ul>
<div class="page relative noborder">

    <!-- slider content -->
    <div class="slider_content_box clearfix">


    </div>
    <!-- home box -->
    <ul class="home_box_container clearfix" style="margin-top: -230px; ">
        <li class="home_box light_blue animated_element animation-fadeIn duration-500">
            <h2>
                <a href="#" title="Emergency Case">
                    Hotel & Resorts
                </a>
            </h2>
            <div class="news clearfix ">
                <button onclick="toggleDropdown('type')" class="bt" href="#" title="Type">Type</b>
                <button onclick="toggleDropdown('area')" class=" light bt " href="#" title="Type">Area</button>
                <button class=" light bt" href="#" title="Type">Facilities</button>
                <br/><br/>

                <ul class="items_list thin dark_blue opening_hours dropdown-content"   id="type-dropdown">
                    <li class="clearfix">
                        <span>
                        <a href="5star.php" style='color:white'>5 Star</a>
                        </span>
                        <div class="value">
                            <a href="https://www.marriott.com/en-us/hotels/dacbr-renaissance-dhaka-gulshan-hotel/overview/?scid=f2ae0541-1279-4f24-b197-a979c79310b0" target="_blank">Renaissance Dhaka Gulshan Hotel</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                        <a href="5star.php" style='color:white'>4 Star</a>
                        </span>
                        <div class="value">
                            <a href="https://www.uhrlbd.com/" target="_blank">Unique Hotel & Resorts</a>

                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                        <a href="3star.php" style='color:white'>3 Star</a>
                        </span>
                        <div class="value">
                            <a href="#">Maple Leaf Hotel & Resorts</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                        <a href="5star.php" style='color:white'>2 Star</a>
                        </span>
                        <div class="value">
                            <a href="5star.php">Asian SR Hotel</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                        <a href="5star.php" style='color:white'>Others</a>
                        </span>
                        <div class="value">
                            <a href="#">Western Plus Hotel</a>
                        </div>
                    </li>
                </ul>

<!-- //2 -->

                <ul class="items_list thin dark_blue opening_hours dropdown-content"   id="area-dropdown">
                    <li class="clearfix">
                        <span>
                            Dhanmondi
                        </span>
                        <div class="value">
                            <a href="https://www.marriott.com/en-us/hotels/dacbr-renaissance-dhaka-gulshan-hotel/overview/?scid=f2ae0541-1279-4f24-b197-a979c79310b0" target="_blank">Renaissance Dhaka Gulshan Hotel</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                            Uttara
                        </span>
                        <div class="value">
                            <a href="https://www.uhrlbd.com/" target="_blank">Unique Hotel & Resorts</a>

                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                            Mirpur
                        </span>
                        <div class="value">
                            <a href="#">Maple Leaf Hotel & Resorts</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                           Mohammadpur
                        </span>
                        <div class="value">
                            <a href="#">Asian SR Hotel</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                            OTHERS
                        </span>
                        <div class="value">
                            <a href="#">Western Plus Hotel</a>
                        </div>
                    </li>
                </ul>

            </div>

        </li>
        <li class="home_box blue animated_element animation-slideRight duration-800 delay-250">
            <h2>
                <a href="#" title="Doctors Timetable">
                    Restaurant
                </a>
                <br/>
            </h2>
            <div class="news clearfix">
                <!-- <a class=" light " href="#" title="Type">Type</a>
                <a class=" light " href="#" title="Type">Area</a>
                <a class=" light " href="#" title="Type">Facilities</a> -->

                <button onclick="resDropdown('restype')" class="resbt" href="#" title="Type">Type</b>
                <button onclick="resDropdown('resarea')" class=" light resbt " href="#" title="Type">Area</button>
                <button class=" light resbt" href="#" title="Type">Facilities</button>

                <br/><br/>
                <ul class="items_list thin dark_blue opening_hours  resdropdown-content"   id="restype-dropdown">
                    <li class="clearfix">
                        <span>
                            Chinese
                        </span>
                        <div class="value">
                            <a href="#">Tong Fu Restaurant</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                           Thai
                        </span>
                        <div class="value">
                            <a href="#">Thai Chai Restaurant</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                            Italian
                        </span>
                        <div class="value">
                            <a href="#">Raffinato Ristorrante italiano</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                            Bangla Restaurant
                        </span>
                        <div class="value">
                            <a href="#">Bangaliana Voj</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                            Others
                        </span>
                        <div class="value">
                            <a href="https://ocd.org.bd/cafeteria" target="_blank">Officers’  Club Dhaka</a>
                        </div>
                    </li>
                </ul>

<!-- //resarea -->
<ul class="items_list thin dark_blue opening_hours resdropdown-content"   id="resarea-dropdown">
                    <li class="clearfix">
                        <span>
                            Dhanmondi
                        </span>
                        <div class="value">
                            <a href="" target="_blank">Tong Fu Restaurant</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                            Uttara
                        </span>
                        <div class="value">
                            <a href="" target="_blank">Unique Raffinato Ristorrante</a>

                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                            Mirpur
                        </span>
                        <div class="value">
                            <a href="#">Thai Chai Restaurant</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                           Mohammadpur
                        </span>
                        <div class="value">
                            <a href="#">Raffinato Ristorrante italiano</a>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span>
                            OTHERS
                        </span>
                        <div class="value">
                            <a href="#">Bangaliana Voj</a>
                        </div>
                    </li>
                </ul>

            </div>
        </li>
        <li class="home_box dark_blue animated_element animation-slideRight200 duration-800 delay-500">
            <h2>
                Populars
            </h2>

            <ul class="items_list thin dark_blue opening_hours">
                <li class="clearfix">
					<span>
						Old Dhaka
					</span>
                    <div class="value">
                        <a href="oldDhakaPopular.php">More Info</a>
                    </div>
                </li>
                <li class="clearfix">
					<span>
						Dhanmondi
					</span>
                    <div class="value">
                        <a HREF="dhanmondiPopular.php">More Info</a>
                    </div>
                </li>
                <li class="clearfix">
					<span>
						Gulshan Banani
					</span>
                    <div class="value">
                        <a HREF="gulshanBananiPopular.php">More Info</a>
                    </div>
                </li>
            </ul>


            <h2>
                Offers
            </h2>
            <ul class="items_list thin dark_blue opening_hours">
                <li class="clearfix">
					<span>
						20% Cashback Star Kabab, Dhanmondi
					</span>
                    <div class="value">
                        <a HREF="#">More Info</a>
                    </div>
                </li>
                <li class="clearfix">
					<span>
						Buy 3-get 1 free @Sultan Dine, Gulshan
					</span>
                    <div class="value">
                        <a HREF="#">More Info</a>
                    </div>
                </li>

            </ul>
        </li>
    </ul>



    <div class="clearfix page_margin_top" style='margin-top:100px'>

        <ul class="tabs_navigation isotope_filters page_margin_top clearfix">
            <li>
                <a class="selected" href="#filter=*" title="All Departments">
                    All Area
                </a>
            </li>
            <li>
                <a href="#filter=.pediatric-clinic" title="Primary Health Care">
                    Gulshan
                </a>
            </li>
            <li>
                <a href="#filter=.uttara" title="Pediatric Clinic">
                    Uttara
                </a>
            </li>
            <li>
                <a href="#filter=.primary-health-care" title="Outpatient Surgery">
                    Dhanmondi
                </a>
            </li>
            <li>
                <a href="#filter=.others" title="Cardiac Clinic">
                    Others
                </a>
            </li>
        </ul>
        <ul class="gallery gallery_2_columns">
            <li class="pediatric-clinic gallery_box" id="gallery-item-1">
                <img src="images/samples/480x300/download.jpeg" alt="" />
                <div class="description">
                    <h3>
                        Gulshan
                    </h3>
                    <h5>
                        ---
                    </h5>
                </div>

            </li>
            <li class="primary-health-care gallery_box" id="gallery-item-2">
                <img src="images/samples/480x300/download2.jpeg" alt="" />
                <div class="description">
                    <h3>
                        Dhanmondi
                    </h3>
                    <h5>
                        ---
                    </h5>
                </div>

            </li>
      
            <li class="uttara gallery_box" id="gallery-item-3">
                <img src="images/samples/480x300/download4.jpeg" alt="" />
                <div class="description">
                    <h3>
                        Airport Road
                    </h3>
                    <h5>
                        ---
                    </h5>
                </div>

            </li>
            <li class="others gallery_box" id="gallery-item-4">
                <img src="images/samples/480x300/download3.jpeg" alt="" />
                <div class="description">
                    <h3>
                        Old Dhaka
                    </h3>
                    <h5>
                        ---
                    </h5>
                </div>

            </li>
        </ul>
    </div>

    <div class="page_layout page_margin_top clearfix">
        <div class="">
            <h3 class="box_header">
                মন্তব্য/পরামর্শ/সমস্যা/অভিযোগ দিন
            </h3>
            <form class="contact_form" id="contact_form" method="post" action="#">
                <fieldset class="left"  style="width: 100% !important;">
                    <label>First Name</label>
                    <div class="block">
                        <input  style="width: 96% !important;" class="text_input" name="first_name" type="text" value="" />
                    </div>
                    <label>Last Name</label>
                    <div class="block">
                        <input  style="width: 96% !important;" class="text_input" name="first_name" type="text" value="" />
                    </div>
                    <label>Mobile Number</label>
                    <div class="block">
                        <input  style="width: 96% !important;" class="text_input" name="first_name" type="text" value="" />
                    </div>
                    <label>Email</label>
                    <div class="block">
                        <input  style="width: 96% !important;" class="text_input" name="first_name" type="text" value="" />
                    </div>
                    <label>Message</label>
                    <div class="block">
                        <input  style="width: 96% !important;" class="text_input" name="first_name" type="text" value="" />
                    </div>
                </fieldset>

                <fieldset style="clear:both;">
                    <input type="hidden" name="action" value="contact_form" />
                    <input type="submit" name="submit" value="Send" class="more blue" />
                </fieldset>
            </form>

        </div>

    </div>
</div>



<script>
    function toggleDropdown(dropdownId) {
      var dropdown = document.getElementById(dropdownId + '-dropdown');
      dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
    }

    function resDropdown(resdropdownId) {
      var resdropdown = document.getElementById(resdropdownId + '-dropdown');
      resdropdown.style.display = (resdropdown.style.display === 'block') ? 'none' : 'block';
    }
  </script>