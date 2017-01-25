<form action="{{ url('event/'.$event->id) }}" method="POST">
    {!! csrf_field() !!}
    {!! method_field('DELETE') !!}

    <button type="submit" id="delete-task-{{ $event->id }}" class="btn btn-danger">
        <i class="fa fa-btn fa-trash"></i>Delete
    </button>
</form>