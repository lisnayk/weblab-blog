<div class="table-responsive-sm">
    <table class="table table-striped" id="statuses-table">
        <thead>
            <th>Name</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($statuses as $status)
            <tr>
                <td>{!! $status->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['statuses.destroy', $status->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('statuses.show', [$status->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('statuses.edit', [$status->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>