               <!-- Content Row -->
               <div class="row p-3">

               	<!-- Earnings (Monthly) Card Example -->
               	<div class="col-xl-3 col-md-6 mb-4">
               		<div class="card border-left-primary shadow h-100 py-2">
               			<div class="card-body">
               				<div class="row no-gutters align-items-center">
               					<div class="col mr-2">
               						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
               							Total Berita</div>
               						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $berita['0']['jumlah'] ?></div>

               					</div>
               					<div class="col-auto">
               						<i class="fas fa-newspaper fa-2x text-gray-300"></i>
               					</div>
               				</div>
               			</div>
               		</div>
               	</div>

               	<!-- Earnings (Monthly) Card Example -->
               	<div class="col-xl-3 col-md-6 mb-4">
               		<div class="card border-left-success shadow h-100 py-2">
               			<div class="card-body">
               				<div class="row no-gutters align-items-center">
               					<div class="col mr-2">
               						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
               							Total Agenda</div>
               						<div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
               					</div>
               					<div class="col-auto">
               						<i class="fas fa-calendar fa-2x text-gray-300"></i>
               					</div>
               				</div>
               			</div>
               		</div>
               	</div>

               	<!-- Pending Requests Card Example -->
               	<div class="col-xl-3 col-md-6 mb-4">
               		<div class="card border-left-warning shadow h-100 py-2">
               			<div class="card-body">
               				<div class="row no-gutters align-items-center">
               					<div class="col mr-2">
               						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
               							Pelanggaran Siswa</div>
               						<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pelanggaran['0']['jumlah'] ?></div>
               					</div>
               					<div class="col-auto">
               						<i class="fas fa-2x text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
               								<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
               							</svg></i>
               					</div>
               				</div>
               			</div>
               		</div>
               	</div>
               </div>
               <!-- End of Main Content -->

               <div class="row p-3">
               	<div class="col-lg-7 col-xl-8">
               		<div class="card shadow mb-4">
               			<div class="card-header d-flex justify-content-between align-items-center">
               				<h6 class="text-primary fw-bold m-0">Grafik Pelanggaran</h6>
               				<div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
               					<div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
               						<p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
               						<div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
               					</div>
               				</div>
               			</div>
               			<div class="card-body">
               				<div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Pelanggaran&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;15&quot;,&quot;8&quot;,&quot;6&quot;,&quot;0&quot;,&quot;4&quot;,&quot;5&quot;,&quot;3&quot;,&quot;2&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
               			</div>
               		</div>
               	</div>
               	<div class="col-lg-5 col-xl-4">
               		<div class="card shadow mb-4">
               			<div class="card-header d-flex justify-content-between align-items-center">
               				<h6 class="text-primary fw-bold m-0">Kelas Pelanggaran</h6>
               				<div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
               					<div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
               						<p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
               						<div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
               					</div>
               				</div>
               			</div>
               			<div class="card-body">
               				<div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;IPS 4&quot;,&quot;IPS 3&quot;,&quot;IPS 2&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}"></canvas></div>
               				<div class="text-center small mt-4"><span class="me-2"><i class="fas fa-circle text-primary"></i>&nbsp;IPS 4</span><span class="me-2"><i class="fas fa-circle text-success"></i>&nbsp;IPS 3</span><span class="me-2"><i class="fas fa-circle text-info"></i>&nbsp;IPS 2</span></div>
               			</div>
               		</div>
               	</div>
               </div>

               </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
               </div>
