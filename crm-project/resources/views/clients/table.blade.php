<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="clients-table">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Phone Numbers</th>
                <th>Customer Email</th>
                <th>Location</th>
                <th>Company Name</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $clients)
                <tr>
                    <td>{{ $clients->first_name }}</td>
                    <td>{{ $clients->second_name }}</td>
                    <td>{{ $clients->phone_numbers }}</td>
                    <td>{{ $clients->customer_email }}</td>
                    <td>{{ $clients->location }}</td>
                    <td>{{ $clients->company_name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['clients.destroy', $clients->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('clients.show', [$clients->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('clients.edit', [$clients->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $clients])
        </div>
    </div>
</div>
