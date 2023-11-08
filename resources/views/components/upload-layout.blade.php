{{-- @vite(['resources/js/file.js']) --}}

<div class="content-body">
    <div class="content-body-search">
        <!-- Search File -->
        <div class="content-search">
            <img class="btn-icon" src="{{ asset('assets/icons/search.png') }}">
        </div>
        <!-- Upload Button -->
        <div class="content-upload">
            <div class="upload-btn-container">
                <a href="" class="btn btn-upload" data-bs-toggle="modal" data-bs-target="#modal_upload">
                    <img class="btn-icon" src="{{ asset('assets/icons/add.png') }}">
                    Upload
                </a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_upload" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-width">
            <div class="modal-content">
                <div class="modal-header" id="modal_upload_header">
                    <h4 class="modal-title" id="uploadModalLabel">Upload File</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="modal_upload_form" class="form" action="{{ route('documents.upload') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex flex-column scroll-y me-n7 pe-7 mb-3">
                            <div class="upload-information-container d-flex flex-column">

                                {{-- Name --}}

                                <div class="row mb-4 mx-0 fv-row">
                                    <label class="required upload-description-title">File Name</label>
                                    <input type="text" class="form-control" id="upload_name" name="title"
                                        value="{{ old('title') }}">
                                    @error('title')

                                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Department --}}
                                <div class="row mb-4 mx-0 fv-row">
                                    <label class="required upload-description-title">Department</label>
                                    <select class="form-select" id="upload_department" name="department_id">
                                        <option disabled selected>Choose Department</option>


                                        @foreach ($departments as $department )

                                        {{-- <option value="{{ $department->id }}">{{ $department->name }}</option> --}}
                                        <option value="{{ $department->id }}" @if(old('department_id')==$department->id)
                                            selected @endif>{{ $department->name }}</option>
                                        @endforeach



                                    </select>

                                    @error('department_id')

                                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Description --}}
                                <div class="row mb-4 mx-0 fv-row">
                                    <label class="required upload-description-title">File Description</label>
                                    <textarea class="form-control" id="upload_description" rows="3"
                                        name="description">{{ old('description') }}</textarea>
                                    @error('description')

                                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Upload file --}}
                            <label class="required upload-description-title">File</label>
                            <div class="upload-container fv-row">
                                <input class="form-control " type="file" id="input_upload_file" name="path">

                                @error('path')
                                <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center mt-4 modal-action">
                            <button type="reset" class="btn btn-discard me-3" data-bs-dismiss="modal">Discard</button>


                            {{-- <button type="submit" class="btn btn-primary" data-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                            </button> --}}

                            <button type="submit" class="btn btn-submit" id="submitBtn">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@if (count($errors) > 0)
<script>
    $( document ).ready(function() {
            $('#modal_upload').modal('show');
        });
</script>
@endif
