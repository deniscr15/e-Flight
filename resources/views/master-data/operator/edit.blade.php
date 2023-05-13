@extends('layouts.app')

@section('contents')

<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
		<!--begin::Page title-->
		<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
			<!--begin::Title-->
			<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit Doctor</h1>
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
						<form enctype="multipart/form-data" action="{{route('doctors.update', $doctor->id)}}" method="POST" class="form mb-15" method="post" id="kt_contact_form">
							@csrf
							@method('PUT')
							<h1 class="fw-bolder text-dark"></h1>
							<div class="row mb-5">
								<div class="col-md-12 fv-row">
									<label class="required fs-5 fw-bold mb-2">Name</label>
									<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="{{$doctor->name}}" required/>
								</div>
							</div>

							<div class="row mb-5">
								<div class="col-md-12 fv-row">
									<label class="required fs-5 fw-bold mb-2">Email</label>
									<input type="text" class="form-control form-control-solid" placeholder="" name="email" value="{{$doctor->email}}" required/>
								</div>
							</div>

							<div class="row mb-5">
								<div class="col-md-12 fv-row">
									<label class="fs-5 fw-bold mb-2">Id Number</label>
									<input type="text" class="form-control form-control-solid" placeholder="" name="id_number" value="{{$doctor->id_number}}" required/>
								</div>
							</div>

							<div class="row mb-5">
								<div class="col-md-12 fv-row">
									<label class="fs-5 fw-bold mb-2">Registration Certificate Number</label>
									<input type="text" class="form-control form-control-solid" placeholder="" name="registration_certificate_number" value="{{$doctor->registration_certificate_number}}" required/>
								</div>
							</div>

							<div class="row mb-5">
								<div class="col-md-12 fv-row">
									<label class="fs-5 fw-bold mb-2">Practice Lisence Number</label>
									<input type="text" class="form-control form-control-solid" placeholder="" name="practice_lisence_number" value="{{$doctor->practice_lisence_number}}" required/>
								</div>
							</div>

                            <div class="row mb-5">
                                <!--begin::Col-->
                                <div class="col-md-12 fv-row">
                                    <div class="card card-flush py-4">
                                        <label class="fs-5 fw-bold mb-2">Image</label>
                                        <!--begin::Card header-->
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(
												@if(isset($doctor->image))
													{{ $doctor->image }}
												@else
													{{ asset('assets/media/svg/files/blank-image.svg') }}
												@endif
											)">
                                                <div class="image-input-wrapper w-150px h-150px"></div>

                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="upload image">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                </label>
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
													<i class="bi bi-x fs-2"></i>
												</span>
                                            </div>
                                            <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                        </div>
                                    </div>
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
@endpush
