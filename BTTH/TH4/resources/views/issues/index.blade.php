@include("partials.header")
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Issues</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route("issues.create") }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Issue</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Mã vấn đề</th>
                    <th>Tên máy tính</th>
                    <th>Tên phiên bản</th>
                    <th>Người báo cáo sự cố</th>
                    <th>Thời gian báo cáo</th>
                    <th>Mức độ sự cố</th>
                    <th>Trạng thái hiện tại</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($issues as $issue)
                    <tr>
                        <td>{{ $issue->id }}</td>
                        <td>{{ $issue->computer-> computer_name}}</td>
                        <td>{{ $issue->computer->model }}</td>
                        <td>{{ $issue->reported_by }}</td>
                        <td>{{ $issue->reported_date }}</td>
                        <td>{{ $issue->urgency }}</td>
                        <td>{{ $issue->status }}</td>
                        <td>
                            <a href="{{ route("issues.edit", ["id" => $issue->id]) }}" class="edit"><i class="material-icons"  title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal-{{ $issue->id }}" data-toggle="modal" class="delete"><i data-toggle="tooltip" class="material-icons" title="Delete">&#xE872;</i></a>
                        </td>

                        <!-- Delete Modal HTML -->
                        <div id="deleteEmployeeModal-{{ $issue->id }}" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route("issues.destroy", ["id" => $issue->id]) }}" method="post">
                                        @csrf
                                        @method("delete")
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Issue</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete issue {{ $issue->id }}?</p>
                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $issues->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>

@include("partials.footer")
