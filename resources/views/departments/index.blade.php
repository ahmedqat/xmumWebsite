<x-layout>
<x-departments.upload-layout/>


{{-- Table goes here --}}

<div class="content-body-table">
    <div class="body-table-title">
        Documents for {{ $department->name }}
    </div>
    <table class="table table-striped table-hover"  id="documentTable">
        <thead>
            <tr>
                <th class="column-width-20">Name</th>
                <th>Description</th>
                <th>Department</th>
                <th>File</th>
                {{-- <th class="text-center column-width-5">
                    <img class="btn-icon-more" src="{{ asset('assets/icons/more.png') }}">
                </th> --}}
            </tr>
        </thead>
        <tbody>

            @if (count($documents) == 0)

            <tr>
             <td>  <p>No Documents Uploaded</p> </td>
             <td>  <p>No Documents Uploaded</p> </td>
             <td>  <p>No Documents Uploaded</p> </td>
             <td>  <p>No Documents Uploaded</p> </td>
            </tr>


            @endif


            @foreach ($documents as $document)
                <tr>
                    <td>{{ $document->title }}</td>
                    <td>{{ $document->description }}</td>
                    <td>{{ $department->name }}</td>
                    <td>

                        <a href="{{ asset('storage/' . $document->path) }}" download="{{ $document->file_name }}">
                            {{ $document->file_name}}
                        </a>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



    {{-- <div class="mt-6 p-4">
        {{ $documents->links('vendor.pagination.bootstrap-5') }}
    </div> --}}
    <script>

        $('#documentTable').DataTable({
            "pageLength":10
        });
    </script>






</x-layout>
