@extends('layouts.app')

@section('contents')

<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
		<!--begin::Page title-->
		<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
			<!--begin::Title-->
			<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Create Article</h1>
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
						<form enctype="multipart/form-data" action="{{route('transactions.store')}}" method="POST" class="form mb-15" method="post" id="kt_contact_form">
							@csrf
							<h1 class="fw-bolder text-dark"></h1>

							<div class="row mb-5">
								<div class="col-md-12 fv-row">
									<label class="required fs-5 fw-bold mb-2">Date</label>
									<input id="date" type="date" class="form-control form-control-solid" placeholder="" name="date" required/>
								</div>
							</div>

                            <div class="row mb-5">
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Doctor</label>
                                    <select id="doctor" name="id_doctor" class="form-select form-select-solid" required>
                                        <option value="">--SELECT DOCTOR--</option>
										@foreach($doctors as $doctor)
										<option value="{{$doctor->id}}">{{$doctor->name}}</option>
										@endforeach
                                    </select>
                                </div>
                            </div>

							<div class="row mb-5">
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Patient</label>
                                    <select id="patient" name="id_patient" class="form-select form-select-solid" required>
                                        <option value="">--SELECT PATIENT--</option>
										@foreach($patients as $patient)
										<option value="{{$patient->id}}">{{$patient->name}}</option>
										@endforeach                                     
                                    </select>
                                </div>
                            </div>

							<div class="row mb-5">
                                <div class="col-md-12 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Schedule</label>
                                    <select id="schedule" name="schedule" class="form-select form-select-solid disable" required>
                                        <option value="">--SELECT SCHEDULE--</option>                                      
                                    </select>
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

@push('scripts')
	<script type="text/javascript">
        $(document).ready(function() {
            $(".select2").select2({
                placeholder: "--SELECT TAG--",
                allowClear: true
            });
        });
	</script>

	<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
        $('#doctor').change(function () {
            var id_doctor = $(this).find(":selected").val();
			var date = $('#date').val();
            $.ajax({
                type: 'GET',
                url: '{{route('doctor.schedules.list')}}',
                data: {
                    'id_doctor': id_doctor,
					'date': date
                },
                success: function (data) {
                    if(data.length != 0){
                        $('#schedule').empty();
                        $('#schedule').append('<option value="">--All Schedule--</option>');

                        $.each(data, function(key, schedule){
                            $('select[name="schedule"]').append('<option value="'+ schedule.id +'">' + schedule.start_time_formatted + ' - ' + schedule.end_time_formatted + '</option>');
                        });
                    } else {
                        $('#schedule').empty();
                        $('#schedule').append('<option value="">--All Schedule--</option>');
                    }
                }
            });
        });
    </script>
@endpush
