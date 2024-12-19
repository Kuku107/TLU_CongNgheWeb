@include("partials.header")

<div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ route("issues.update", ["id" => $issue->id]) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="modal-header">
                <h4 class="modal-title">Update Issue</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tên máy tính</label>
                    <select class="form-select" name="computer_id">
                        @foreach($computers as $computer)
                            <option
                                value="{{ $computer->id }}"
                                {{ ($issue->computer->id == $computer->id) ? "selected" : "" }}>
                                {{ $computer->computer_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Người báo cáo sự cố</label>
                    <input name="reported_by" type="text" class="form-control" value="{{ $issue->reported_by }}" required>
                </div>
                <div class="form-group">
                    <label>Thời gian báo cáo</label>
                    <input name="reported_date" type="date" class="form-control" value="{{ \Carbon\Carbon::parse($issue->reported_date)->format('Y-m-d')  }}" required>

                </div>
                <div class="form-group">
                    <label>Mức độ</label>
                    <select class="form-select" name="urgency">
                        <option value="Low" {{ ($issue->urgency == "Low") ? "selected" : "" }}>Low</option>
                        <option value="Medium" {{ ($issue->urgency == "Medium") ? "selected" : "" }}>Medium</option>
                        <option value="High" {{ ($issue->urgency == "High") ? "selected" : "" }}>High</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Trạng thái hiện tại</label>
                    <select class="form-select" name="status">
                        <option value="Open" {{ ($issue->status == "Open") ? "selected" : "" }}>Open</option>
                        <option value="In Progress" {{ ($issue->status == "In Progress") ? "selected" : "" }}>In Progress</option>
                        <option value="Resolved" {{ ($issue->status == "Resolved") ? "selected" : "" }}>Resolved</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control" required>{{ $issue->description }}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Update">
            </div>
        </form>
    </div>
</div>

@include("partials.footer")
