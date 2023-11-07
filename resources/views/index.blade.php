<x-layout>
    {{-- <div class="content-body">
        <div class="content-body-search">
            <!-- Search File -->
            <div class="content-search">
                <img class="btn-icon" src="assets/icons/search.png">
            </div>
            <!-- Upload Button -->
            <div class="content-upload">
                <div class="upload-btn-container">
                    <a href="" class="btn btn-upload" data-bs-toggle="modal" data-bs-target="#modal_upload">
                        <img class="btn-icon" src="assets/icons/add.png">
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
                        <form id="modal_upload_form" class="form" action="#">
                            <div class="d-flex flex-column scroll-y me-n7 pe-7 mb-3">
                                <div class="upload-information-container d-flex flex-column">
                                    <div class="row mb-4 mx-0 fv-row">
                                        <label class="required upload-description-title">File Name</label>
                                        <input type="text" class="form-control" id="upload_name"
                                            name="upload_name"></input>
                                    </div>
                                    <div class="row mb-4 mx-0 fv-row">
                                        <label class="required upload-description-title">Department</label>
                                        <select class="form-select" id="upload_department" name="upload_department">
                                            <option disabled selected>Choose Department</option>
                                            <option value="1">Library</option>
                                            <option value="2">IT</option>
                                            <option value="3">Pamo</option>
                                        </select>
                                    </div>
                                    <div class="row mb-4 mx-0 fv-row">
                                        <label class="required upload-description-title">File Description</label>
                                        <textarea class="form-control" id="upload_description" rows="3"
                                            name="upload_description"></textarea>
                                    </div>
                                </div>
                                <label class="required upload-description-title">File</label>
                                <div class="upload-container fv-row">
                                    <input class="form-control " type="file" id="input_upload_file"
                                        name="input_upload_file">
                                </div>
                            </div>

                            <div class="text-center mt-4 modal-action">
                                <button type="reset" class="btn btn-discard me-3"
                                    data-users-modal-action="cancel">Discard</button>
                                <button type="submit" class="btn btn-submit" data-users-modal-action="submit">
                                    <span class="indicator-label">Submit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body-table">
            <div class="body-table-title">
                Office Document
            </div>
            <table class="table table-striped table-hover" id="all_department">
                <thead>
                    <tr>
                        <th class="column-width-20">Name</th>
                        <th>Description</th>
                        <th>Department</th>
                        <th>File</th>
                        <th class="text-center column-width-5">
                            <img class="btn-icon-more" src="assets/icons/more.png">
                        </th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>FAT-Project</td>
                        <td>Description</td>
                        <td>Procurement and Asset Management Department</td>
                        <td><a href="#">035.FAT-Project.pdf</a></td>
                        <td>
                            <div class="dropdown text-center">
                                <a href class="dropdown-toggle btn btn-more" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="btn-icon-more" src="assets/icons/more.png">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="content-dropdown-list">
                                        <li>
                                            <a href="#">
                                                <img class="dropdown-list-btn-icon" src="assets/icons/delete.png">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="dropdown-list-btn-icon" src="assets/icons/pencil.png">
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Course Portfolio Guideline and Materials for Academic Session 2020/09</td>
                        <td>Course Portfolio Preparation Guideline and Materials for Academic Session 2020/09</td>
                        <td>OFFICE OF ACADEMIC AFFAIRS (QUALITY ASSURANCE)</td>
                        <td><a href="#">Course Portfolio 2020.04.zip</a></td>
                        <td>
                            <div class="dropdown text-center">
                                <a href class="dropdown-toggle btn btn-more" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="btn-icon-more" src="assets/icons/more.png">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="content-dropdown-list">
                                        <li>
                                            <a href="#">
                                                <img class="dropdown-list-btn-icon" src="assets/icons/delete.png">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="dropdown-list-btn-icon" src="assets/icons/pencil.png">
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Course Portfolio Guideline and Materials for Academic Session 2021/09</td>
                        <td>Course Portfolio Guideline and Materials for Academic Session 2021/09</td>
                        <td>OFFICE OF ACADEMIC AFFAIRS (QUALITY ASSURANCE)</td>
                        <td><a href="#">Course Portfolio 202109.zip</a></td>
                        <td>
                            <div class="dropdown text-center">
                                <a href class="dropdown-toggle btn btn-more" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="btn-icon-more" src="assets/icons/more.png">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="content-dropdown-list">
                                        <li>
                                            <a href="#">
                                                <img class="dropdown-list-btn-icon" src="assets/icons/delete.png">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="dropdown-list-btn-icon" src="assets/icons/pencil.png">
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>TENANT OPERATION HOURS</td>
                        <td>To define the specific hours during which a tenant is allowed to access and use a rented
                            property or space.</td>
                        <td>PROCUREMENT AND ASSET MANAGEMENT OFFICE</td>
                        <td><a href="#">051. TENANT OPERATION HOURS.pdf</a></td>
                        <td>
                            <div class="dropdown text-center">
                                <a href class="dropdown-toggle btn btn-more" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="btn-icon-more" src="assets/icons/more.png">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="content-dropdown-list">
                                        <li>
                                            <a href="#">
                                                <img class="dropdown-list-btn-icon" src="assets/icons/delete.png">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="dropdown-list-btn-icon" src="assets/icons/pencil.png">
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

            <nav class="pagination-container" aria-label="pagination for table">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">2</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> --}}

    {{-- <x-sidemenu :departments="$departments"/> --}}

    <x-departments.upload-layout/>



    {{--  --}}





</x-layout>
