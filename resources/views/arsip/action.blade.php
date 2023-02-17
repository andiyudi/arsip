 <div class="table-actions">
    <a href="{{ route($route.'.edit', $data->id) }}" class="btn btn-sm btn-outline-warning action"><i class="ti-pencil"></i></a>
    <a href="{{ route($route.'.show', $data->id) }}" class="btn btn-sm btn-outline-info action"><i class="ti-info"></i></a>
    <form action="{{ route($route.'.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-outline-danger action"><i class="ti-trash"></i></button>
    </form>
</div>