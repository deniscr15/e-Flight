@extends('layouts.app')

@section('contents')

<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
		<!--begin::Page title-->
		<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
			<!--begin::Title-->
			<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Create Flight</h1>
			<!--end::Title-->
			<!--begin::Separator-->
			<span class="h-20px border-gray-300 border-start mx-4"></span>
			<!--end::Separator-->
			<!--begin::Breadcrumb-->
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title-->
	</div>
	<!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xxl">
		<!--begin::Card-->
		<div class="card">
			<!--end::Card header-->
			<div class="card-body py-4">
				<!--begin::Row-->
				<div class="row mb-3">
					<!--begin::Col-->
					<div class="col-md-12 pe-lg-10">
						<!--begin::Form-->
						<form enctype="multipart/form-data" action="{{route('flights.store')}}" method="POST" class="form mb-15" method="post" id="kt_contact_form">
							@csrf
							<h1 class="fw-bolder text-dark"></h1>
							<div class="row mb-5">
								<div class="col-md-12 fv-row">
									<label class="required fs-5 fw-bold mb-2">Date</label>
									<input type="date" class="form-control form-control-solid" placeholder="" name="date" required/>
								</div>
							</div>

							<div class="row mb-5">
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Route</label>
                                    <select id="route_id" name="route_id" class="form-select form-select-solid" required>
                                        <option value="">--SELECT Route--</option>
										@foreach($routes as $route)
											<option value="{{$route->id}}">{{$route->name}}</option>
										@endforeach                                     
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Operator</label>
                                    <select id="operator_id" name="operator_id" class="form-select form-select-solid" required>
                                        <option value="">--SELECT Operator--</option>
										@foreach($operators as $operator)
											<option value="{{$operator->id}}">{{$operator->name}}</option>
										@endforeach                                     
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Aircraft Type</label>
                                    <select id="aircraft_type_id" name="aircraft_type_id" class="form-select form-select-solid" required>
                                        <option value="">--SELECT Aircraft--</option>
										@foreach($aircraftTypes as $aircraftType)
											<option value="{{$aircraftType->id}}">{{$aircraftType->name}}</option>
										@endforeach                                     
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-5">
								<div class="col-md-6 fv-row">
									<label class="required fs-5 fw-bold mb-2">Flight Arrival</label>
									<input type="number" class="form-control form-control-solid" placeholder="" name="flight_arrival" required/>
								</div>
								<div class="col-md-6 fv-row">
									<label class="required fs-5 fw-bold mb-2">Flight Departure</label>
									<input type="number" class="form-control form-control-solid" placeholder="" name="flight_departure" required/>
								</div>
							</div>

							<div class="row mb-5">
								<div class="col-md-6 fv-row">
									<label class="required fs-5 fw-bold mb-2">Passenger Arrival</label>
									<input type="number" class="form-control form-control-solid" placeholder="" name="passenger_arrival" required/>
								</div>
								<div class="col-md-6 fv-row">
									<label class="required fs-5 fw-bold mb-2">Passenger Departure</label>
									<input type="number" class="form-control form-control-solid" placeholder="" name="passenger_arrival" required/>
								</div>
							</div>

							<div class="row mb-5">
								<div class="col-md-6 fv-row">
									<label class="required fs-5 fw-bold mb-2">Cargo Arrival</label>
									<input type="number" class="form-control form-control-solid" placeholder="" name="cargo_arrival" required/>
								</div>
								<div class="col-md-6 fv-row">
									<label class="required fs-5 fw-bold mb-2">Cargo Departure</label>
									<input type="number" class="form-control form-control-solid" placeholder="" name="cargo_arrival" required/>
								</div>
							</div>

							<div class="row mb-5">
								<div class="col-md-6 fv-row">
									<label class="required fs-5 fw-bold mb-2">Cancellation</label>
									<input type="number" class="form-control form-control-solid" placeholder="" name="cancellation" required/>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
								<!--begin::Indicator-->
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator-->
							</button>
							<!--end::Submit-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->

@endsection
