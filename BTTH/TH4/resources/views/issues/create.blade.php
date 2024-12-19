@include("partials.header")

<div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ route("issues.store") }}" method="POST">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Add Issue</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tên máy tính</label>
                    <select class="form-select" name="computer_id">
                        @foreach($computers as $computer)
                            <option value="{{ $computer->id }}">{{ $computer->computer_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Người báo cáo sự cố</label>
                    <input name="reported_by" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Thời gian báo cáo</label>
                    <input name="reported_date" type="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Mức độ</label>
                    <select class="form-select" name="urgency">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Trạng thái hiện tại</label>
                    <select class="form-select" name="status">
                        <option value="Open">Open</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Resolved">Resolved</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
    </div>
</div>

@include("partials.footer")
