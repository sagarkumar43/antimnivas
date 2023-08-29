<?php
session_start();
date_default_timezone_set('Asia/Kolkata'); 
include('admin/dbconnection.php');

?>
<!doctype html>
<html>

<!-- Mirrored from antimnivas.com/post-obituary by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 10:51:19 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>



	<meta name="google-site-verification" content="ItrJMgGYc_m2ChyF4GSs0Jvmi0P9DtZjSpC_HLo7Prk" />
	<meta http-equiv=”Refresh” content=”0;URL=https://antimnivas.com” />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:url" content="/">

	<meta property="og:type" content="website">

	<meta property="og:title"
		content="Digital Online Obituary, Shradhanjali, Tribute portal | Heavenly abode for the departed souls">

	<!-- <meta property="og:image" content="" > -->
	<meta property="og:image" content="img/rest.jpg">
	<meta property="og:description"
		content="Antimnivas.com is an effort to provide a platform to keep the obituaries in a digital form. This helps in keeping the memories of the departed loved ones safe and also provides information about various religious customs and prayers required for the peace of the departed souls.">

	<link rel="icon" href="frontend/images/favicon.ico" type="image/x-icon">
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="frontend/css/fontawesome.css" type="text/css">

	<link rel="stylesheet" href="frontend/css/bootstrap.min.css" type="text/css">

	<link href="frontend/css/package-payment.css" rel="stylesheet" type="text/css">

	<link href="frontend/css/style.css" rel="stylesheet" type="text/css">
	<link href="frontend/css/responsive.css" rel="stylesheet" type="text/css">
	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
	<!-- Owl Stylesheets -->
	<!-- Global site tag (gtag.js) - Google Analytics -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153207188-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-153207188-1');
	</script>
	
    <!-- Ckeditor Script Code -->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

<style>

.nextBtn{
	font-size:large;background:#ff7200;border: none;color: white;width: 10%;height: 35px;font-weight: 600;

}

@media only screen and (max-width: 600px) {
  #medianext123 {
	font-size:large;background:#ff7200;border: none;color: white;width: 20%;height: 35px;font-weight: 600;
  }
}

</style>

	
</head>

<body>

	<!-- loader start -->
	<!-- <div id="loading">
  <img id="loading-image" height="100px" width="100px" src="img/apploader.gif" alt="Loading..." />

</div>
 -->

	<!-- loader end -->


	<!-- Header Block Start -->
	<?php include('header.php'); ?>


	<script type="text/javascript">
		function logoutFunc() {

			datavar = 'd';
			$.ajax({
				type: 'POST',
				url: 'https://antimnivas.com/users/logout',
				data: datavar,
				success: function (data) {
					if (data == 1) {
						location.reload();
					}
					else {
						alert('unable to logout');
					}
				}
			});
		}



	</script>
	<section class="section-common">
		<div class="container">
			<h1 class="heading-h2">Post Obituary</h1>
			<div class="stepwizard">
				<div class="rel"></div>
				<div class="stepwizard-row setup-panel">
					<div class="stepwizard-step f-step f-step1">
						<a href="#step-1" id="btn-1" type="button" class="btn btn-success btn-circle"><span
								class="txt"><span class="txt-inner"></span></span></a>
						<p>Details</p>
					</div>
					<div class="stepwizard-step f-step f-step2">
						<a href="#step-2" id="btn-2" type="button" class="btn btn-default btn-circle"
							disabled="disabled"><span class="txt"><span class="txt-inner"></span></span></a>
						<p>Login</p>
					</div>
					<div class="stepwizard-step f-step f-step3">
						<a href="#step-3" id="btn-3" type="button" class="btn btn-default btn-circle"
							disabled="disabled"><span class="txt"><span class="txt-inner"></span></span></a>
						<p>Secure Payment</p>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section class="section-common light-grayNew pay-detail">
		<div class="container paddingT-30 paddingB-30">
			<!-- step frame 1 -->
			<div class="setup-content" id="step-1">
			<form id="user_form" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-12" id="step-11">
						<div class="row">
							<div class="col-sm-4">
								<!-- Frmae new Html -->
								<div class="new-Box-1 positionRel">
									<div class="changeFrame">
										<img id="formula" src="frontend/images/new-frame-gold.png" alt="frame">
									</div>
									<div class="upload-pic">
										<input type="text" hidden="" value="" id="payment_status">
										<!-- <form id="user_form" method="post" enctype="multipart/form-data"
											action="https://antimnivas.com/post-obituary"> -->
											<div class="input file">
												<input type="file" name="userupload" accept="image/png, image/jpeg" class="picUpload-input"
													id="imgInp"/>
											</div>
											<div class="showImages">
												<img id="blah" src="#" alt="" />
											</div>
											<div class="editUser">
												<img src="frontend/images/user-edit.png"
													alt="user edit">
											</div>
											<div class="uploadBox-2">
												<div class="bg-user"><img src="frontend/images/pic-upload.png"
														alt="pic upload" >
												</div>
												<p>Upload Images Max. Allowed Size:1MB</p>
											</div>
									</div>
								</div>
							</div>

							<div class="col-sm-8">
								<div class="detail-field">
									<h4>Obituary Title</h4>
									<div class="row">
										<div class="col-sm-6">
											<div class="input">
												<select name="obituary_title" class="form-common">
													<option value="Tribute">Tribute</option>
													<option value="Shradhanjali">Shradhanjali</option>
												</select>


											</div>
										</div>
									</div>
								</div>
								<div class="detail-field">
									<h4>Select Frame Color</h4>
									<div class="input-radi0">
										<div class="goldFrame">
											<input type="radio" name="frame_type" onclick="changeframe('gold');"
												value="gold" checked id="connect-1"> <label for="connect-1"></label>
										</div>
										<div class="greyFrame">
											<input type="radio" name="frame_type" onclick="changeframe('gray');"
												value="gray" id="connect-2"> <label for="connect-2"></label>
										</div>
										<div class="greyBlack">
											<input type="radio" name="frame_type" onclick="changeframe('black');"
												value="black" id="connect-3"> <label for="connect-3"></label>
										</div>
									</div>
								</div>
								<div class="detail-field">
									<div class="Disflex-box">
										<div class="collum collum-1">
											<select class="form-common" name="name_prefix" id="name_prefix">
												<option value="Shri">Shri</option>
												<option value="Smt">Smt.</option>
												<option value="Mr">Mr</option>
												<option value="Miss">Miss</option>
											</select>
										</div>
										<div class="collum collum-2">
											<input id="fst_name" required="" type="text" name="fst_name"
												placeholder="First Name" class="form-common">
										</div>
										<div class="collum collum-3">
											<input id="mid_name" type="text" name="mid_name" placeholder="Middle Name"
												class="form-common">
										</div>
										<div class="collum collum-4">
											<input id="last_name" type="text" name="last_name" placeholder="Last Name"
												class="form-common">
										</div>
									</div>
								</div>
								<div class="detail-field">
									<div class="row">
										<div class="col-sm-6">
											<h4>Date of Birth</h4>
											<div class="flex-2">
												<div class="input111">
													<select name="born_day" placeholder="Day" id="born_day"
														class="form-common">
														<option value="0">Day</option>
														<option value="01">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
														<option value="06">06</option>
														<option value="07">07</option>
														<option value="08">08</option>
														<option value="09">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="input111">
													<select name="born_month" placeholder="Month" id="born_month"
														class="form-common">
														<option value="0">Month</option>
														<option value="01">Jan</option>
														<option value="02">Feb</option>
														<option value="03">Mar</option>
														<option value="04">Apr</option>
														<option value="05">May</option>
														<option value="06">Jun</option>
														<option value="07">Jul</option>
														<option value="08">Aug</option>
														<option value="09">Sep</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="input111">
													<select name="born_year" placeholder="Year" id="born_year"
														class="form-common">
														<option value="0">Year</option>
														<option value="2022">2022</option>
														<option value="2021">2021</option>
														<option value="2020">2020</option>
														<option value="2019">2019</option>
														<option value="2018">2018</option>
														<option value="2017">2017</option>
														<option value="2016">2016</option>
														<option value="2015">2015</option>
														<option value="2014">2014</option>
														<option value="2013">2013</option>
														<option value="2012">2012</option>
														<option value="2011">2011</option>
														<option value="2010">2010</option>
														<option value="2009">2009</option>
														<option value="2008">2008</option>
														<option value="2007">2007</option>
														<option value="2006">2006</option>
														<option value="2005">2005</option>
														<option value="2004">2004</option>
														<option value="2003">2003</option>
														<option value="2002">2002</option>
														<option value="2001">2001</option>
														<option value="2000">2000</option>
														<option value="1999">1999</option>
														<option value="1998">1998</option>
														<option value="1997">1997</option>
														<option value="1996">1996</option>
														<option value="1995">1995</option>
														<option value="1994">1994</option>
														<option value="1993">1993</option>
														<option value="1992">1992</option>
														<option value="1991">1991</option>
														<option value="1990">1990</option>
														<option value="1989">1989</option>
														<option value="1988">1988</option>
														<option value="1987">1987</option>
														<option value="1986">1986</option>
														<option value="1985">1985</option>
														<option value="1984">1984</option>
														<option value="1983">1983</option>
														<option value="1982">1982</option>
														<option value="1981">1981</option>
														<option value="1980">1980</option>
														<option value="1979">1979</option>
														<option value="1978">1978</option>
														<option value="1977">1977</option>
														<option value="1976">1976</option>
														<option value="1975">1975</option>
														<option value="1974">1974</option>
														<option value="1973">1973</option>
														<option value="1972">1972</option>
														<option value="1971">1971</option>
														<option value="1970">1970</option>
														<option value="1969">1969</option>
														<option value="1968">1968</option>
														<option value="1967">1967</option>
														<option value="1966">1966</option>
														<option value="1965">1965</option>
														<option value="1964">1964</option>
														<option value="1963">1963</option>
														<option value="1962">1962</option>
														<option value="1961">1961</option>
														<option value="1960">1960</option>
														<option value="1959">1959</option>
														<option value="1958">1958</option>
														<option value="1957">1957</option>
														<option value="1956">1956</option>
														<option value="1955">1955</option>
														<option value="1954">1954</option>
														<option value="1953">1953</option>
														<option value="1952">1952</option>
														<option value="1951">1951</option>
														<option value="1950">1950</option>
														<option value="1949">1949</option>
														<option value="1948">1948</option>
														<option value="1947">1947</option>
														<option value="1946">1946</option>
														<option value="1945">1945</option>
														<option value="1944">1944</option>
														<option value="1943">1943</option>
														<option value="1942">1942</option>
														<option value="1941">1941</option>
														<option value="1940">1940</option>
														<option value="1939">1939</option>
														<option value="1938">1938</option>
														<option value="1937">1937</option>
														<option value="1936">1936</option>
														<option value="1935">1935</option>
														<option value="1934">1934</option>
														<option value="1933">1933</option>
														<option value="1932">1932</option>
														<option value="1931">1931</option>
														<option value="1930">1930</option>
														<option value="1929">1929</option>
														<option value="1928">1928</option>
														<option value="1927">1927</option>
														<option value="1926">1926</option>
														<option value="1925">1925</option>
														<option value="1924">1924</option>
														<option value="1923">1923</option>
														<option value="1922">1922</option>
														<option value="1921">1921</option>
														<option value="1920">1920</option>
														<option value="1919">1919</option>
														<option value="1918">1918</option>
														<option value="1917">1917</option>
														<option value="1916">1916</option>
														<option value="1915">1915</option>
														<option value="1914">1914</option>
														<option value="1913">1913</option>
														<option value="1912">1912</option>
														<option value="1911">1911</option>
														<option value="1910">1910</option>
														<option value="1909">1909</option>
														<option value="1908">1908</option>
														<option value="1907">1907</option>
														<option value="1906">1906</option>
														<option value="1905">1905</option>
														<option value="1904">1904</option>
														<option value="1903">1903</option>
														<option value="1902">1902</option>
														<option value="1901">1901</option>
														<option value="1900">1900</option>
														<option value="1899">1899</option>
														<option value="1898">1898</option>
														<option value="1897">1897</option>
														<option value="1896">1896</option>
														<option value="1895">1895</option>
														<option value="1894">1894</option>
														<option value="1893">1893</option>
														<option value="1892">1892</option>
														<option value="1891">1891</option>
														<option value="1890">1890</option>
														<option value="1889">1889</option>
														<option value="1888">1888</option>
														<option value="1887">1887</option>
														<option value="1886">1886</option>
														<option value="1885">1885</option>
														<option value="1884">1884</option>
														<option value="1883">1883</option>
														<option value="1882">1882</option>
														<option value="1881">1881</option>
														<option value="1880">1880</option>
														<option value="1879">1879</option>
														<option value="1878">1878</option>
														<option value="1877">1877</option>
														<option value="1876">1876</option>
														<option value="1875">1875</option>
														<option value="1874">1874</option>
														<option value="1873">1873</option>
														<option value="1872">1872</option>
														<option value="1871">1871</option>
														<option value="1870">1870</option>
														<option value="1869">1869</option>
														<option value="1868">1868</option>
														<option value="1867">1867</option>
														<option value="1866">1866</option>
														<option value="1865">1865</option>
														<option value="1864">1864</option>
														<option value="1863">1863</option>
														<option value="1862">1862</option>
														<option value="1861">1861</option>
														<option value="1860">1860</option>
														<option value="1859">1859</option>
														<option value="1858">1858</option>
														<option value="1857">1857</option>
														<option value="1856">1856</option>
														<option value="1855">1855</option>
														<option value="1854">1854</option>
														<option value="1853">1853</option>
														<option value="1852">1852</option>
														<option value="1851">1851</option>
														<option value="1850">1850</option>
														<option value="1849">1849</option>
														<option value="1848">1848</option>
														<option value="1847">1847</option>
														<option value="1846">1846</option>
														<option value="1845">1845</option>
														<option value="1844">1844</option>
														<option value="1843">1843</option>
														<option value="1842">1842</option>
														<option value="1841">1841</option>
														<option value="1840">1840</option>
														<option value="1839">1839</option>
														<option value="1838">1838</option>
														<option value="1837">1837</option>
														<option value="1836">1836</option>
														<option value="1835">1835</option>
														<option value="1834">1834</option>
														<option value="1833">1833</option>
														<option value="1832">1832</option>
														<option value="1831">1831</option>
														<option value="1830">1830</option>
														<option value="1829">1829</option>
														<option value="1828">1828</option>
														<option value="1827">1827</option>
														<option value="1826">1826</option>
														<option value="1825">1825</option>
														<option value="1824">1824</option>
														<option value="1823">1823</option>
														<option value="1822">1822</option>
														<option value="1821">1821</option>
														<option value="1820">1820</option>
													</select>
												</div>
											</div>
										</div>

										<div class="col-sm-6 padding-grid">
											<h4>Date of Demise</h4>
											<div class="flex-2">
												<div class="input111">
													<select name="death_day" placeholder="Day" id="death_day"
														class="form-common">
														<option value="0">Day</option>
														<option value="01">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
														<option value="06">06</option>
														<option value="07">07</option>
														<option value="08">08</option>
														<option value="09">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="input111">
													<select name="death_month" placeholder="Month" id="death_month"
														class="form-common">
														<option value="0">Month</option>
														<option value="01">Jan</option>
														<option value="02">Feb</option>
														<option value="03">Mar</option>
														<option value="04">Apr</option>
														<option value="05">May</option>
														<option value="06">Jun</option>
														<option value="07">Jul</option>
														<option value="08">Aug</option>
														<option value="09">Sep</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="input111">
													<select name="death_year" required="" placeholder="Year"
														id="death_year" class="form-common">
														<option value="0">Year</option>
														<option value="2050">2050</option>
														<option value="2049">2049</option>
														<option value="2048">2048</option>
														<option value="2047">2047</option>
														<option value="2046">2046</option>
														<option value="2045">2045</option>
														<option value="2044">2044</option>
														<option value="2043">2043</option>
														<option value="2042">2042</option>
														<option value="2041">2041</option>
														<option value="2040">2040</option>
														<option value="2039">2039</option>
														<option value="2038">2038</option>
														<option value="2037">2037</option>
														<option value="2036">2036</option>
														<option value="2035">2035</option>
														<option value="2034">2034</option>
														<option value="2033">2033</option>
														<option value="2032">2032</option>
														<option value="2031">2031</option>
														<option value="2030">2030</option>
														<option value="2029">2029</option>
														<option value="2028">2028</option>
														<option value="2027">2027</option>
														<option value="2026">2026</option>
														<option value="2025">2025</option>
														<option value="2024">2024</option>
														<option value="2023">2023</option>
														<option value="2022">2022</option>
														<option value="2021">2021</option>
														<option value="2020">2020</option>
														<option value="2019">2019</option>
														<option value="2018">2018</option>
														<option value="2017">2017</option>
														<option value="2016">2016</option>
														<option value="2015">2015</option>
														<option value="2014">2014</option>
														<option value="2013">2013</option>
														<option value="2012">2012</option>
														<option value="2011">2011</option>
														<option value="2010">2010</option>
														<option value="2009">2009</option>
														<option value="2008">2008</option>
														<option value="2007">2007</option>
														<option value="2006">2006</option>
														<option value="2005">2005</option>
														<option value="2004">2004</option>
														<option value="2003">2003</option>
														<option value="2002">2002</option>
														<option value="2001">2001</option>
														<option value="2000">2000</option>
														<option value="1999">1999</option>
														<option value="1998">1998</option>
														<option value="1997">1997</option>
														<option value="1996">1996</option>
														<option value="1995">1995</option>
														<option value="1994">1994</option>
														<option value="1993">1993</option>
														<option value="1992">1992</option>
														<option value="1991">1991</option>
														<option value="1990">1990</option>
														<option value="1989">1989</option>
														<option value="1988">1988</option>
														<option value="1987">1987</option>
														<option value="1986">1986</option>
														<option value="1985">1985</option>
														<option value="1984">1984</option>
														<option value="1983">1983</option>
														<option value="1982">1982</option>
														<option value="1981">1981</option>
														<option value="1980">1980</option>
														<option value="1979">1979</option>
														<option value="1978">1978</option>
														<option value="1977">1977</option>
														<option value="1976">1976</option>
														<option value="1975">1975</option>
														<option value="1974">1974</option>
														<option value="1973">1973</option>
														<option value="1972">1972</option>
														<option value="1971">1971</option>
														<option value="1970">1970</option>
														<option value="1969">1969</option>
														<option value="1968">1968</option>
														<option value="1967">1967</option>
														<option value="1966">1966</option>
														<option value="1965">1965</option>
														<option value="1964">1964</option>
														<option value="1963">1963</option>
														<option value="1962">1962</option>
														<option value="1961">1961</option>
														<option value="1960">1960</option>
														<option value="1959">1959</option>
														<option value="1958">1958</option>
														<option value="1957">1957</option>
														<option value="1956">1956</option>
														<option value="1955">1955</option>
														<option value="1954">1954</option>
														<option value="1953">1953</option>
														<option value="1952">1952</option>
														<option value="1951">1951</option>
														<option value="1950">1950</option>
														<option value="1949">1949</option>
														<option value="1948">1948</option>
														<option value="1947">1947</option>
														<option value="1946">1946</option>
														<option value="1945">1945</option>
														<option value="1944">1944</option>
														<option value="1943">1943</option>
														<option value="1942">1942</option>
														<option value="1941">1941</option>
														<option value="1940">1940</option>
														<option value="1939">1939</option>
														<option value="1938">1938</option>
														<option value="1937">1937</option>
														<option value="1936">1936</option>
														<option value="1935">1935</option>
														<option value="1934">1934</option>
														<option value="1933">1933</option>
														<option value="1932">1932</option>
														<option value="1931">1931</option>
														<option value="1930">1930</option>
														<option value="1929">1929</option>
														<option value="1928">1928</option>
														<option value="1927">1927</option>
														<option value="1926">1926</option>
														<option value="1925">1925</option>
														<option value="1924">1924</option>
														<option value="1923">1923</option>
														<option value="1922">1922</option>
														<option value="1921">1921</option>
														<option value="1920">1920</option>
														<option value="1919">1919</option>
														<option value="1918">1918</option>
														<option value="1917">1917</option>
														<option value="1916">1916</option>
														<option value="1915">1915</option>
														<option value="1914">1914</option>
														<option value="1913">1913</option>
														<option value="1912">1912</option>
														<option value="1911">1911</option>
														<option value="1910">1910</option>
														<option value="1909">1909</option>
														<option value="1908">1908</option>
														<option value="1907">1907</option>
														<option value="1906">1906</option>
														<option value="1905">1905</option>
														<option value="1904">1904</option>
														<option value="1903">1903</option>
														<option value="1902">1902</option>
														<option value="1901">1901</option>
														<option value="1900">1900</option>
														<option value="1899">1899</option>
														<option value="1898">1898</option>
														<option value="1897">1897</option>
														<option value="1896">1896</option>
														<option value="1895">1895</option>
														<option value="1894">1894</option>
														<option value="1893">1893</option>
														<option value="1892">1892</option>
														<option value="1891">1891</option>
														<option value="1890">1890</option>
														<option value="1889">1889</option>
														<option value="1888">1888</option>
														<option value="1887">1887</option>
														<option value="1886">1886</option>
														<option value="1885">1885</option>
														<option value="1884">1884</option>
														<option value="1883">1883</option>
														<option value="1882">1882</option>
														<option value="1881">1881</option>
														<option value="1880">1880</option>
														<option value="1879">1879</option>
														<option value="1878">1878</option>
														<option value="1877">1877</option>
														<option value="1876">1876</option>
														<option value="1875">1875</option>
														<option value="1874">1874</option>
														<option value="1873">1873</option>
														<option value="1872">1872</option>
														<option value="1871">1871</option>
														<option value="1870">1870</option>
														<option value="1869">1869</option>
														<option value="1868">1868</option>
														<option value="1867">1867</option>
														<option value="1866">1866</option>
														<option value="1865">1865</option>
														<option value="1864">1864</option>
														<option value="1863">1863</option>
														<option value="1862">1862</option>
														<option value="1861">1861</option>
														<option value="1860">1860</option>
														<option value="1859">1859</option>
														<option value="1858">1858</option>
														<option value="1857">1857</option>
														<option value="1856">1856</option>
														<option value="1855">1855</option>
														<option value="1854">1854</option>
														<option value="1853">1853</option>
														<option value="1852">1852</option>
														<option value="1851">1851</option>
														<option value="1850">1850</option>
														<option value="1849">1849</option>
														<option value="1848">1848</option>
														<option value="1847">1847</option>
														<option value="1846">1846</option>
														<option value="1845">1845</option>
														<option value="1844">1844</option>
														<option value="1843">1843</option>
														<option value="1842">1842</option>
														<option value="1841">1841</option>
														<option value="1840">1840</option>
														<option value="1839">1839</option>
														<option value="1838">1838</option>
														<option value="1837">1837</option>
														<option value="1836">1836</option>
														<option value="1835">1835</option>
														<option value="1834">1834</option>
														<option value="1833">1833</option>
														<option value="1832">1832</option>
														<option value="1831">1831</option>
														<option value="1830">1830</option>
														<option value="1829">1829</option>
														<option value="1828">1828</option>
														<option value="1827">1827</option>
														<option value="1826">1826</option>
														<option value="1825">1825</option>
														<option value="1824">1824</option>
														<option value="1823">1823</option>
														<option value="1822">1822</option>
														<option value="1821">1821</option>
														<option value="1820">1820</option>
													</select>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="detail-field">
									<h4>Select Package</h4>
									<div class="row">
										<div class="col-sm-4 padding-pack">
											<div class="input">
												<select required="" class="form-common" name="package_name"
													id="package_name">
													<?php
    													$query="select * from add_package where Package_Type ='obituary'";
    													$execute=mysqli_query($connect,$query);
    													while($read=mysqli_fetch_array($execute))
  													{
  													?>
													
													<option value="<?Php echo $read["Package_Amount"];?>"><?Php echo $read["Package_Title"];?></option>
													
													<?php $count++; } ?>
												</select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input">
												<select class="form-common" name="featured_name" id="featured_name">
													<option value="no">Home Page Featured</option>
													<?php
    													$query="select * from add_package where Package_Type ='featured'";
    													$execute=mysqli_query($connect,$query);
    													$count=1;
    													while($read=mysqli_fetch_array($execute))
  													{
  													?>
													<option value="<?Php echo $read["Package_Amount"];?>"><?Php echo $read["Package_Title"];?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input">
												<select class="form-common" name="postuploadby" id="featured_name">
													<option value="" required>Post Uploader Realtion</option>
													<option value="father">Father</option>
													<option value="mother">Mother</option>
													<option value="son">Son</option>
													<option value="daughter">Daughter</option>
													<option value="brother">Brother</option>
													<option value="sister">Sister</option>
													<option value="husband">Husband</option>
													<option value="wife">Wife</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="detail-field">
									<h4>Celebrity</h4>
									<div class="row">
										<div class="col-sm-6 padding-pack">
											<div class="input">
												<select required="" class="form-common" name="celebrity"
													id="package_name">
													<option value="">----Select----</option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
												</select>
											</div>
										</div>
									</div>
								</div> -->
								
								<div class="detail-field">
									<h4>Biography</h4>
									<div class="row">
										<div class="col-sm-12 padding-pack">
										<div class="input">
											<textarea name="biography" id="editor2"  placeholder="Add Bio"></textarea>
											
											<script>

                                        CKEDITOR.replace('editor2');
                                    </script>
									</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="common-btn text-center paddingB-5">
						<!-- <button  type="button">Next</button> -->
						<input type="submit" name="next" value="Next" id="medianext123" class="nextBtn">
					</div>
					</div>
				</div>
			</form>

				<?php
if(isset($_POST["next"]))
{
//$_SESSION["useruploadimage"]=$_POST["userupload"];
$_SESSION["title"]=$_POST["obituary_title"];
$_SESSION["frames"]=$_POST["frame_type"];
$_SESSION["nameprifix"]=$_POST["name_prefix"];
$_SESSION["firstname"]=$_POST["fst_name"];
$_SESSION["middlename"]=$_POST["mid_name"];	
$_SESSION["lastname"]=$_POST["last_name"];
$_SESSION["bornday"]=$_POST["born_day"];
$_SESSION["bornmonth"]=$_POST["born_month"];
$_SESSION["bornyear"]=$_POST["born_year"];
$_SESSION["deathday"]=$_POST["death_day"];
$_SESSION["deathmonth"]=$_POST["death_month"];
$_SESSION["deathyear"]=$_POST["death_year"];
$_SESSION["packagenames"]=$_POST["package_name"];
$_SESSION["featuredname"]=$_POST["featured_name"];
$_SESSION["uploaderrelation"]=$_POST["postuploadby"];
$_SESSION["celbrity"]=$_POST["celebrity"];
$_SESSION["biohere"]=$_POST["biography"];

$_SESSION['useruploadimage1'] = $_FILES["userupload"]["name"];
$_SESSION['useruploadimage1_tmp']=$_FILES["userupload"]["tmp_name"];
echo $filename=$_SESSION['useruploadimage1'];
echo $filetemp=$_SESSION['useruploadimage1_tmp'];
move_uploaded_file($filetemp,"admin/obituary_imgs/".$filename);
$_SESSION["totalcount"]=$_POST["package_name"] + $_POST["featured_name"];



  echo"<script>window.location.href = 'post-obituary_login.php'</script>";
}
					?>



			</div>

			<!-- step 2 -->
			<div class="setup-content" id="step-2" style="display: none;">
				<div class="row">
					<div class="col-sm-12 ">

						<!-- new HTML  -->
						<div class="bg-white paddingTB">
							<h2 class="size24 color-orange font-weight400">Login Information</h2>
							<div class="login-Detail">
								<div class="flex-Display">
									<div class="faceBook ">
										<a onclick="postForm('fb');" style="cursor: pointer;" class="v-middle"><i
												class="fab fa-facebook-square v-middle"></i> Login Via Facebook</a>
									</div>
									<div class="gmail">

										<a onclick="postForm('gp');" style="cursor: pointer;" class="v-middle"><img
												src="frontend/images/google-login.png" class="googl"> Login Via
											Google</a>
									</div>

									<!--    <div class="mobile-login">
                    <input type="number" placeholder="Enter Mobile Number" class="form-common">
                    <div class="common-btn text-center paddingB-5">
                      <button class="nextBtn" id="step2-btn" type="button">Send Otp</button>
                    </div>
                  </div> -->
								</div>

							</div>
						</div>

						<!-- END Html -->


					</div>
					<div class="col-sm-4 " style="display: none;">
						<div class="bg-white right-padding">
							<h2 class="size20 font-weight400">Payment Details</h2>
							<table width="100%%" border="0" cellspacing="0" cellpadding="0" class="table table-50">
								<tbody>
									<tr>
										<td align="left">Obituary Plan<br> <small>10 Year Plan</small></td>
										<td align="right"><span class="font-weight400 v-middle">&#8377;</span>11,000
										</td>
									</tr>
									<tr>
										<td align="left">Home Page Featured<br> <small>one Week</small> </td>
										<td align="right"><span class="font-weight400 v-middle">&#8377;</span>7000</td>
									</tr>
									<tr>
										<td align="left">GST </td>
										<td align="right"><span class="font-weight400 v-middle">&#8377;</span>1800</td>
									</tr>
									<tr>
										<td align="left"></td>
										<td align="right">
											<p>You Pay</p>
											<strong class="size24 color-orange"><span
													class="size24 font-weight400 v-middle">&#8377;</span>
												19,800</strong>
										</td>
									</tr>
								</tbody>
							</table>
							<!--<div class="common-btn text-center paddingB-5">
                  <button class="" type="button">Proceed</button>
                </div>-->
						</div>
					</div>
				</div>

			</div>
			<!-- Box 3 -->
			<div class="setup-content confirmpage" id="step-3" style="display: none;">
				<div class="row" id="step-31">
					<div class="col-sm-4 pull-right width-100">
						<div class="bg-white right-padding" id="step31">
							<h2 class="size20 font-weight400">Payment Details</h2>
							<table width="100%%" border="0" cellspacing="0" cellpadding="0" class="table table-50">
								<tbody>
									<tr>
										<td align="left">Obituary Plan<br> <small>
												<pre
													class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e27b5a-trace').style.display = (document.getElementById('cakeErr5fb64d9e27b5a-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: package_single [<b>APP/View/Pages/postobituary.ctp</b>, line <b>758</b>]<div id="cakeErr5fb64d9e27b5a-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e27b5a-code').style.display = (document.getElementById('cakeErr5fb64d9e27b5a-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e27b5a-context').style.display = (document.getElementById('cakeErr5fb64d9e27b5a-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e27b5a-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">tbody</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">tr</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="left"&gt;Obituary&nbsp;Plan&lt;br&gt;&nbsp;&lt;small&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$package_single</span><span style="color: #007700">[</span><span style="color: #DD0000">'Package'</span><span style="color: #007700">][</span><span style="color: #DD0000">'title'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/small&gt;&lt;/td&gt;</span></code></span></pre>
												<pre id="cakeErr5fb64d9e27b5a-context" class="cake-context"
													style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
												<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 758
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
						</div>
						</pre></small></td>
						<td align="right"><span class="font-weight400 v-middle">&#8377;</span>
							<pre
								class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e28079-trace').style.display = (document.getElementById('cakeErr5fb64d9e28079-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: package_single [<b>APP/View/Pages/postobituary.ctp</b>, line <b>759</b>]<div id="cakeErr5fb64d9e28079-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e28079-code').style.display = (document.getElementById('cakeErr5fb64d9e28079-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e28079-context').style.display = (document.getElementById('cakeErr5fb64d9e28079-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e28079-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">tr</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="left"&gt;Obituary&nbsp;Plan&lt;br&gt;&nbsp;&lt;small&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$package_single</span><span style="color: #007700">[</span><span style="color: #DD0000">'Package'</span><span style="color: #007700">][</span><span style="color: #DD0000">'title'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/small&gt;&lt;/td&gt;</span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="right"&gt;&lt;span&nbsp;class="font-weight400&nbsp;v-middle"&gt;&amp;#8377;&lt;/span&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$package_single</span><span style="color: #007700">[</span><span style="color: #DD0000">'Package'</span><span style="color: #007700">][</span><span style="color: #DD0000">'amount'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/td&gt;</span></code></span></pre>
							<pre id="cakeErr5fb64d9e28079-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
							<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 759
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
					</div>
					</pre>
					</td>
					</tr>
					<tr>
						<td align="left">GST </td>
						<td align="right"><span class="font-weight400 v-middle">&#8377;</span>0</td>
					</tr>
					<tr>
						<td align="left"></td>
						<td align="right">
							<p>You Pay</p>
							<strong class="size24 color-orange"><span
									class="size24 font-weight400 v-middle">&#8377;</span>
								<pre
									class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e28420-trace').style.display = (document.getElementById('cakeErr5fb64d9e28420-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>775</b>]<div id="cakeErr5fb64d9e28420-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e28420-code').style.display = (document.getElementById('cakeErr5fb64d9e28420-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e28420-context').style.display = (document.getElementById('cakeErr5fb64d9e28420-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e28420-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">td&nbsp;align</span><span style="color: #007700">=</span><span style="color: #DD0000">"right"</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">p</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">You&nbsp;Pay</span><span style="color: #007700">&lt;/</span><span style="color: #0000BB">p</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;strong&nbsp;class="size24&nbsp;color-orange"&gt;&lt;span&nbsp;class="size24&nbsp;font-weight400&nbsp;v-middle"&gt;&amp;#8377;&lt;/span&gt;&nbsp;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/strong&gt;</span></code></span></pre>
								<pre id="cakeErr5fb64d9e28420-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
								<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 775
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
				</div>
				</pre></strong>
				</td>
				</tr>
				</tbody>
				</table>

			</div>
		</div>
		<div class="col-sm-8 pull-left">
			<div class="bg-white paddingTB minHeight">
				<h2 class="size24 color-orange font-weight400">Confirmed Plan</h2>
				<ul class="listed">
					<li>Obituary Listing
						<pre
							class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e28810-trace').style.display = (document.getElementById('cakeErr5fb64d9e28810-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: package_single [<b>APP/View/Pages/postobituary.ctp</b>, line <b>787</b>]<div id="cakeErr5fb64d9e28810-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e28810-code').style.display = (document.getElementById('cakeErr5fb64d9e28810-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e28810-context').style.display = (document.getElementById('cakeErr5fb64d9e28810-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e28810-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">h2&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"size24&nbsp;color-orange&nbsp;font-weight400"</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">Confirmed&nbsp;Plan</span><span style="color: #007700">&lt;/</span><span style="color: #0000BB">h2</span><span style="color: #007700">&gt;&nbsp;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">ul&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"listed"</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Obituary&nbsp;Listing&nbsp;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$package_single</span><span style="color: #007700">[</span><span style="color: #DD0000">'Package'</span><span style="color: #007700">][</span><span style="color: #DD0000">'title'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/li&gt;</span></code></span></pre>
						<pre id="cakeErr5fb64d9e28810-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
						<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 787
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
			</div>
			</pre>
			</li>
			</ul>
			<div class="box-flex">
				<div class="anchor-btn text-center paddingT-20">
					<a href="javascript:void(0);" onclick="goBack();"><strong>Update Changes</strong></a>
				</div>
				<div class="common-btn text-center paddingB-5">
					<button class="nextBtn" onclick="$('#modalbtn').click();">Proceed</button>
					<a id="modalbtn" data-toggle="modal" data-target="#myModal-pay" type="button" class="nextBtn"></a>
				</div>

			</div>
		</div>

		</div>


		</div>
		</div>

		</div>
	</section>

	<!-- Footer section start here -->
	<?php include('footer.php'); ?>
	<!-- Footer section End here -->


	<!-- New model login detail popup Start here -->
	<div class="modal fade popCustom" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="modal-body">
					<section id="tabs" class="project-tab">
						<nav>
							<div class="nav nav-tabs nav-fill customTab" id="nav-tab" role="tablist">
								<a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home"
									role="tab" aria-controls="nav-home" aria-selected="true"> Register Now</a>
								<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
									role="tab" aria-controls="nav-profile" aria-selected="false">Login</a>
								<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
									role="tab" aria-controls="nav-contact" aria-selected="false">Social login</a>
							</div>
						</nav>
						<div class="tab-content marginB-20" id="nav-tabContent">
							<div class="tab-pane fade active in" id="nav-home" role="tabpanel"
								aria-labelledby="nav-home-tab">
								Register Now
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel"
								aria-labelledby="nav-profile-tab">
								Login
							</div>
							<div class="tab-pane fade text-center" id="nav-contact" role="tabpanel"
								aria-labelledby="nav-contact-tab">
								<div class="gmail">
									<a href="javascript:void()" class="v-middle"><i class="fab ga-gmail v-middle"></i>
										Login via gmail</a>
								</div>
								<div class="faceBook">
									<a href="javascript:void()" class="v-middle"><i
											class="fab fa-facebook-square v-middle"></i> Login via Facebook</a>
								</div>

							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<!-- New model login detail popup End here -->
	<!-- paytm form -->
	<form id="checkout-form" method="post" action="https://antimnivas.com/pages/payment_post">

		<table border="1" class="table" style="display: none;">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID:*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
							value="<pre class=" cake-error"><a href="javascript:void(0);"
							onclick="document.getElementById('cakeErr5fb64d9e28d30-trace').style.display = (document.getElementById('cakeErr5fb64d9e28d30-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b>
							(8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>901</b>]
						<div id="cakeErr5fb64d9e28d30-trace" class="cake-stack-trace" style="display: none;"><a
								href="javascript:void(0);"
								onclick="document.getElementById('cakeErr5fb64d9e28d30-code').style.display = (document.getElementById('cakeErr5fb64d9e28d30-code').style.display == 'none' ? '' : 'none')">Code</a>
							<a href="javascript:void(0);"
								onclick="document.getElementById('cakeErr5fb64d9e28d30-context').style.display = (document.getElementById('cakeErr5fb64d9e28d30-context').style.display == 'none' ? '' : 'none')">Context</a>
							<pre id="cakeErr5fb64d9e28d30-code" class="cake-code-dump"
								style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">td</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">input&nbsp;&nbsp;&nbsp;id</span><span style="color: #007700">=</span><span style="color: #DD0000">"ORDER_ID"&nbsp;</span><span style="color: #0000BB">tabindex</span><span style="color: #007700">=</span><span style="color: #DD0000">"1"&nbsp;</span><span style="color: #0000BB">maxlength</span><span style="color: #007700">=</span><span style="color: #DD0000">"20"&nbsp;</span><span style="color: #0000BB">size</span><span style="color: #007700">=</span><span style="color: #DD0000">"20"</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name</span><span style="color: #007700">=</span><span style="color: #DD0000">"ORDER_ID"&nbsp;</span><span style="color: #0000BB">autocomplete</span><span style="color: #007700">=</span><span style="color: #DD0000">"off"</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'ORDER_ID'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;</span></code></span></pre>
							<pre id="cakeErr5fb64d9e28d30-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
							<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 901
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
						</div>
						</pre>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID :*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off"
							value="<pre class=" cake-error"><a href="javascript:void(0);"
							onclick="document.getElementById('cakeErr5fb64d9e2925b-trace').style.display = (document.getElementById('cakeErr5fb64d9e2925b-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b>
							(8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>907</b>]
						<div id="cakeErr5fb64d9e2925b-trace" class="cake-stack-trace" style="display: none;"><a
								href="javascript:void(0);"
								onclick="document.getElementById('cakeErr5fb64d9e2925b-code').style.display = (document.getElementById('cakeErr5fb64d9e2925b-code').style.display == 'none' ? '' : 'none')">Code</a>
							<a href="javascript:void(0);"
								onclick="document.getElementById('cakeErr5fb64d9e2925b-context').style.display = (document.getElementById('cakeErr5fb64d9e2925b-context').style.display == 'none' ? '' : 'none')">Context</a>
							<pre id="cakeErr5fb64d9e2925b-code" class="cake-code-dump"
								style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">td</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">2</span><span style="color: #007700">&lt;/</span><span style="color: #0000BB">td</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">td</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">label</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">CUSTID&nbsp;</span><span style="color: #007700">:*&lt;/</span><span style="color: #0000BB">label</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">td</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;&lt;input&nbsp;&nbsp;id="CUST_ID"&nbsp;tabindex="2"&nbsp;maxlength="12"&nbsp;size="12"&nbsp;name="CUST_ID"&nbsp;autocomplete="off"&nbsp;value="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'CUST_ID'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;&lt;/td&gt;</span></code></span></pre>
							<pre id="cakeErr5fb64d9e2925b-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
							<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 907
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
						</div>
						</pre>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID"
							autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
							autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Amount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<pre class="
							cake-error"><a href="javascript:void(0);"
							onclick="document.getElementById('cakeErr5fb64d9e29785-trace').style.display = (document.getElementById('cakeErr5fb64d9e29785-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b>
							(8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>926</b>]
						<div id="cakeErr5fb64d9e29785-trace" class="cake-stack-trace" style="display: none;"><a
								href="javascript:void(0);"
								onclick="document.getElementById('cakeErr5fb64d9e29785-code').style.display = (document.getElementById('cakeErr5fb64d9e29785-code').style.display == 'none' ? '' : 'none')">Code</a>
							<a href="javascript:void(0);"
								onclick="document.getElementById('cakeErr5fb64d9e29785-context').style.display = (document.getElementById('cakeErr5fb64d9e29785-context').style.display == 'none' ? '' : 'none')">Context</a>
							<pre id="cakeErr5fb64d9e29785-code" class="cake-code-dump"
								style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">td</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">input&nbsp;&nbsp;title</span><span style="color: #007700">=</span><span style="color: #DD0000">"TXN_AMOUNT"&nbsp;</span><span style="color: #0000BB">tabindex</span><span style="color: #007700">=</span><span style="color: #DD0000">"10"</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type</span><span style="color: #007700">=</span><span style="color: #DD0000">"text"&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">=</span><span style="color: #DD0000">"TXN_AMOUNT"</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&nbsp;&gt;</span></code></span></pre>
							<pre id="cakeErr5fb64d9e29785-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
							<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 926
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
						</div>
						</pre>" >
					</td>
				</tr>
			</tbody>
		</table>

	</form>
	<!-- patm form end -->


	<!-- payment choose model-->
	<!-- <div class="modal fade" id="payment-modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header" style="background: #ff7e26c9;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pay With UPI,Net-Banking, Credit ,Debit Card, Apps</h4>
      </div>
        <div class="modal-body">
      <center>
      <h3>Instant Payment Gateway</h3>
        <button class="btn btn-primary" onclick="document.getElementById('checkout-form').submit();">Paytm</button>
        <a class="btn btn-primary" href="/pages/razorpay?amt=<pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e29cd3-trace').style.display = (document.getElementById('cakeErr5fb64d9e29cd3-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>948</b>]<div id="cakeErr5fb64d9e29cd3-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e29cd3-code').style.display = (document.getElementById('cakeErr5fb64d9e29cd3-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e29cd3-context').style.display = (document.getElementById('cakeErr5fb64d9e29cd3-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e29cd3-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">h3</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">Instant&nbsp;Payment&nbsp;Gateway</span><span style="color: #007700">&lt;/</span><span style="color: #0000BB">h3</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">button&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"btn&nbsp;btn-primary"&nbsp;</span><span style="color: #0000BB">onclick</span><span style="color: #007700">=</span><span style="color: #DD0000">"document.getElementById('checkout-form').submit();"</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">Paytm</span><span style="color: #007700">&lt;/</span><span style="color: #0000BB">button</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class="btn&nbsp;btn-primary"&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&nbsp;&gt;Razorpay&lt;/a&gt;</span></code></span></pre><pre id="cakeErr5fb64d9e29cd3-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre><pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 948
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre></div></pre>" >Razorpay</a>
        <br><br>
    </center>
        </div>
       </div>
    </div>
  </div>-->


	<!--<div class="modal fade" id="myModal-pay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
	<!--   <div class="modal-dialog" role="document">-->
	<!--   <div class="modal-content">-->
	<!--     <div class="modal-header">-->
	<!--     <p class="modal-title size22" id="myModalLabel">Payment Method</p>-->
	<!--     <button type="button" class="close" data-dismiss="modal">×</button>-->
	<!--     </div>-->

	<!--     <div class="modal-body">-->

	<!--           <div class="panel with-nav-tabs panel-default">-->
	<!--           <div class="panel-heading">-->
	<!--                   <ul class="nav nav-tabs">-->
	<!--                       <li class="active"><a href="#tab1default" data-toggle="tab">Paytm</a></li>-->
	<!--                       <li><a href="#tab2default" data-toggle="tab">Razorpay</a></li>-->
	<!--                   </ul>-->
	<!--           </div>-->
	<!--           <div class="panel-body">-->
	<!--               <div class="tab-content">-->
	<!--                   <div class="tab-pane fade in active" id="tab1default">-->

	<!--                       <div class="flex-2 paymentNew">-->
	<!--                           <div class="payment-left">-->
	<!--                             <img src="/frontend/images/paytm-icon.jpg" alt="paytm" />-->
	<!--                         </div>-->
	<!--                           <div class="payment-right">-->

	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-1.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                  <a href="javascript:void(0);" onclick="document.getElementById('checkout-form').submit();">-->
	<!--                                  <p class="size22">Card</p>-->
	<!--                                      <p class="size14">Visa, MasterCard, Rupay & More</p>-->
	<!--                                 </a>-->
	<!--                             </div>-->
	<!--                           </div><!-- End repaet Divv -->

	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-2.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                <a href="javascript:void(0);" onclick="document.getElementById('checkout-form').submit();">-->
	<!--                                <p class="size22">Netbanking</p>-->
	<!--                                  <p class="size14">All Indian banks</p>-->
	<!--                               </a>-->
	<!--                             </div>-->
	<!--                           </div><!-- End repaet Divv -->

	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-3.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                <a href="javascript:void(0);" onclick="document.getElementById('checkout-form').submit();">-->
	<!--                                 <p class="size22">Wallet</p>-->
	<!--                                 <p class="size14">Mobikwik & More</p>-->
	<!--                                </a>-->
	<!--                             </div>-->
	<!--                           </div><!-- End repaet Divv -->

	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-4.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                  <a href="javascript:void(0);" onclick="document.getElementById('checkout-form').submit();">-->
	<!--                                  <p class="size22">UPI/QR</p>-->
	<!--                                      <p class="size14">Instant payment using UPI App</p>-->
	<!--                               </a>-->
	<!--                             </div>-->
	<!--                           </div><!-End repaet Divv -->
	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-5.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                <a href="javascript:void(0);" onclick="document.getElementById('checkout-form').submit();">-->
	<!--                                 <p class="size22">Pay Later</p>-->
	<!--                                 <p class="size14">Pay later using ePay Later and ICICI Bank PayLater</p>-->
	<!--                                </a>-->
	<!--                             </div>-->
	<!--                           </div><!-End repaet Divv -->


	<!--                         </div>-->



	<!--                       </div>-->

	<!--                      <div class="paytmbtn text-right">-->
	<!--                               <button class="btn btn-primary" onclick="document.getElementById('checkout-form').submit();">Pay</button>-->

	<!--                           </div>-->

	<!--                   </div>-->
	<!--                   <div class="tab-pane fade" id="tab2default">-->


	<!--                       <div class="flex-2 paymentNew">-->
	<!--                           <div class="payment-left">-->
	<!--                             <img src="/frontend/images/roz-pay.jpg" alt="paytm" />-->
	<!--                         </div>-->
	<!--                           <div class="payment-right">-->

	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-1.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                  <a href="/pages/razorpay?amt=<pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2a208-trace').style.display = (document.getElementById('cakeErr5fb64d9e2a208-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>1064</b>]<div id="cakeErr5fb64d9e2a208-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2a208-code').style.display = (document.getElementById('cakeErr5fb64d9e2a208-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2a208-context').style.display = (document.getElementById('cakeErr5fb64d9e2a208-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e2a208-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-1.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;--&gt;</span></code></span></pre><pre id="cakeErr5fb64d9e2a208-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre><pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1064
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre></div></pre>">-->
	<!--                                  <p class="size22">Card</p>-->
	<!--                                      <p class="size14">Visa, MasterCard, Rupay & More</p>-->
	<!--                                 </a>-->
	<!--                             </div>-->
	<!--                           </div><!-End repaet Divv -->

	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-2.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                <a href="/pages/razorpay?amt=<pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2a73b-trace').style.display = (document.getElementById('cakeErr5fb64d9e2a73b-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>1075</b>]<div id="cakeErr5fb64d9e2a73b-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2a73b-code').style.display = (document.getElementById('cakeErr5fb64d9e2a73b-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2a73b-context').style.display = (document.getElementById('cakeErr5fb64d9e2a73b-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e2a73b-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-2.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;--&gt;</span></code></span></pre><pre id="cakeErr5fb64d9e2a73b-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre><pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1075
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre></div></pre>">-->
	<!--                                <p class="size22">Netbanking</p>-->
	<!--                                  <p class="size14">All Indian banks</p>-->
	<!--                               </a>-->
	<!--                             </div>-->
	<!--                           </div><!-End repaet Divv -->

	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-3.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                <a href="/pages/razorpay?amt=<pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2ac7e-trace').style.display = (document.getElementById('cakeErr5fb64d9e2ac7e-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>1086</b>]<div id="cakeErr5fb64d9e2ac7e-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2ac7e-code').style.display = (document.getElementById('cakeErr5fb64d9e2ac7e-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2ac7e-context').style.display = (document.getElementById('cakeErr5fb64d9e2ac7e-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e2ac7e-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-3.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;--&gt;</span></code></span></pre><pre id="cakeErr5fb64d9e2ac7e-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre><pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1086
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre></div></pre>">-->
	<!--                                 <p class="size22">Wallet</p>-->
	<!--                                 <p class="size14">Mobikwik & More</p>-->
	<!--                                </a>-->
	<!--                             </div>-->
	<!--                           </div><!-End repaet Divv -->

	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-4.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                  <a href="/pages/razorpay?amt=<pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2b1ad-trace').style.display = (document.getElementById('cakeErr5fb64d9e2b1ad-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>1097</b>]<div id="cakeErr5fb64d9e2b1ad-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2b1ad-code').style.display = (document.getElementById('cakeErr5fb64d9e2b1ad-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2b1ad-context').style.display = (document.getElementById('cakeErr5fb64d9e2b1ad-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e2b1ad-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-4.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;--&gt;</span></code></span></pre><pre id="cakeErr5fb64d9e2b1ad-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre><pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1097
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre></div></pre>">-->
	<!--                                  <p class="size22">UPI/QR</p>-->
	<!--                                      <p class="size14">Instant payment using UPI App</p>-->
	<!--                               </a>-->
	<!--                             </div>-->
	<!--                           </div><!-End repaet Divv -->
	<!-- repeat Div -->
	<!--                             <div class="flex-2 inner-31">-->
	<!--                               <div class="box-21"><img src="/frontend/images/pay-icon-5.jpg" alt="payment icon"></div>-->
	<!--                               <div class="box-22">-->
	<!--                                <a href="/pages/razorpay?amt=<pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2b5fa-trace').style.display = (document.getElementById('cakeErr5fb64d9e2b5fa-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>1107</b>]<div id="cakeErr5fb64d9e2b5fa-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2b5fa-code').style.display = (document.getElementById('cakeErr5fb64d9e2b5fa-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2b5fa-context').style.display = (document.getElementById('cakeErr5fb64d9e2b5fa-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e2b5fa-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-5.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;--&gt;</span></code></span></pre><pre id="cakeErr5fb64d9e2b5fa-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre><pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1107
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre></div></pre>">-->
	<!--                                 <p class="size22">Pay Later</p>-->
	<!--                                 <p class="size14">Pay later using ePay Later and ICICI Bank PayLater</p>-->
	<!--                                </a>-->
	<!--                             </div>-->
	<!--                           </div><!-End repaet Divv -->

	<!--                         </div>-->



	<!--                       </div>-->

	<!--                           <div class="razorpaybutton text-right">-->
	<!--                                 <a class="btn btn-primary" href="/pages/razorpay?amt=<pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2b996-trace').style.display = (document.getElementById('cakeErr5fb64d9e2b996-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>, line <b>1121</b>]<div id="cakeErr5fb64d9e2b996-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2b996-code').style.display = (document.getElementById('cakeErr5fb64d9e2b996-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr5fb64d9e2b996-context').style.display = (document.getElementById('cakeErr5fb64d9e2b996-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr5fb64d9e2b996-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"razorpaybutton&nbsp;text-right"</span><span style="color: #007700">&gt;--&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class="btn&nbsp;btn-primary"&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&nbsp;&gt;Pay&lt;/a&gt;--&gt;</span></code></span></pre><pre id="cakeErr5fb64d9e2b996-context" class="cake-context" style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre><pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1121
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre></div></pre>" >Pay</a>-->
	<!--                           </div>-->

	<!--                   </div>-->


	<!--               </div>-->
	<!--           </div>-->
	<!--       </div>-->




	<!--     </div>-->

	<!--   </div>-->
	<!--   </div>-->
	<!-- </div>-->


	<div class="modal fade" id="myModal-pay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<p class="modal-title size22" id="myModalLabel">Payment Method</p>

					<button type="button" class="close" data-dismiss="modal">×</button>
				</div>
				<div class="modal-body">
					<div class="paymentNew">
						<div class="payment-right">
							<!-- repeat Div -->
							<div class="flex-2 inner-31">
								<div class="box-21"><img src="frontend/images/paytm-white.jpg" alt="payment icon"></div>
								<div class="box-22">
									<a href="javascript:void(0);"
										onclick="document.getElementById('checkout-form').submit();">
										<p class="size22">Paytm</p>
									</a>
								</div>
							</div><!-- End repaet Divv -->

							<!-- repeat Div -->
							<div class="flex-2 inner-31">
								<div class="box-21"><img src="frontend/images/pay-icon-1.jpg" alt="payment icon"></div>
								<div class="box-22">
									<a href="publish-obituary3ea2.html?amt=<pre%20class=" cake-error"><a
											href="javascript:void(0);"
											onclick="document.getElementById('cakeErr5fb64d9e2bd21-trace').style.display = (document.getElementById('cakeErr5fb64d9e2bd21-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b>
											(8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>,
										line <b>1166</b>]<div id="cakeErr5fb64d9e2bd21-trace" class="cake-stack-trace"
											style="display: none;"><a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2bd21-code').style.display = (document.getElementById('cakeErr5fb64d9e2bd21-code').style.display == 'none' ? '' : 'none')">Code</a>
											<a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2bd21-context').style.display = (document.getElementById('cakeErr5fb64d9e2bd21-context').style.display == 'none' ? '' : 'none')">Context</a>
											<pre id="cakeErr5fb64d9e2bd21-code" class="cake-code-dump"
												style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-1.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;</span></code></span></pre>
											<pre id="cakeErr5fb64d9e2bd21-context" class="cake-context"
												style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
											<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1166
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
										</div>
										</pre>">
										<p class="size22">Card</p>
										<p class="size14">Visa, MasterCard, Rupay & More</p>
									</a>
								</div>
							</div><!-- End repaet Divv -->

							<!-- repeat Div -->
							<div class="flex-2 inner-31">
								<div class="box-21"><img src="frontend/images/pay-icon-2.jpg" alt="payment icon"></div>
								<div class="box-22">
									<a href="publish-obituary3ea2.html?amt=<pre%20class=" cake-error"><a
											href="javascript:void(0);"
											onclick="document.getElementById('cakeErr5fb64d9e2c089-trace').style.display = (document.getElementById('cakeErr5fb64d9e2c089-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b>
											(8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>,
										line <b>1177</b>]<div id="cakeErr5fb64d9e2c089-trace" class="cake-stack-trace"
											style="display: none;"><a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2c089-code').style.display = (document.getElementById('cakeErr5fb64d9e2c089-code').style.display == 'none' ? '' : 'none')">Code</a>
											<a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2c089-context').style.display = (document.getElementById('cakeErr5fb64d9e2c089-context').style.display == 'none' ? '' : 'none')">Context</a>
											<pre id="cakeErr5fb64d9e2c089-code" class="cake-code-dump"
												style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-2.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;</span></code></span></pre>
											<pre id="cakeErr5fb64d9e2c089-context" class="cake-context"
												style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
											<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1177
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
										</div>
										</pre>">
										<p class="size22">Netbanking</p>
										<p class="size14">All Indian banks</p>
									</a>
								</div>
							</div><!-- End repaet Divv -->

							<!-- repeat Div -->
							<div class="flex-2 inner-31">
								<div class="box-21"><img src="frontend/images/pay-icon-3.jpg" alt="payment icon"></div>
								<div class="box-22">
									<a href="publish-obituary3ea2.html?amt=<pre%20class=" cake-error"><a
											href="javascript:void(0);"
											onclick="document.getElementById('cakeErr5fb64d9e2c3e1-trace').style.display = (document.getElementById('cakeErr5fb64d9e2c3e1-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b>
											(8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>,
										line <b>1188</b>]<div id="cakeErr5fb64d9e2c3e1-trace" class="cake-stack-trace"
											style="display: none;"><a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2c3e1-code').style.display = (document.getElementById('cakeErr5fb64d9e2c3e1-code').style.display == 'none' ? '' : 'none')">Code</a>
											<a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2c3e1-context').style.display = (document.getElementById('cakeErr5fb64d9e2c3e1-context').style.display == 'none' ? '' : 'none')">Context</a>
											<pre id="cakeErr5fb64d9e2c3e1-code" class="cake-code-dump"
												style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-3.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;</span></code></span></pre>
											<pre id="cakeErr5fb64d9e2c3e1-context" class="cake-context"
												style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
											<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1188
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
										</div>
										</pre>">
										<p class="size22">Wallet</p>
										<p class="size14">Mobikwik & More</p>
									</a>
								</div>
							</div><!-- End repaet Divv -->

							<!-- repeat Div -->
							<div class="flex-2 inner-31">
								<div class="box-21"><img src="frontend/images/pay-icon-4.jpg" alt="payment icon"></div>
								<div class="box-22">
									<a href="publish-obituary3ea2.html?amt=<pre%20class=" cake-error"><a
											href="javascript:void(0);"
											onclick="document.getElementById('cakeErr5fb64d9e2c742-trace').style.display = (document.getElementById('cakeErr5fb64d9e2c742-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b>
											(8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>,
										line <b>1199</b>]<div id="cakeErr5fb64d9e2c742-trace" class="cake-stack-trace"
											style="display: none;"><a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2c742-code').style.display = (document.getElementById('cakeErr5fb64d9e2c742-code').style.display == 'none' ? '' : 'none')">Code</a>
											<a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2c742-context').style.display = (document.getElementById('cakeErr5fb64d9e2c742-context').style.display == 'none' ? '' : 'none')">Context</a>
											<pre id="cakeErr5fb64d9e2c742-code" class="cake-code-dump"
												style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-4.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;</span></code></span></pre>
											<pre id="cakeErr5fb64d9e2c742-context" class="cake-context"
												style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
											<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1199
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
										</div>
										</pre>">
										<p class="size22">UPI/QR</p>
										<p class="size14">Instant payment using UPI App</p>
									</a>
								</div>
							</div><!-- End repaet Divv -->
							<!-- repeat Div -->
							<div class="flex-2 inner-31">
								<div class="box-21"><img src="frontend/images/pay-icon-5.jpg" alt="payment icon"></div>
								<div class="box-22">
									<a href="publish-obituary3ea2.html?amt=<pre%20class=" cake-error"><a
											href="javascript:void(0);"
											onclick="document.getElementById('cakeErr5fb64d9e2cb03-trace').style.display = (document.getElementById('cakeErr5fb64d9e2cb03-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b>
											(8)</a>: Undefined variable: data [<b>APP/View/Pages/postobituary.ctp</b>,
										line <b>1209</b>]<div id="cakeErr5fb64d9e2cb03-trace" class="cake-stack-trace"
											style="display: none;"><a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2cb03-code').style.display = (document.getElementById('cakeErr5fb64d9e2cb03-code').style.display == 'none' ? '' : 'none')">Code</a>
											<a href="javascript:void(0);"
												onclick="document.getElementById('cakeErr5fb64d9e2cb03-context').style.display = (document.getElementById('cakeErr5fb64d9e2cb03-context').style.display == 'none' ? '' : 'none')">Context</a>
											<pre id="cakeErr5fb64d9e2cb03-code" class="cake-code-dump"
												style="display: none;"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-21"</span><span style="color: #007700">&gt;&lt;</span><span style="color: #0000BB">img&nbsp;src</span><span style="color: #007700">=</span><span style="color: #DD0000">"/frontend/images/pay-icon-5.jpg"&nbsp;</span><span style="color: #0000BB">alt</span><span style="color: #007700">=</span><span style="color: #DD0000">"payment&nbsp;icon"</span><span style="color: #007700">&gt;&lt;/</span><span style="color: #0000BB">div</span><span style="color: #007700">&gt;</span></span></code>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">div&nbsp;</span><span style="color: #007700">class=</span><span style="color: #DD0000">"box-22"</span><span style="color: #007700">&gt;</span></span></code>
<span class="code-highlight"><code><span style="color: #000000">&nbsp;&nbsp;&lt;a&nbsp;href="<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">webroot</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>pages/razorpay?amt=<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'TXN_AMOUNT'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>"&gt;</span></code></span></pre>
											<pre id="cakeErr5fb64d9e2cb03-context" class="cake-context"
												style="display: none;">$viewFile = &#039;/home/pakki85n/public_html/antimnivas.com/app/View/Pages/postobituary.ctp&#039;
$dataForView = array(
	&#039;formData&#039; =&gt; array(),
	&#039;featured&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	),
	&#039;package&#039; =&gt; array(
		(int) 0 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 1 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 2 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 3 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 4 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 5 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		),
		(int) 6 =&gt; array(
			&#039;Package&#039; =&gt; array(
				[maximum depth reached]
			)
		)
	)
)
$formData = array()
$featured = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;8&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;1 Week-Rs 7,000&#039;,
			&#039;amount&#039; =&gt; &#039;7000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:06&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:45:24&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;9&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;2 Weeks-Rs 12,000&#039;,
			&#039;amount&#039; =&gt; &#039;12000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+14 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:13:38&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:38&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;12&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;3 Weeks-Rs 20,000&#039;,
			&#039;amount&#039; =&gt; &#039;20000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+21 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:51:05&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:51:05&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;13&#039;,
			&#039;type&#039; =&gt; &#039;featured&#039;,
			&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
			&#039;amount&#039; =&gt; &#039;25000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
		)
	)
)
$package = array(
	(int) 0 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;11&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;Basic Plan-7 Days Free&#039;,
			&#039;amount&#039; =&gt; &#039;0&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+7 days&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-13 08:42:49&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-24 12:10:28&#039;
		)
	),
	(int) 1 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;4&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;1 Year-Rs 2400&#039;,
			&#039;amount&#039; =&gt; &#039;2400&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+1 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-27 21:10:31&#039;
		)
	),
	(int) 2 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;3&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;5 Years-Rs 11,000&#039;,
			&#039;amount&#039; =&gt; &#039;11000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+5 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:43&#039;
		)
	),
	(int) 3 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;2&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;10 Years-Rs 21,000&#039;,
			&#039;amount&#039; =&gt; &#039;21000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+10  years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:13&#039;
		)
	),
	(int) 4 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;1&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;15 Years-Rs 31,000&#039;,
			&#039;amount&#039; =&gt; &#039;31000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+15 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;0000-00-00 00:00:00&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:20&#039;
		)
	),
	(int) 5 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;5&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;20 Years-Rs 41,000&#039;,
			&#039;amount&#039; =&gt; &#039;41000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+20 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:11&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:13:50&#039;
		)
	),
	(int) 6 =&gt; array(
		&#039;Package&#039; =&gt; array(
			&#039;id&#039; =&gt; &#039;6&#039;,
			&#039;type&#039; =&gt; &#039;obituary&#039;,
			&#039;title&#039; =&gt; &#039;25 Years-Rs 51,000&#039;,
			&#039;amount&#039; =&gt; &#039;51000&#039;,
			&#039;tax&#039; =&gt; &#039;0&#039;,
			&#039;time_period&#039; =&gt; &#039;+25 years&#039;,
			&#039;status&#039; =&gt; &#039;active&#039;,
			&#039;created&#039; =&gt; &#039;2020-05-12 17:08:35&#039;,
			&#039;modified&#039; =&gt; &#039;2020-05-12 17:15:31&#039;
		)
	)
)
$pac = array(
	&#039;Package&#039; =&gt; array(
		&#039;id&#039; =&gt; &#039;13&#039;,
		&#039;type&#039; =&gt; &#039;featured&#039;,
		&#039;title&#039; =&gt; &#039;4 Week-Rs 25,000&#039;,
		&#039;amount&#039; =&gt; &#039;25000&#039;,
		&#039;tax&#039; =&gt; &#039;0&#039;,
		&#039;time_period&#039; =&gt; &#039;+28 days&#039;,
		&#039;status&#039; =&gt; &#039;active&#039;,
		&#039;created&#039; =&gt; &#039;2020-05-28 20:52:22&#039;,
		&#039;modified&#039; =&gt; &#039;2020-05-28 20:52:22&#039;
	)
)
$usersess = null</pre>
											<pre class="stack-trace">include - APP/View/Pages/postobituary.ctp, line 1209
View::_evaluate() - CORE/Cake/View/View.php, line 971
View::_render() - CORE/Cake/View/View.php, line 933
View::render() - CORE/Cake/View/View.php, line 473
Controller::render() - CORE/Cake/Controller/Controller.php, line 963
Dispatcher::_invoke() - CORE/Cake/Routing/Dispatcher.php, line 200
Dispatcher::dispatch() - CORE/Cake/Routing/Dispatcher.php, line 167
[main] - APP/webroot/index.php, line 110</pre>
										</div>
										</pre>">
										<p class="size22">Pay Later</p>
										<p class="size14">Pay later using ePay Later and ICICI Bank PayLater</p>
									</a>
								</div>
							</div><!-- End repaet Divv -->

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<p class="size14 text-center">Payment gateway powered by
						<img src="frontend/images/paytm-icon.jpg" width="42" alt="paytm">
						& <img src="frontend/images/roz-pay.jpg" width="65" alt="roz"></p>
				</div>

			</div>
		</div>
	</div>

	<!-- <script src="frontend/js/jquery-3.1.1.min.js"></script>   -->
	<script src="ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="frontend/js/bootstrap.min.js"></script>
	<script src="frontend/js/owl.carousel.min.js"></script>

	<script src="frontend/js/custom.js"></script>
	<script>

		function changeframe($frame) {
			if ($frame == 'gold') {
				$("#formula").attr('src', 'frontend/images/new-frame-gold.png');
			}

			if ($frame == 'gray') {
				$("#formula").attr('src', 'frontend/images/new-frame-dark.png');
			}

			if ($frame == 'black') {
				$("#formula").attr('src', 'frontend/images/new-frame-black.png');
			}
		}

		function postForm($login_type) {
			var login_type = $login_type;
			var form = document.getElementById('user_form');
			form.setAttribute('action', '/post-obituary?login_type=' + login_type);

			form.submit();

		}

		function getMonth(monthStr) {
			return new Date(monthStr + '-1-01').getMonth() + 1
		}

		function form_validation() {


			if ($("#imgInp").val() == '') {
				alert('Please select Obituary image file');
				return false;
			}
			if ($("#fst_name").val() == '') {
				alert('Please Enter First Name');
				return false;
			}

			if ($("#death_year").val() == 0) {
				alert('Please enter year of demise');
				return false;
			}

			// date comparisions
			if ($("#born_year").val() != '' && $("#born_month").val() != '' && $("#born_day").val() != '' && $("#born_year").val() != '' && $("#born_month").val() != '' && $("#born_day").val() != '') {
				var born_date = $("#born_year").val() + '-' + $("#born_month").val() + '-' + $("#born_day").val();
				var death_date = $("#death_year").val() + '-' + $("#death_month").val() + '-' + $("#death_day").val();

				var d1 = Date.parse(born_date);
				var d2 = Date.parse(death_date);
				if (d1 > d2) {
					alert("Date of Demise cannot be earlier than Date of Birth");
					return false;
				}
			}

		}


		$("#step1-btn").click(function () {
			if (form_validation() != false) {
				$("#step-2").show();
				$("#step-1").hide();
				$("#btn-2").addClass('btn-success');
			}

		});

		$("#step2-btn").click(function () {
			$("#step-3").show();
			$("#step-2").hide();


		});


		if ($("#payment_status").val() == 'false') {
			$("#step-1").hide();
			$("#step-2").hide();
			$("#step-3").show();
			$("#btn-2").addClass('btn-success');
			$("#btn-3").addClass('btn-success');
		}

		// $(document).ready(function () {

		// var navListItems = $('div.setup-panel div a'),
		//   allWells = $('.setup-content'),
		//   allNextBtn = $('.nextBtn');

		// allWells.hide();

		// navListItems.click(function (e) {
		//   e.preventDefault();
		//   var $target = $($(this).attr('href')),
		//   $item = $(this);

		//   if (!$item.hasClass('disabled')) {
		//   navListItems.addClass('btn-default');
		//   $item.addClass('btn-success');
		//   allWells.hide();
		//   $target.show();
		//   $target.find('input:eq(0)').focus();
		//   }
		// });

		// allNextBtn.click(function () {
		//   var curStep = $(this).closest(".setup-content"),
		//   curStepBtn = curStep.attr("id"),
		//   nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		//   curInputs = curStep.find("input[type='text'],input[type='url']"),
		//   isValid = true;

		//   $(".form-group").removeClass("has-error");
		//   for (var i = 0; i < curInputs.length; i++) {
		//   if (!curInputs[i].validity.valid) {
		//     isValid = false;
		//     $(curInputs[i]).closest(".form-group").addClass("has-error");
		//   }
		//   }

		//   if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
		// });

		// $('div.setup-panel div a.btn-success').trigger('click');
		// }); 

		/* New js */
		$(document).ready(function () {
			$("input:radio[name=option]").click(function () {
				var value = $(this).val();
				var image_name;
				if (value == 'gold') {
					image_name = "frontend/images/new-frame-gold.png";
				} else {
					if (value == 'gray') {
						image_name = "frontend/images/new-frame-dark.png";
					} else {
						image_name = "frontend/images/new-frame-black.png";
					}
				}
				$('#formula').attr('src', image_name);
			});
		});


		//  if($("#payment_status").val()=='false')
		// {
		//   $("#step-1").hide();  
		//   $("#step-2").hide();  
		//   $("#step-3").show();
		// }

		function goBack() {
			window.history.back();
		}

	</script>

</body>

<!-- Mirrored from antimnivas.com/post-obituary by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 10:51:29 GMT -->

</html>