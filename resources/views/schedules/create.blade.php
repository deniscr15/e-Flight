@extends('layouts.app')

@section('contents')

<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
		<!--begin::Page title-->
		<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
			<!--begin::Title-->
			<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Create Schedule</h1>
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
						<form enctype="multipart/form-data" action="{{route('doctor.schedules.store')}}" method="POST" class="form mb-15" method="post" id="kt_contact_form">
							@csrf
							<h1 class="fw-bolder text-dark"></h1>
							<div class="row mb-5">
								<input type="hidden" class="form-control form-control-solid" placeholder="" name="schedules[0][id_doctor]" value="{{$id_doctor}}"/>
								<div class="col-md-6 fv-row">
									<label class="fs-5 fw-bold mb-2">Start Time</label>
									@if(isset($doctor_schedules))
										@if(isset($doctor_schedules[1]['start_time']))
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[0][start_time]" value="{{date('H:i', strtotime($doctor_schedules[0]['start_time']))}}"/>
										@else
										<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[0][start_time]"/>
										@endif
									@else
									<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[0][start_time]"/>
									@endif
								</div>
								<div class="col-md-6 fv-row">
									<label class="fs-5 fw-bold mb-2">End Time</label>
									@if(isset($doctor_schedules))
										@if(isset($doctor_schedules[1]['end_time']))
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[0][end_time]" value="{{date('H:i', strtotime($doctor_schedules[0]['end_time']))}}"/>
										@else
										<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[0][end_time]"/>
										@endif
									@else
									<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[0][end_time]"/>
									@endif
								</div>
							</div>

							<div class="row mb-5">
							<input type="hidden" class="form-control form-control-solid" placeholder="" name="schedules[1][id_doctor]" value="{{$id_doctor}}"/>
								<div class="col-md-6 fv-row">
									<label class="fs-5 fw-bold mb-2">Start Time</label>
									@if(isset($doctor_schedules))
										@if(isset($doctor_schedules[1]['start_time']))
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[1][start_time]" value="{{date('H:i', strtotime($doctor_schedules[1]['start_time']))}}"/>
										@else
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[1][start_time]"/>
										@endif
									@else
									<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[1][start_time]"/>
									@endif
								</div>
								<div class="col-md-6 fv-row">
									<label class="fs-5 fw-bold mb-2">End Time</label>
									@if(isset($doctor_schedules))
										@if(isset($doctor_schedules[1]['end_time']))
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[1][end_time]" value="{{date('H:i', strtotime($doctor_schedules[1]['end_time']))}}"/>
										@else
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[1][end_time]"/>
										@endif
									@else
									<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[1][end_time]"/>
									@endif
								</div>
							</div>
							
							<div class="row mb-5">
							<input type="hidden" class="form-control form-control-solid" placeholder="" name="schedules[2][id_doctor]" value="{{$id_doctor}}"/>
								<div class="col-md-6 fv-row">
									<label class="fs-5 fw-bold mb-2">Start Time</label>
									@if(isset($doctor_schedules))
										@if(isset($doctor_schedules[2]['start_time']))
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[2][start_time]" value="{{date('H:i', strtotime($doctor_schedules[2]['start_time']))}}"/>
										@else
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[2][start_time]"/>
										@endif
									@else
									<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[2][start_time]"/>
									@endif
								</div>
								<div class="col-md-6 fv-row">
									<label class="fs-5 fw-bold mb-2">End Time</label>
									@if(isset($doctor_schedules))
										@if(isset($doctor_schedules[2]['end_time']))
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[2][end_time]" value="{{date('H:i', strtotime($doctor_schedules[2]['end_time']))}}"/>
										@else
											<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[2][end_time]"/>
										@endif
									@else
									<input type="time" class="form-control form-control-solid" placeholder="" name="schedules[2][end_time]"/>
									@endif
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

