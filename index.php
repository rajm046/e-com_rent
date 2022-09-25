<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <?php
	function convertCurrency($curr){
		return ($curr*70);
	}
	?>
        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper" style="background-color: #ffe6cc">
            <div class="container">

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-9">
                            <?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/banner1.jpg" alt="First slide">
                                    </div>
                                    <div class="item">
                                        <img src="images/banner1.1.jpg" alt="Second slide">
                                    </div>
                                    <div class="item">
                                        <img src="images/banner2.jpg" alt="Third slide">
                                    </div>
                                    <div class="item">
                                        <img src="images/banner.jpg" alt="Fourth slide">
                                    </div>
                                    <div class="item">
                                        <img src="images/banner3.jpg" alt="Fifth slide">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </div>
                            <h2>Products on Rent</h2>




                            <div class='row'>
                                <div class='col-sm-4'>
                                    <div class='box box-solid'>
                                        <div class='box-body prod-body'>
                                            <img src="images/suit.png" width='100%' height='230px' class='thumbnail'>
                                            <h3>Royal Embroidery</h3>
                                            <p>An ethnic royal embroideried suit desi...</p>
                                        </div>
                                        <div class='box-footer'>
                                            <i class="fa fa-plus-square"></i> <a style="font-weight:bold;"
                                                href="/rentall/product.php?product=royal-embroidery-suit">More Info</a>
                                        </div>
                                    </div>
                                </div>


                                <div class='col-sm-4'>
                                    <div class='box box-solid'>
                                        <div class='box-body prod-body'>
                                            <img src="images/gate.png" width='100%' height='230px' class='thumbnail'>
                                            <h3>GATE CSE/IT 2022</h3>
                                            <p>Best selling Book for Gate CSE/IT 2022...</p>
                                        </div>
                                        <div class='box-footer'>
                                            <i class="fa fa-plus-square"></i> <a style="font-weight:bold;"
                                                href="/rentall/product.php?product=gate-cse-it-2022">More Info</a>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4'>
                                    <div class='box box-solid'>
                                        <div class='box-body prod-body'>
                                            <img src="images/samsung-galaxy-s9-128-gb.jpg" width='100%' height='230px'
                                                class='thumbnail'>
                                            <h3>Samsung Galaxy S9</h3>
                                            <p>Dual Apperture lens.Supports ...</p>
                                        </div>
                                        <div class='box-footer'>
                                            <i class="fa fa-plus-square"></i> <a style="font-weight:bold;"
                                                href="http://localhost/rentall/product.php?product=samsung-galaxy-s9">More
                                                Info</a>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4'>
                                    <div class='box box-solid'>
                                        <div class='box-body prod-body'>
                                            <img src="images/dell-inspiron-5675-gaming-pc-recon-blue.jpg" width='100%'
                                                height='230px' class='thumbnail'>
                                            <h3>Dell CPU</h3>
                                            <p>It's a Gaming PC+Windows OS...</p>
                                        </div>
                                        <div class='box-footer'>
                                            <i class="fa fa-plus-square"></i> <a style="font-weight:bold;"
                                                href="http://localhost/rentall/product.php?product=dell-inspiron-5675">More
                                                Info</a>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4'>
                                    <div class='box box-solid'>
                                        <div class='box-body prod-body'>
                                            <img src="images/apple-9-7-ipad-32-gb-gold.jpg" width='100%' height='230px'
                                                class='thumbnail'>
                                            <h3>Apple Ipad Gold</h3>
                                            <p>9.7 inch Retina Display, 2048 ...</p>
                                        </div>
                                        <div class='box-footer'>
                                            <i class="fa fa-plus-square"></i> <a style="font-weight:bold;"
                                                href="/rentall/product.php?product=apple-9-7-ipad-32-gb-gold">More
                                                Info</a>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4'>
                                    <div class='box box-solid'>
                                        <div class='box-body prod-body'>
                                            <img src="images/dell-inspiron-15-5000-15.jpg" width='100%' height='230px'
                                                class='thumbnail'>
                                            <h3>Dell Inspiron</h3>
                                            <p>Windows OS+ 4.0 GB Inbulit...</p>
                                        </div>
                                        <div class='box-footer'>
                                            <i class="fa fa-plus-square"></i> <a style="font-weight:bold;"
                                                href="http://localhost/rentall/product.php?product=dell-inspiron-15-5000">More
                                                Info</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- New cards rendering -->

                                <div class='col-sm-4'>
                                    <div class='box box-solid'>
                                        <div class='box-body prod-body'>
                                            <img src="images/maruti suzuki.png" width='100%' height='230px'
                                                class='thumbnail'>
                                            <h3>Maruti Suzuki</h3>
                                            <p>The Tata Harrier is certainly a looker...</p>
                                        </div>
                                        <div class='box-footer'>
                                            <i class="fa fa-plus-square"></i> <a style="font-weight:bold;"
                                                href="http://localhost/e-com_rent/product.php?product=tata-harrier-suv">More
                                                Info</a>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4'>
                                    <div class='box box-solid'>
                                        <div class='box-body prod-body'>
                                            <img src="images/royal-enfield-himalayan.png" width='100%' height='230px'
                                                class='thumbnail'>
                                            <h3>Enfield Himalayan</h3>
                                            <p>Royal Enfield Himalayan is an adve...</p>
                                        </div>
                                        <div class='box-footer'>
                                            <i class="fa fa-plus-square"></i> <a style="font-weight:bold;"
                                                href="http://localhost/e-com_rent/product.php?product=royal-enfield-himalayan">More
                                                Info</a>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-4'>
                                    <div class='box box-solid'>
                                        <div class='box-body prod-body'>
                                            <img src="images/mahindra-thar.jpeg" width='100%' height='230px'
                                                class='thumbnail'>
                                            <h3>Mahindra Thar</h3>
                                            <p>Mahindra Thar is a 4 seater SUV...</p>
                                        </div>
                                        <div class='box-footer'>
                                            <i class="fa fa-plus-square"></i> <a style="font-weight:bold;"
                                                href="http://localhost/e-com_rent/product.php?product=mahindra-thar">More
                                                Info</a>
                                        </div>
                                    </div>
                                </div>



                            </div>







                            <h2>Our Top Rented Items for this Month</h2>
                            <?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
								$res = convertCurrency($row['price']);
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
												   <p>Most Rented Item</p>
		       								</div>
											
		       								<div class='box-footer'>
		       									<b>&#8377; ".number_format($res, 2)." /day</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?>
                        </div>
                        <div class="col-sm-3">
                            <?php include 'includes/sidebar.php'; ?>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

</body>

</html>