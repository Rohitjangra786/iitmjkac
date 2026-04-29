<?php
	include("header.php");
	//	include("navbar.php");
	include("navbar1.php");
?>
<div class="container mt-10">
	<div class="row">
		<div class="col-sm-12">
			<ol class="list-inline my_breadcrumb mt-10">
				<li><a href="#" class="text-danger">NAAC</a></li>
			</ol>
		</div>
	</div>
	<div class="row pt-10">
		<div class="col-sm-3 single">
			<ul class="nav nav-pills nav-stacked col-sm-12 col-md-12">
				<li class="active">
					<a href="#accred" data-toggle="pill">
					<i class=""></i> Accreditation</a>
				</li>
				<!--<li>
					<a href="#ssr" data-toggle="pill">
					<i class="fa fa-hand-o-right"></i> SSR</a>
				</li>-->				
				<li>
					<a href="#ce" data-toggle="pill">
					<i class=""></i> Certificate</a>
				</li>
				<li>
					<a href="#image" data-toggle="pill">
					<i class=""></i> Gallery</a>
				</li>
			<li><a href="direct-file/SSR.pdf" target="_blank">SSR</a></li>
				
			</ul>
		</div>
		<div class="col-sm-9">
			<div class="tab-content clearfix">
				<div class="tab-pane active" id="accred">
					<div style="font-size:2.5em;" class="font-family-1 mt-10">Accreditation</div>
					<hr class="hr-maroon" />
					<p class="text-justify">The Institute of Information Technology and Management (IITM) has been rated grade ‘A’ by National Assessment and Accreditation Council (NAAC).</p>
				</div>
				<style type="text/css">
					.th_head{
						background-color: maroon;
						color:white;
						text-align: center;
					}
				</style>
				<!--<div class="tab-pane" id="ssr">
					<div style="font-size:2.5em;" class="font-family-1 mt-10">SSR</div>
					<hr class="hr-maroon" />
					<p class="text-justify"></p>
					<table class="table table-bordered">
						<tr>
							<th class="th_head" style="width: 100px">S.No.</th>
							<th class="th_head">Title</th>
							<th class="th_head" style="width: 160px">Uploaded On</th>
							<th class="th_head" style="width: 160px">View File</th>
						</tr>
						<tr>
							<td class="text-center" style="vertical-align: middle;">1</td>
							<td style="vertical-align: middle;">SSR Report Cycle - 1</td>
							<td class="text-center" style="vertical-align: middle;">21.12.2014</td>
							<td class="text-center"><a href="upload/naac/naac_ssr_report.pdf" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> View</a></td>
						</tr>
					</table>
				</div>-->
				<div class="tab-pane" id="ce">
					<div style="font-size:2.5em;" class="font-family-1 mt-10">NAAC Certificate</div>
					<hr class="hr-maroon" />
					<p class="text-justify"></p>
					<embed src="direct-file/naac.pdf" style="width:100%;height: 1150px;" />
				</div>
				<div class="tab-pane" id="image">
					<div style="font-size:2.5em;" class="font-family-1 mt-10">Cycle 1</div>
					<hr class="hr-maroon" />
					<div class="row">
						<div class="col-sm-4">
							<img src="upload/naac/gallery/naac1.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/naac2.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/naac3.jpg" class="img-responsive" />
						</div>
					</div>
					<div class="row mt-10">
						<div class="col-sm-4">
							<img src="upload/naac/gallery/naac4.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/naac5.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/naac6.jpg" class="img-responsive" />
						</div>
					</div>
					<div class="row mt-10">
						<div class="col-sm-4">
							<img src="upload/naac/gallery/naac7.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/naac8.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/naac9.jpg" class="img-responsive" />
						</div>
					</div>
					<div class="tab-pane" id="image">
					<div style="font-size:2.5em;" class="font-family-1 mt-10">Cycle 2</div>
					<hr class="hr-maroon" />
					<div class="row">
						<div class="col-sm-4">
							<img src="upload/naac/gallery/1.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/2.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/3.jpg" class="img-responsive" />
						</div>
					</div>
					<div class="row mt-10">
						<div class="col-sm-4">
							<img src="upload/naac/gallery/4.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/5.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/6.jpg" class="img-responsive" />
						</div>
					</div>
					<div class="row mt-10">
						<div class="col-sm-4">
							<img src="upload/naac/gallery/7.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/8.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/9.jpg" class="img-responsive" />
						</div>
				</div>
				<div class="row mt-10">
						<div class="col-sm-4">
							<img src="upload/naac/gallery/10.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/11.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/12.jpg" class="img-responsive" />
						</div>
				</div>
				<div class="row mt-10">
						<div class="col-sm-4">
							<img src="upload/naac/gallery/13.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/14.jpg" class="img-responsive" />
						</div>
						<div class="col-sm-4">
							<img src="upload/naac/gallery/16.jpg" class="img-responsive" />
						</div>
				</div>
				
			</div>
	</div>

</div>

</div>
</div>
<?php
	include("footer.php");
?>