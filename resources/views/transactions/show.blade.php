@extends('layouts.app')

@section('contents')

<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
		<!--begin::Page title-->
		<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
			<!--begin::Title-->
			<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Detail Transaction</h1>
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
		<div class="row g-5 g-xl-8">
		<!--begin::Col-->
			<div class="col-xl-12">
			<!--begin::Card-->
				<div class="card">
					<div class="card-body py-4">
						<!--begin::Row-->
						<div class="row g-5 g-xl-8">
							<!--begin::Col-->
							<div class="col-md-12 pe-lg-10">
								<!--begin::Form-->
								<h1 class="fw-bolder text-dark"></h1>

                                <div class="row mb-5">
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-5 fw-bold mb-2">Doctor</label>
                                        <input type="text" value="{{$transaction->doctor->name}}" class="form-control form-control-solid" placeholder="" name="title" disabled/>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-5 fw-bold mb-2">Patient</label>
                                        <input type="text" value="{{$transaction->patient->name}}" class="form-control form-control-solid" placeholder="" name="title" disabled/>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-5 fw-bold mb-2">Date</label>
                                        <input type="text" value="{{date('d F Y', strtotime($transaction->date))}}" class="form-control form-control-solid" placeholder="" name="title" disabled/>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-5 fw-bold mb-2">Schedule</label>
                                        <input type="text" value="{{date('H:i', strtotime($transaction->start_time))}} - {{date('H:i', strtotime($transaction->end_time))}}" class="form-control form-control-solid" placeholder="" name="title" disabled/>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-5 fw-bold mb-2">Transaction Status</label>
                                        <input type="text" value="{{$transaction->status}}" class="form-control form-control-solid" placeholder="" name="title" disabled/>
                                    </div>
                                </div>

							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Card body-->
				</div>
			</div>
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
            $(".select2").select2();
        });
	</script>
@endpush
