<!--Head-->
<?php include_once('/../templates/head.php'); ?>
<!--End of Head-->


<style type="text/css">
    body {
        padding-top: 70px;
    }
    .gray-bg{
        background-color: #FFF;
    }
    /*Block headline*/
    .heading {
        padding:5px 20px 5px 20px;
        border-left:4px solid #27c5f2; 
    }

    .headline {
        display:block;
        margin:10px 0 25px 0;
        border-bottom:1px dotted #e4e9f0;
    }
    .headline h3, 
    .headline h4 {
        color:#585f69;
        margin:0 0 -2px 0;
        padding-right:10px;
        display:inline-block;
        text-shadow:0 0 1px #f6f6f6;
        border-bottom:2px solid #72c02c;
        font-weight: normal !important;
        font-family: 'Open Sans', sans-serif;
        font-size: 20px;
    }

    /*Posts*/
    .posts .dl-horizontal { 
        margin-bottom:0;
        padding:3px;
    }
    .posts .dl-horizontal:hover { 
        /*border-right:solid 2px #72c02c;*/
        -webkit-transition:all 0.4s ease-in-out;
        -moz-transition:all 0.4s ease-in-out;
        -o-transition:all 0.4s ease-in-out;
        transition:all 0.4s ease-in-out;
    }
    .posts .dl-horizontal dt { 
        width:56px; 
    }
    .posts .dl-horizontal dt img { 
        width:50px; 
        height:50px; 
        border:solid 3px #eee;
    }
    .posts .dl-horizontal dd { 
        margin-left:66px;
    }
    .posts .dl-horizontal dd p { 
        margin:0;
    }
    .posts .dl-horizontal a {
        font-size:15px;
        line-height:14px !important; 
    }
    .posts .dl-horizontal a:hover { 
        color:#72c02c; 
    }
    .posts .dl-horizontal:hover dt img,
    .posts .dl-horizontal:hover dd a { 
        border-color:#72c02c !important;
        -webkit-transition:all 0.4s ease-in-out;
        -moz-transition:all 0.4s ease-in-out;
        -o-transition:all 0.4s ease-in-out;
        transition:all 0.4s ease-in-out;
    }

    /*Blog Page
    ------------------------------------*/
    .blog h3 {
        color:#72c02c;
        margin-top: 5px;
        text-shadow: 0 0 1px #f6f6f6;
        font-weight: normal !important;
        font-family: 'Open Sans', sans-serif;
        font-size: 24.5px;
    }

    .blog .blog-info {
        border-top:solid 1px #eee;
    }
    .blog .blog-info p{
        margin-top: 10px;
    }

    /*Gallery*/
    .gallery li {
        display:inline;
    }
    .gallery li img {
        opacity:0.6;
        width:60px;
        height:60px;
        margin:0 2px 8px;
    }
    .gallery li img:hover {
        opacity:1;
        box-shadow:0 0 0 2px #72c02c;
    }

    /*CSS3 Hover Effects*/
    .hover-effect {
        -webkit-transition:all 0.4s ease-in-out;
        -moz-transition:all 0.4s ease-in-out;
        -o-transition:all 0.4s ease-in-out;
        transition:all 0.4s ease-in-out;
    }
    .hover-effect-kenburn {
        left:10px;
        margin-left:-10px;
        position:relative;
        -webkit-transition: all 0.8s ease-in-out;
        -moz-transition: all 0.8s ease-in-out;
        -o-transition: all 0.8s ease-in-out;
        -ms-transition: all 0.8s ease-in-out;
        transition: all 0.8s ease-in-out;
    }
    .hover-effect-kenburn:hover {
        -webkit-transform: scale(2) rotate(5deg);
        -moz-transform: scale(2) rotate(5deg);
        -o-transform: scale(2) rotate(5deg);
        -ms-transform: scale(2) rotate(5deg);
        transform: scale(2) rotate(5deg);
    }
</style>

<body class="gray-bg">

    <!--Top Navbar-->
    <?php include_once('/../templates/default_top_navbar.php'); ?>
    <!--End of Top Navbar-->


    <div class="container">		
        <div class="row blog-page">    
            <!-- Left Sidebar -->
            <div class="col-sm-8">
                <div class="blog margin-bottom-30">
                    <h3>Explore Sri Lanka - 14 Days / 13 Nights</h3>
                    <div class="inline blog-info">
                        <p>Being a small island surrounded by sea on all the sides, Sri Lanka is also blessed with thundering water falls and more
                            than 100 rivers... According to an ongoing research, the largest number of endemic amphibian fauna in the world may soon be found in Sri Lanka. What more reasons do you need to visit this one of kind island.</p>
                        <p><strong>ROUTE :</strong> AIRPORT | NEGOMBO | ANURADHAPURA | HABARANA | POLONNARUWA | SIGIRIYA | DAMBULLA | KANDY | PINNAWALA | KITULGALA | NUWARA ELIYA | ELLA | YALA | GALLE | HIKKADUWA | COLOMBO | AIRPORT</p>
                    </div>

                    <div class="ibox-content inspinia-timeline animated fadeInRight">

                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-1 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 01</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-11 content no-top-border">
                                    <p class="m-b-xs"><strong>AIRPORT - ARRIVAL / NEGOMBO</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-01.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Arrive to Colombo Bandaranaike International Airport and met by representative of Sri Lanka Vacation Tours.</li>
                                            <li>Transfer to beach hotel at Negombo.</li>
                                            <li>Check in to the hotel and leisure.</li>
                                            <li>Overnight stay at Negombo.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 02</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>NEGOMBO / ANURADHAPURA</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-02.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the hotel and travel to Anuradhapura.</li>
                                            <li>En-route visit the Munneshwaram Temple.</li>
                                            <li>Then proceed to Anuradhapura and Visit the World heritage site.</li>
                                            <li>Visit the Museum, Sri Maha Bodhi, Ruvanweliseya, Jethavanarama (World Largest Bricks Building), Abayagiriya, Moonstone and etc…</li>
                                            <li>Then travel to Habarana.</li>
                                            <li>Check in to the hotel and leisure.</li>
                                            <li>Overnight stay at Habarana.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 03</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>HABARANA / POLONNARUWA / HABARANA</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-03.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the hotel.</li>
                                            <li>Travel to Polonnaruwa and visit the Cultural sites.</li>
                                            <li>Polonnaruwa was the capital of Sri Lanka from the 11th to the 13th century AD.</li>
                                            <li>Visit the Museum, Royal Place, Statue of King, Gal Viharaya Statue, Lankathilaka Temple, Thuparamaya, Shiva Devalaya and etc…</li>
                                            <li>Then visit the wood carving factory.</li>
                                            <li>Travel to Habarana and check in to the hotel and leisure.</li>
                                            <li>Overnight stay at Habarana.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 04</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>HABARANA / SIGIRIYA / HABARANA</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-04.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the Hotel.</li>
                                            <li>You will have an Elephant Riding and Village Cart ride.</li>
                                            <li>Then Explore to climbing to Sigiriya rock fortress.</li>
                                            <li>Sigiriya Rock is One of Sri Lanka's most fascinating UNESCO world heritage sites.</li>
                                            <li>Visit the Water Garden, Frescoes, Mirror Wall, Lions Pow and etc….</li>
                                            <li>Then visit the Sigiriya Museum.</li>
                                            <li>Come back to Hotel and Leisure.</li>
                                            <li>Overnight stay at Habaran.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 05</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>HABARANA / DAMBULLA / MATALE / KANDY</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-05.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the Hotel and travel to Kandy.</li>
                                            <li>En-route visit the Dambulla Golden rock temple.</li>
                                            <li>Golden Rock is a cave temple which dates back to the 1st Century BC. The caves house the largest collection of Buddha statues in one place.</li>
                                            <li>Then Proceed to Kandy and en-route visit the Matale Herbal spice garden.</li>
                                            <li>Arrive to Kandy and check in to the hotel and leisure.</li>
                                            <li>Overnight stay at Kandy.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 06</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>KANDY / PINNAWALA / KANDY</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-06.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the hotel and city tour in Kandy.</li>
                                            <li>Visit the Gem mine and Silk Garden and Handicraft.</li>
                                            <li>Then travel to visit the Pinnawala Elephant Orphanage, Watch the elephant’s bath in the river after the youngest babies are milk fed.</li>
                                            <li>Then visit the Paper Making factory by using Elephant Dump.</li>
                                            <li>Come back to Kandy.</li>
                                            <li>Visit the Kandy Temple of the Tooth Relic.</li>
                                            <li>Then View a Kandy Lake and Kandy city at the view point.</li>
                                            <li>View a Kandy fire Dance show in evening.</li>
                                            <li>Overnight stay at Kandy.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 07</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>KANDY / KITULGALA / NUWARA ELIYA</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-07.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the Hotel and travel to Nuwara Eliya.</li>
                                            <li>En-route visit Peradeniya Royal Botanical Garden.</li>
                                            <li>Then Travel to Nuwara Eliya.</li>
                                            <li>En-route you will have White water rafting at Kitulgala.</li>
                                            <li>Then visit the Ramboda Waterfall, Tea Factory and Tea Plantation.</li>
                                            <li>Arrive to Nuwara Eliya and check in to the hotel and leisure.</li>
                                            <li>Overnight at Nuwara Eliya.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 08</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>NUWARA ELIYA / HORTON PLAINS / ELLA</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-08.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Early morning go for visit the Horton Plains and World’s End. Horton Plains is a unique natural attraction in Sri Lanka.</li>
                                            <li>Then travel to Ella.</li>
                                            <li>En-route you will have a Train trip from Nanu oya to Ella.</li>
                                            <li>Check in to the hotel and view an Ella Gap.</li>
                                            <li>Overnight stay at Ella.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 09</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>ELLA / YALA</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-09.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the hotel and travel to Yala.</li>
                                            <li>En-route visit the Ravana Waterfall.</li>
                                            <li>Then visit the Buduruwagala temple.</li>
                                            <li>Check in to the Yala hotel and afternoon you will have a Safari at Yala National Park.</li>
                                            <li>Visit spotted leopard, Elephant, Peacock, Birds, Pig, dears and many more animals.</li>
                                            <li>Overnight stay at Yala.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 10</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>YALA / GALLE / HIKKADUWA</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-10.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the hotel and travel to Hikkaduwa for beach stay.</li>
                                            <li>En-route visit the Turtle Hatchery and Stick fishermen.</li>
                                            <li>Then visit the Galle Dutch Fort.</li>
                                            <li>Check in to the hotel and Leisure at Hikkaduwa Beach.</li>
                                            <li>Overnight stay at Hikkaduwa.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 11</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>HIKKADUWA / MIRISSA / HIKKADUWA</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-11.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Early morning travel to Mirissa.</li>
                                            <li>Breakfast at there.</li>
                                            <li>Morning go for Whale & Dolphin watching.</li>
                                            <li>Come Back to Hikaduwa Beach and Leisure.</li>
                                            <li>Overnight stay at Hikkaduwa Beach.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 12</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>HIKKADUWA BEACH</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-12.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the hotel.</li>
                                            <li>Leisure at Hikkaduwa Beach.</li>
                                            <li>Enjoy with Diving and Snorkeling.</li>
                                            <li>Overnight stay at Hikkaduwa Beach.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 13</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>HIKKADUWA / BALAPITIYA / COLOMBO</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-13.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the hotel and travel to Colombo.</li>
                                            <li>En-route you will have a Boat Safari at Balapitiya Madu River.</li>
                                            <li>Then you will have a city tour in Colombo, visit the Tourist attractions.</li>
                                            <li>Visit Colombo Zoo, Gangarama Temple, Old Parliament, Viharamahadevi Park, National Museum, Galle Face Green.</li>
                                            <li>Check in to the Colombo hotel and leisure.</li>
                                            <li>Overnight stay at Colombo.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row">
                                <div class="col-xs-3 date">
                                    <i class="fa fa-briefcase"></i>
                                    <strong>DAY 14</strong>
                                    <br/>
                                </div>
                                <div class="col-xs-9 content no-top-border">
                                    <p class="m-b-xs"><strong>COLOMBO / AIRPORT - DEPARTURE</strong></p>
                                    <div class="col-xs-4">
                                        <div class="row">
                                            <img style="width: 100%;" src="<?php echo base_url('img/tour_packages/package4/day-14.jpg'); ?>" alt="day1">
                                        </div>

                                    </div>    
                                    <div class="col-xs-8">
                                        <ul>
                                            <li>Breakfast at the hotel.</li>
                                            <li>Proceed to the Colombo Airport on time for the departure flight.</li>
                                        </ul>
                                    </div>    

                                </div>
                            </div>
                        </div>

                    </div>


                </div><!--/blog-->


            </div><!--/span9-->

            <!-- Right Sidebar -->
            <div class="col-sm-4">

                <!-- Tour Map -->
                <div class="headline"><h3>Tour Map</h3></div>
                <div id="map" style="width: 100%; height: 500px;"></div>

                <!-- Package Rates -->
                <div class="blog-twitter">
                    <div class="headline"><h3>Rates (14 Days / 13 Nights)</h3></div>
                    <h5><strong>Budget</strong></h5>
                    <ul style="list-style: none;">
                        <li>1 person -  1950 USD</li>
                        <li>2 persons- 2350 USD (Couple)</li>
                        <li>2 - 4 persons-   1750 USD (each)</li>
                        <li>4 - 6 persons-   1650 USD (each)</li>
                    </ul>

                    <h5><strong>Middle Class</strong></h5>
                    <ul style="list-style: none;">
                        <li>1 person - 2100 USD</li>
                        <li>2 persons- 2450 USD (Couple)</li>
                        <li>2 - 4 persons- 2000 USD (each)</li>
                        <li>4 - 6 persons- 1900 USD (each)</li>
                    </ul>

                    <h5><strong>Luxury</strong></h5>
                    <ul style="list-style: none;">
                        <li>1 person - 3100 USD</li>
                        <li>2 persons- 3500 USD (Couple)</li>
                        <li>2 -4 persons- 3000 USD(each)</li>
                        <li>4 - 6 persons-2900 USD(each)</li>
                    </ul>
                </div>

                <!-- Package Includes -->
                <div class="headline"><h3>Tour Map</h3></div>
                <ul>
                    <li>Airconditioned vehicle with an English speaking chauffer guide.</li>
                    <li>Accommodation with breakfast and dinner.</li>
                    <li>Driver acommodation and meals,Fuel and Taxes.</li>
                    <li>Entry tickets</li>
                    <li>Safari jeep</li>
                    <li>Elephant ride</li>
                </ul>

                <!-- Recent Tour Packages -->
                <div class="posts">
                    <div class="headline"><h3>Recent Tour Packages</h3></div>
                    <dl class="dl-horizontal">
                        <dt><a href="<?php echo site_url('tour_packages/culture_heritage');?>"><img src="<?php echo base_url('/img/tour_packages/Cultural Heritage.jpg'); ?>" alt="" /></a></dt>
                        <dd>
                            <p><a href="<?php echo site_url('tour_packages/culture_heritage');?>">We are proud to say that Sri Lanka is a country, that has a cultural heritage...</a></p> 
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="<?php echo site_url('tour_packages/classic_sri_lanka');?>"><img src="<?php echo base_url('/img/tour_packages/Classic Sri Lanka.jpg'); ?>" alt="" /></a></dt>
                        <dd>
                            <p><a href="<?php echo site_url('tour_packages/classic_sri_lanka');?>">This package consists of the Finest of the locations that Sri Lanka has to offer...</a></p> 
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="<?php echo site_url('tour_packages/ceylon_tea_trails');?>"><img src="<?php echo base_url('/img/tour_packages/Tea Trails.jpg'); ?>" alt="" /></a></dt>
                        <dd>
                            <p><a hrefIt i="<?php echo site_url('tour_packages/ceylon_tea_trails');?>">s a fact that Sri Lanka is the world's fourth largest producer of tea... </a></p> 
                        </dd>
                    </dl>
                </div><!--/posts-->


                <!-- Photo Stream -->
                <div class="headline"><h3>Photo Stream</h3></div>
                <ul class="unstyled gallery" style="display: inline; margin: -40px;">
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/1.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/2.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/3.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/4.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/5.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/6.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/7.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/8.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/9.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                </ul>


            </div><!--/span3-->
        </div><!--/row-fluid-->   

    </div><!--/container-->

    <!--Footer2-->
    <?php include_once('/../templates/footer2.php'); ?>
    <!--End of the Footer2-->
    
    <!-- Mainly scripts -->
    <script src="<?php echo base_url() . 'js/jquery-1.11.2.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/bootstrap.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'js/jquery-ui.min.js' ?>"></script>

    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script type="text/javascript">

        $(function () {
            var stops = [
                {"Geometry": {"Latitude": 7.2111, "Longitude": 79.8386}}, //negambo
                {"Geometry": {"Latitude": 8.3500, "Longitude": 80.3853}}, //anuradhapura
                {"Geometry": {"Latitude": 8.0333, "Longitude": 80.7500}}, //habarana
                {"Geometry": {"Latitude": 7.9333, "Longitude": 81.0000}}, //polonnaruwa
                {"Geometry": {"Latitude": 7.9569, "Longitude": 80.7597}}, //sigiriya
                {"Geometry": {"Latitude": 7.8578, "Longitude": 80.6525}}, //dambulla
                {"Geometry": {"Latitude": 7.2964, "Longitude": 80.6350}}, //kandy
                {"Geometry": {"Latitude": 7.3000, "Longitude": 80.4000}}, //pinnawala
                {"Geometry": {"Latitude": 6.5900, "Longitude": 80.2500}}, //kithulgala
                {"Geometry": {"Latitude": 6.9667, "Longitude": 80.7667}}, //nuwara eliya
                {"Geometry": {"Latitude": 6.8747, "Longitude": 81.0439}}, //ella
                {"Geometry": {"Latitude": 6.3781, "Longitude": 81.3827}}, //yala
                {"Geometry": {"Latitude": 6.0536, "Longitude": 80.2117}}, //galle
                {"Geometry": {"Latitude": 6.1472, "Longitude": 80.1103}}, //hikka
                {"Geometry": {"Latitude": 6.9344, "Longitude": 79.8428}} //colombo
            ];

            var map = new window.google.maps.Map(document.getElementById("map"));

            // new up complex objects before passing them around
            var directionsDisplay = new window.google.maps.DirectionsRenderer();
            var directionsService = new window.google.maps.DirectionsService();

            Tour_startUp(stops);

            window.tour.loadMap(map, directionsDisplay);
            window.tour.fitBounds(map);

            if (stops.length > 1)
                window.tour.calcRoute(directionsService, directionsDisplay);
        });

        function Tour_startUp(stops) {
            if (!window.tour)
                window.tour = {
                    updateStops: function (newStops) {
                        stops = newStops;
                    },
                    // map: google map object
                    // directionsDisplay: google directionsDisplay object (comes in empty)
                    loadMap: function (map, directionsDisplay) {
                        var myOptions = {
                            zoom: 13,
                            center: new window.google.maps.LatLng(7.2964, 80.6350), // default to Kandy
                            mapTypeId: window.google.maps.MapTypeId.ROADMAP
                        };
                        map.setOptions(myOptions);
                        directionsDisplay.setMap(map);
                    },
                    fitBounds: function (map) {
                        var bounds = new window.google.maps.LatLngBounds();

                        // extend bounds for each record
                        jQuery.each(stops, function (key, val) {
                            var myLatlng = new window.google.maps.LatLng(val.Geometry.Latitude, val.Geometry.Longitude);
                            bounds.extend(myLatlng);
                        });
                        map.fitBounds(bounds);
                    },
                    calcRoute: function (directionsService, directionsDisplay) {
                        var batches = [];
                        var itemsPerBatch = 10; // google API max = 10 - 1 start, 1 stop, and 8 waypoints
                        var itemsCounter = 0;
                        var wayptsExist = stops.length > 0;

                        while (wayptsExist) {
                            var subBatch = [];
                            var subitemsCounter = 0;

                            for (var j = itemsCounter; j < stops.length; j++) {
                                subitemsCounter++;
                                subBatch.push({
                                    location: new window.google.maps.LatLng(stops[j].Geometry.Latitude, stops[j].Geometry.Longitude),
                                    stopover: true
                                });
                                if (subitemsCounter == itemsPerBatch)
                                    break;
                            }

                            itemsCounter += subitemsCounter;
                            batches.push(subBatch);
                            wayptsExist = itemsCounter < stops.length;
                            // If it runs again there are still points. Minus 1 before continuing to 
                            // start up with end of previous tour leg
                            itemsCounter--;
                        }

                        // now we should have a 2 dimensional array with a list of a list of waypoints
                        var combinedResults;
                        var unsortedResults = [{}]; // to hold the counter and the results themselves as they come back, to later sort
                        var directionsResultsReturned = 0;

                        for (var k = 0; k < batches.length; k++) {
                            var lastIndex = batches[k].length - 1;
                            var start = batches[k][0].location;
                            var end = batches[k][lastIndex].location;

                            // trim first and last entry from array
                            var waypts = [];
                            waypts = batches[k];
                            waypts.splice(0, 1);
                            waypts.splice(waypts.length - 1, 1);

                            var request = {
                                origin: start,
                                destination: end,
                                waypoints: waypts,
                                travelMode: window.google.maps.TravelMode.WALKING
                            };
                            (function (kk) {
                                directionsService.route(request, function (result, status) {
                                    if (status == window.google.maps.DirectionsStatus.OK) {

                                        var unsortedResult = {order: kk, result: result};
                                        unsortedResults.push(unsortedResult);

                                        directionsResultsReturned++;

                                        if (directionsResultsReturned == batches.length) // we've received all the results. put to map
                                        {
                                            // sort the returned values into their correct order
                                            unsortedResults.sort(function (a, b) {
                                                return parseFloat(a.order) - parseFloat(b.order);
                                            });
                                            var count = 0;
                                            for (var key in unsortedResults) {
                                                if (unsortedResults[key].result != null) {
                                                    if (unsortedResults.hasOwnProperty(key)) {
                                                        if (count == 0) // first results. new up the combinedResults object
                                                            combinedResults = unsortedResults[key].result;
                                                        else {
                                                            // only building up legs, overview_path, and bounds in my consolidated object. This is not a complete 
                                                            // directionResults object, but enough to draw a path on the map, which is all I need
                                                            combinedResults.routes[0].legs = combinedResults.routes[0].legs.concat(unsortedResults[key].result.routes[0].legs);
                                                            combinedResults.routes[0].overview_path = combinedResults.routes[0].overview_path.concat(unsortedResults[key].result.routes[0].overview_path);

                                                            combinedResults.routes[0].bounds = combinedResults.routes[0].bounds.extend(unsortedResults[key].result.routes[0].bounds.getNorthEast());
                                                            combinedResults.routes[0].bounds = combinedResults.routes[0].bounds.extend(unsortedResults[key].result.routes[0].bounds.getSouthWest());
                                                        }
                                                        count++;
                                                    }
                                                }
                                            }
                                            directionsDisplay.setDirections(combinedResults);
                                        }
                                    }
                                });
                            })(k);
                        }
                    }
                };
        }
    </script>

</body>

</html>