<x-app-layout>
	<!-- [ breadcrumb ] start -->
			<div class="row">
				<div class="col-md-12">
					<h5>User List</h5>
				</div>
			</div>
	<!-- [ breadcrumb ] end -->
	<!-- [ Main Content ] start -->
	<div class="row">
		<div class="col-lg-6">
			<form>
				<input type="" class="form-control" name="" placeholder="Search..">
			</form>
		</div>
		<div class="col-lg-12">
			<div class="card user-profile-list">
				<div class="card-body">
					<div class="table-responsive">
                            <table class="table" id="listing">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Main Content ] end -->

</x-app-layout>