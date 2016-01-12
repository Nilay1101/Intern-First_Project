<?php
require 'includes/connect.php';
session_start();
error_reporting(0);
?>




<html>
    <head>
        <title>Sportz.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'includeheader.php'; ?>
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <script src="js/jquery-ui.min.js"></script>
		<link href="css/adminhome.css" rel="stylesheet">
		<title>Academy Registration</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="js/validator.js"></script>
		<script>
		$(document).ready(function() {
        $('#select_sport').multiselect({
			 enableCaseInsensitiveFiltering: true,

            includeSelectAllOption: true,
            buttonWidth: '300px'
        });
		
    });
</script>
<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
		
		 
        </head>
	
	<body>
	<header class="header">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="40" style="height:110px">
    <div class="navbar-header col-md-3">
        
        <a class="navbar-brand" href="index.php"><img src="images/S6.png"></a>
    </div>
	</nav>
	</header>
	
		<div class="container" style="position:relative;top:110px">
		
			<form action="academyregister.php" method=POST enctype="multipart/form-data" data-toggle="validator" role="form">
				<div class="form-group has-feedback" >
					<div class="row">
					<div class="col-md-4" style="background-color:#4DD0E1;height:1050px;">
						
						<div class="row" style="position:relative;top:40px;" >
						
							<div class="col-md-12">
								<div class="form-group">
								<select name="selected_sports[]" id="select_sport" multiple="multiple" maximumSelectionLength="5" placeholder="Select Sports" required>
														<option value="cricket">Cricket</option>
														<option value="swimming">Swimming</option>
														<option value="aqua">Aqua</option>
														<option value="football">Football</option>
														<option value="tennis">Tennis</option>
														<option value="gym">Gym</option>
														<option value="training">Training</option>
														<option value="kabaddi">Kabaddi</option>
														<option value="athletics">Athletics</option>
														<option value="badminton">Badminton</option>
														<option value="basketball">Basketball</option>
														<option value="carrom">Carrom</option>
														<option value="chess">Chess</option>
														<option value="table tennis">Table Tennis</option>
														<option value="vollyball">Vollyball</option>
														<option value="boxing">Boxing</option>
														<option value="wrestling">Wrestling</option>
														<option value="hockey">Hockey</option>
														<option value="billiards">Billiards</option>
														<option value="snooker">Snooker</option>
														<option value="archery">Archery</option>
														<option value="golf">Golf</option>
														<option value="cycling">Cycling</option>
														<option value="traditional sports">Traditional Sports</option>
								</select>	
									<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="name1" placeholder="Name" pattern="^([a-zA-Z]+)$" data-error="Do not leave blank or enter numbers or special characters" required>
									<span class="help-block with-errors"></span>
								</div>
								<div class="form-group dropdown">
									
									<script type="text/javascript">
										var city_arr = new Array("Mumbai", "Hyderabad", "Pune", "Bangalore","Ahmedabad","Delhi","Chennai","Kolkata");

											var s_a = new Array();
											s_a[0]="";
											s_a[1]="Airoli|Ambernath|Ambivli|Andheri|Asangaon|Atgaon|Badlapur|Bamandongri|Bandra|Bhandup|Bhayandar|Bhivpuri Road|Bhiwandi|Boisar|Borivali|Byculla|CBD Belapur|Charni Road|Chembur|Chhatrapati Shivaji Terminus|Chinchpokli|Chunabhatti|Churchgate|Cotton Green|Currey Road|Dadar|Dahanu Road|Dahisar|Vardak|Dativali|Diva Junction|Dockyard Road|Dolavli|Dombivli|Dronagiri|Elphinstone Road|Gavhan|Ghansoli|Ghatkopar|Goregaon|Govandi|Grant Road|Guru Tegh Bahadur Nagar|Jogeshwari|Juchandra|Juinagar|Kalamboli|Kalwa|Kalyan|Kaman Road|Kandivali|Kanjurmarg|Karjat|Kasara|Kelavli|Kelve Road|Khadavli|Khandeshwar|Khar Road|Kharbao|Khardi|Kharghar|Kharkopar|Khopoli|King's Circle|Kopar|Kopar Khairane|Kurla|Lower Parel|Lowjee|Mahalaxmi|Mahim|Malad|Mankhurd|Mansarovar|Marine Lines|Masjid|Matunga|Matunga Road|Mira Road|Mumbai Central|Mumbra|Nahur|Naigaon|Nalasopara|Navade Road|Neral|Nerul|Nhava-Sheva|Nilaje|Oshiwara|Palasdari|Palghar|Panvel|Parel|Rabale|RanjanpadaRanjanpada|Sagar Sangam|Sandhurst Road|Sanpada|Santa Cruz|Saphale|Seawoods–Darave|Shahad|Shelu|Sion|Targhar|Thakurli|Thane|Thansit|Titwala|Turbhe|Ulhasnagar|Umbermali|Umroli|Uran|Vadala Road|Vaitarna|Vangani|Vangaon|Vasai Road|Vashi|Vasind|Vidyavihar|Vikhroli|Vile Parle|Virar|Vithalwadi";																																								
											s_a[2]="A S Rao Nagar | Abdullapurmet|Abids|Adarsh Nagar|Adda Gutta|Adibatla|Adikmet|Afzal Gunj|Almasguda|Alwal|Amberpet|Ameenpur|Ameerpet|Anandbagh|Appa Junction|Attapur|BachupallyBadangpet|Bahadurpally|Bahadurpura|Bairagiguda|Bala Nagar|Balapur|Bandlaguda|Banjara Hills|Basheerbagh|Beeramguda|Begumpet|Bhogaram|Bhoiguda|Bhongir|Bibinagar|BN Reddy Nagar|Boduppal|Bolaram|Borabanda|Bowenpally|Bowrampet|Budvel|Burgul|Champapet|Chanda Nagar|Chandrayanagutta|Cherlapally|Chevalla|Chikkadapally|Chilkur|Chintal|Chintalkunta|Chintapallyguda|Dammaiguda|Dasarlapally|Dayara|Dhoolpet|Dilsukhnagar|Domalguda|Dullapally|Dundigal|East Marredpally|ECIL|Edulanagulapalle|Erragadda|Falaknuma|Film Nagar|Gachibowli|GagillapurGajularamaram|Gandhi Nagar|Gandi Maisamma|Ghansi Bazar|Ghatkesar|Golkonda|Gopanpally|Gudimalkapur|Gulshan-e-Iqbal Colony|Gundlapochampally|Gunrock Enclave|Gurram Guda|Habsiguda|Hafeezpet|Hakimpet|Hanuman Nagar Colony|Hasmathpet|Hastinapuram|Hayat Nagar|Hi Tech City|Himayath Nagar|Humayun Nagar|Hyder Nagar|Hyderguda|Ibrahimpatnam|Isnapur|Jalpally|Jam Bagh|Jawahar Nagar|Jeedimetla|Jeera|Jubilee Hills|Kachiguda|Kakaguda|Kalasiguda|Kanchan Bagh|Kandukur|Kapra|Karkhana|Karmanghat|Karwan|Katedan|Kavadiguda|Kazipally|Keesara|Khairatabad|Kismatpur|Kokapet|Kollur|Kompally|Kondapur|Kothaguda|Kothapet|Kothur|Koti|Kowkur|KPHB|Kukatpally|Kushaiguda|Lakdi Ka Pul|Lal Darwaza|Lalapet|Lallaguda|Langar Houz|LB Nagar|LingampallyLothkunta|Lumbini Park|Madhapur|Madhura Nagar|Madinaguda|Maheshwaram|Majarguda|Malakpet|Malkajgiri|Mallampet|Mallapur|Manchirevula|Manikonda|Manneguda|Mansoorabad|Maruti Nagar|Masab Tank|Mazidpur|Medak Road|Medchal|Medipalli|Meerpet|Mehdipatnam|Mettuguda|Miyapur|Moghalpura|Moinabad|Mokila|Moosapet|Moosarambagh|Moti Ganpur|Moti NagarMoula Ali|Musheerabad|Muthangi|Mylargada|Nacharam|Nagaram|Nagarjuna Sagar Road|Nagole|Nallagandla|Nallakunta|Nampally|Nanakramguda|Nandigama|Narayanguda|Narketpalli|Narsapur Highway|Narsingi|Nawab Saheb Kunta|Neeladri Nagar|Neredmet|New Malakpet|New Mallepally|NH-7|NH-9 Highway|Nizampet|Nizampet Road|NTR Nagar|Old Bowenpally|Osman Nagar|Osman Sagar Road|Outer Ring Road|Padma Rao Nagar|Pahadi ShareefPatancheruPavanpuri Colony|Peerancheru|Peerzadiguda|Pet basheerabad|Pochampally|Pocharam|Pragathi Nagar|Pulimamidi|Punjagutta|Puppalaguda|Quthbullapur|Qutub Shahi Tombs|R.K.Puram|Rai Durg|Raj Bhavan Road|Rajeev Nagar|Rajendra Nagar|Ram Nagar|Ramakrishnapuram|Ramanthapur|Ramchandra Puram|Ramgopalpet|Ramoji Film City|Rampally|Rani Gunj|Rasoolpura|Rendlagadda|Rudraram|S D Road|Saidabad|Saifabad|SainikpuriSaleem Nagar|Sanath Nagar|Sangareddy|Sanjeeva Reddy Nagar|Santosh Nagar|Saroor Nagar|Secunderabad|Serilingampally|Shadnagar|Shahbaad|Shaikpet|Shameerpet|Shamirpet|Shamshabad|Shamshabad Road|Shankarpalli|Shanthi Nagar|Sheriguda|Siddhartha Nagar|Sindhi Colony|Sitaphalmandi|Sivarampalli|Somajiguda|Sri Nagar Colony|Srinagar Colony|Srisailam Highway|Subhash Nagar|Suchitra Road|Suraram|Surya Nagar Colony|Tarnaka|Tellapur|ThimmapurToli Chowki|Trimulgherry|Tukkuguda|Tupran|Turkayamjal|Uppaguda|Uppal|Upparpally|Upperpally|Vanasthalipuram|Vattepally|Vayupuri|Venkat Reddy Colony|Venkatapuram|Vijayawada Highway|Walker Town|Warangal highway|West Marredpally|Whitefields|Yakhutpura|Yapral|Yousufguda|Zahirabad";
											s_a[3]="Akurdi|Ala|Alandi Devachi|Alandi Khed|Alandi Road|Ambegaon Bk|Anandnagar|Ane|Armament|Aundh|Aundh Road|Balaji Nagar|Balewadi|Baner|Baner Road|Belha|Bhandarkar Road|Bhavani Peth|Bhawani Peth Road|Bhor|Bhosari|Bhosarigaon|Bibvewadi|Bopodi|Budhwar Peth|Bund Garden Road|Camp|Chakan|Chikhali|Chinchwad|Chinchwad East|Chinchwadgaon|Dapodi|Dattawadi|Daund|Deccan Gymkhana|Dehu Road|Dhankawadi|Dhayari|Dhole Patil Road|Dighi Camp|Erandwana|Ex Servicemen Colony|Fatima Nagar|Fergusson College Road|Ganesh Peth|Ganeshkhind|Ghorpade Peth|Ghorpuri|Gokhale Nagar|Gultekdi|Guruwar Peth|Hadapsar|Hadapsar|Hadapsar Indl Estate|Haveli|Hingane Khurd|Hingne Khurd|Hinjewadi|I.A.T. Pune|Indrayani Darshan Dehu Road|Jangali Maharaj Road|Junnar|Kalewadi|Kalyani Nagar|Kalyani Nagar|Karve Nagar|Karve Road|Kasarwadi|Kasba Peth|Katraj|Khadaki|Khadakwasla|Khadki|Kharadi|Khed|Kondhwa|Kondhwa Budruk|Kondhwa Khurd|Koregaon Park|Koregaon Park Road 1|Kothrud|Law College Road|Laxmi Road|Lohegaon|Lonavala|Loni Kalbhor|Lulla Nagar|Mahatma Gandhi Road|Mangalwar Peth|Manik Baug|Market Yard|Model Colony|Mukund Nagar|Mundhawa|Mundhwa|Nagar RoadNana Peth|Narayan Peth|Narayangaon|Navi Peth|Navsahyadri|Nigdi|Padmavati|Parvati|Pashan|Paud Road|Phursungi|Pimpri|Pimpri Chinchwad|Pimpri Colony|Pirangut|Prabhat Road|Pune|Pune City|Pune Railway Station|Range Hill|Rasta Peth|Raviwar Peth|S.P. College|Sadashiv Peth|Sahakar Nagar|Salunke Vihar|Sanghavi|Sasoon Road|Satara Road|Secondary School Certificate|Senapati Bapat Marg|Shaniwar Peth|Shivaji Housing Society|Shivaji Nagar|Shivajinagar|Shukrawar Peth|Sinhagad|Sinhagad Road|Somwar Peth|Swargate|Talegaon Dabhade|Thergaon|Tilak Road|Uruli|Vadgaon Budruk|Vadgaon Sheri|Viman Nagar|Vishrantwadi|Wadgaon Budruk|Wagholi|Wakad|Wakadewadi|Wanawadi|Wanowarie|Wanowri|Wanworie|Warje|Warje Malwadi|Yerawada";


											s_a[4]="";

											function print_city(city){
											//given the id of the <select> tag as function argument, it inserts <option> tags
											var option_str = document.getElementById(city);
											option_str.length=0;
											option_str.options[0] = new Option('Select City','');
											option_str.selectedIndex = 0;
											for (var i=0; i<city_arr.length; i++) {
											option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
										}
								}

									function print_area(area, selectedIndex){
										var option_str = document.getElementById(area);
										option_str.length=0;    // Fixed by Julian Woods
										option_str.options[0] = new Option('Select Area','');
										option_str.selectedIndex = 0;
										var area_arr = s_a[selectedIndex].split("|");
										for (var i=0; i<area_arr.length; i++) {
										option_str.options[option_str.length] = new Option(area_arr[i],area_arr[i]);
												}
									}
									</script>
									<select class="form-control" onchange="print_area('area',this.selectedIndex);" id="city" name ="city" required></select>
									
										
									<select  class="form-control" name ="area" id ="area" required></select>
									<script language="javascript">print_city("city");</script>
										

									
									
								</div>
								
								<div class="form-group">
									<textarea type="textarea" class="form-control" name="address" pattern="^([a-zA-Z0-9]+)$" placeholder="Full address" rows="2" data-error="Do not leave Blank" required></textarea>
									<span class="help-block with-errors"></span>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="landmark" pattern="^([a-zA-Z0-9]+)$" placeholder="Nearest Landmark" data-error="Do not leave Blank" required>
												<span class="help-block with-errors"></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="number" class="form-control" name="pincode" pattern="^([0-9]+)$" placeholder="Pincode" data-error="Please insert only numbers" required>
												<span class="help-block with-errors"></span>
										</div>
									</div>
								</div>
								<div class="form-group">
											<input type="text" class="form-control" pattern="^([a-zA-Z0-9]+)$" name="directions" data-error="Do not leave Blank" placeholder="Directions" required>
												<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
											<input type="text" class="form-control" pattern="^([a-zA-Z0-9]+)$" name="lat_long" data-error="Do not leave Blank" placeholder="Latitude and Laongitude(Google map)" data-error="Do not leave Blank" required>
											<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
											<input type="number" class="form-control"  pattern="^([0-9]+)$" name="tele_number" data-error="Do not leave Blank" placeholder="Office Telephone Number" data-error="Please enter only numbers" required>
											<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
											<input type="number" class="form-control" name="mob_number"  pattern="^([0-9]+)$" placeholder="Mobile Number" data-error="Please enter only numbers" required>
											<span class="help-block with-errors"></span>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="E-mail" required data-error="Please enter valid E-mail">
											<span class="help-block with-errors"></span>
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" pattern="^(http:\/\/|https:\/\/)?(www.)?([a-zA-Z0-9]+).[a-zA-Z0-9]*.[a-z]{3}.?([a-z]+)?$"  name="website" placeholder="Website" data-error="Please enter in this format www.xyz.com" required>
											<span class="help-block with-errors"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" pattern="^([a-zA-Z]+)$" name="owner_name" placeholder="Owner Name" data-error="Do not leave blank or insert numbers or characters" required>
											<span class="help-block with-errors"></span>
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="owner_contacts" pattern="^([a-zA-Z0-9]+)$" placeholder="Contacts" data-error="Do not leave blank" required>
											<span class="help-block with-errors"></span>
										</div>
									</div>
								</div>
								
										<div class="form-group">
											<input type="text" class="form-control" name="timings" pattern="^([a-zA-Z0-9]+)$" placeholder="Timings" data-error="Do not leave blank" required>
											<span class="help-block with-errors"></span>
										</div>
									
								
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3" style="background-color:#4DD0E1;height:1050px">
						<div class="row" style="position:relative;top:40px;" >
							<div class="col-md-12">
							<div style="background-color:#81C784;padding:10px 5px 10px 20px;border-radius:5px">
								<h3>Facilities Available</h3>
								<br>
								<div class="form-group">
									<input type="checkbox" name="facilities_check1[]" value="drinking water" >
									<label>Drinking Water</label>
								</div>
								<div class="form-group">
									<input type="checkbox" name="facilities_check1[]" value="washroom" >
									<label>Washroom</label>
								</div>
								<div class="form-group">
									<input type="checkbox" name="facilities_check1[]" value="travel support" >
									<label>Travel Support</label>
								</div>
								<div class="form-group">
									<input type="checkbox" name="facilities_check1[]" value="firstaid" >
									<label>First Aid</label>
								</div>
								<div class="form-group">
									<input type="checkbox" name="facilities_check1[]" value="canteen" >
									<label>Canteen</label>
								</div>
								<div class="form-group">
									<input type="checkbox" name="facilities_check1[]" value="restroom" >
									<label>Rest Room</label>
								</div>
								<div class="form-group">
									<input type="checkbox" name="facilities_check1[]" value="equipment" >
									<label>Equipment</label>
								</div>
								<div class="form-group">
									<input type="checkbox" name="facilities_check1[]" value="parking" >
									<label>Parking</label>
								</div>
								</div>
								<br>
								<br>
								<br>
								<div class="form-group dropdown">
									
									<select class="form-control" name="gender" required>
										<option value="">Gender</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="unisex">Unisex</option>
										

									</select>
									<span class="help-block with-errors"></span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-5" style="background-color:#4DD0E1;height:1050px;">
					
						<div class="row" style="position:relative;top:40px;" >
							<div class="col-md-10">
								<div class="form-group">
											<input type="number" class="form-control" name="min_fees" pattern="^([0-9]+)$" placeholder="Minimum Fees" data-error="PLease enter only numbers" required>
											<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
											<textarea type="text" class="form-control" name="fees" pattern="^([a-zA-Z0-9]+)$"  placeholder="Fees" data-error="Do not leave blank" rows="3" required></textarea>
											<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
											<textarea type="text" class="form-control" pattern="^([a-zA-Z0-9]+)$" name="about_us" placeholder="About Us" rows="3" data-error="Do not leave blank" required></textarea>
											<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
											<textarea type="text" class="form-control" pattern="^([a-zA-Z0-9]+)$" name="achievements" placeholder="Achievements" rows="3" data-error="Do not leave blank" required></textarea>
											<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
											<textarea type="text" class="form-control" pattern="^([a-zA-Z0-9]+)$" name="news_accred_certifs" placeholder="News Papers/ Accredations/ Certifications" rows="3" data-error="Do not leave blank" required></textarea>
											<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
											<input type="number" class="form-control"  pattern="^([0-9]+)$" name="num_coaches" data-error="Please enter only numbers" placeholder="Number of Coaches">
											<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Upload Images</label>
									<p class="help-block">Max size:2MB</p>
									<input type="file" id="InputFile1" name="normal_images" data-error="Please upload valid images" required>
									<span class="help-block with-errors"></span>
									
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Main Image</label>
									<p class="help-block">Max size: 2MB</p>
									<input type="file" id="InputFile2" name="main_image" data-error="Please upload valid image" required>
									<span class="help-block with-errors"></span>
									
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Carousel Images</label>
									<p class="help-block">Max size: 2MB</p>
									<input type="file" id="InputFile2" name="carousel_image" data-error="Please upload valid images" required>
									<span class="help-block with-errors"></span>
									
								</div>
								    <div class="row">
								        
									        <input type="submit" class="btn btn-md btn-success col-md-2" name="submit1" value="Submit">
                                        
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                
                                            
                                            <a href="<?php  
                                                if($_SESSION['rights']=='super'){
                                                echo "welcomesuper.php";}
                                                 if($_SESSION['rights']=='normal'){
                                                echo "welcome.php";}
                                            
                                            
                                            ?>" class="btn btn-md btn-danger">Cancel</a>
                                            
                                            
                                            </div>
                                        </div>
                                    </div>
							</div>
							
							
						</div>
					
					</div>
				</div>
				</div>
			</form>
			
		</div>
	
	
	
	</body>
</html>
<?php

	if($_POST['submit1'])
	{
		
		$city=$_POST['city'];
		$area=$_POST['area'];

		$name1=$_POST['name1'];
		$address=$_POST['address'];
		$landmark=$_POST['landmark'];
		$pincode=$_POST['pincode'];
		$directions=$_POST['directions'];
		$lat_long=$_POST['lat_long'];
		$tele_number=$_POST['tele_number'];
		$mob_number=$_POST['mob_number'];
		$email=$_POST['email'];
		$website=$_POST['website'];
		$owner_name=$_POST['owner_name'];
		$owner_contacts=$_POST['owner_contacts'];
		$timings=$_POST['timings'];
		
		$facilities1=implode(',',$_POST['facilities_check1']);
		
  
		$gender=$_POST['gender'];
		$min_fees=$_POST['min_fees'];
		$fees=$_POST['fees'];
		$about_us=$_POST['about_us'];
		$achievements=$_POST['achievements'];
		$news_accred_certifs=$_POST['news_accred_certifs'];
		$num_coaches=$_POST['num_coaches'];
	    $sports=implode(',', $_POST['selected_sports']);
			
			if($sports&&$name1&&$address&&$landmark&&$pincode&&$directions&&$lat_long&&$tele_number&&$mob_number&&$email&&$website&&$owner_name&&$owner_contacts&&$timings&&$gender&&$min_fees&&$fees&&$about_us&&$achievements&&$news_accred_certifs&&$num_coaches)
			{
			    
			    
			    if($city=="Mumbai"){
			mysql_query("INSERT INTO th_academyregister_mumbai VALUES('','$sports','$name1','$city','$area','$address','$landmark','$pincode','$directions','$lat_long','$tele_number','$mob_number','$email','$website','$owner_name','$owner_contacts','$timings','$facilities1','$gender','$min_fees','$fees','$about_us','$achievements','$news_accred_certifs','$num_coaches')");
			    }
			    if($city=="Hyderabad"){
			mysql_query("INSERT INTO th_academyregister_hyderabad VALUES('','$sports','$name1','$city','$area','$address','$landmark','$pincode','$directions','$lat_long','$tele_number','$mob_number','$email','$website','$owner_name','$owner_contacts','$timings','$facilities1','$gender','$min_fees','$fees','$about_us','$achievements','$news_accred_certifs','$num_coaches')");
			    }
			    if($city=="Pune"){
			mysql_query("INSERT INTO th_academyregister_pune VALUES('','$sports','$name1','$city','$area','$address','$landmark','$pincode','$directions','$lat_long','$tele_number','$mob_number','$email','$website','$owner_name','$owner_contacts','$timings','$facilities1','$gender','$min_fees','$fees','$about_us','$achievements','$news_accred_certifs','$num_coaches')");
			    }
			    if($city=="Ahmedabad"){
			mysql_query("INSERT INTO th_academyregister_ahmedabad VALUES('','$sports','$name1','$city','$area','$address','$landmark','$pincode','$directions','$lat_long','$tele_number','$mob_number','$email','$website','$owner_name','$owner_contacts','$timings','$facilities1','$gender','$min_fees','$fees','$about_us','$achievements','$news_accred_certifs','$num_coaches')");
			    }
			    if($city=="Bangalore"){
			mysql_query("INSERT INTO th_academyregister_bangalore VALUES('','$sports','$name1','$city','$area','$address','$landmark','$pincode','$directions','$lat_long','$tele_number','$mob_number','$email','$website','$owner_name','$owner_contacts','$timings','$facilities1','$gender','$min_fees','$fees','$about_us','$achievements','$news_accred_certifs','$num_coaches')");
			    }
			    if($city=="Delhi"){
			mysql_query("INSERT INTO th_academyregister_delhi VALUES('','$sports','$name1','$city','$area','$address','$landmark','$pincode','$directions','$lat_long','$tele_number','$mob_number','$email','$website','$owner_name','$owner_contacts','$timings','$facilities1','$gender','$min_fees','$fees','$about_us','$achievements','$news_accred_certifs','$num_coaches')");
			    }
			    if($city=="Chennai"){
			mysql_query("INSERT INTO th_academyregister_chennai VALUES('','$sports','$name1','$city','$area','$address','$landmark','$pincode','$directions','$lat_long','$tele_number','$mob_number','$email','$website','$owner_name','$owner_contacts','$timings','$facilities1','$gender','$min_fees','$fees','$about_us','$achievements','$news_accred_certifs','$num_coaches')");
			    }
			    if($city=="Kolkata"){
			mysql_query("INSERT INTO th_academyregister_kolkata VALUES('','$sports','$name1','$city','$area','$address','$landmark','$pincode','$directions','$lat_long','$tele_number','$mob_number','$email','$website','$owner_name','$owner_contacts','$timings','$facilities1','$gender','$min_fees','$fees','$about_us','$achievements','$news_accred_certifs','$num_coaches')");
			    }
			    
			    
			    
			    
			}
			
			if(isset($_FILES['normal_images'])){
      $errors= array();
      $file_name = $_FILES['normal_images']['name'];
      $file_size =$_FILES['normal_images']['size'];
      $file_tmp =$_FILES['normal_images']['tmp_name'];
      $file_type=$_FILES['normal_images']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['normal_images']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         
      }
      else{
         print_r($errors);
      }
   }
			
			if(isset($_FILES['main_image'])){
      $errors= array();
      $file_name = $_FILES['main_image']['name'];
      $file_size =$_FILES['main_image']['size'];
      $file_tmp =$_FILES['main_image']['tmp_name'];
      $file_type=$_FILES['main_image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['main_image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         
      }
      else{
         print_r($errors);
      }
   }
   
   
			if(isset($_FILES['carousel_image'])){
      $errors= array();
      $file_name = $_FILES['carousel_image']['name'];
      $file_size =$_FILES['carousel_image']['size'];
      $file_tmp =$_FILES['carousel_image']['tmp_name'];
      $file_type=$_FILES['carousel_image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['carousel_image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         
      }
      else{
         print_r($errors);
      }
   }
			
	}
		?>
		
		
	





