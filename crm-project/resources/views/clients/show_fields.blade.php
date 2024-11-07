<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $clients->first_name }}</p>
</div>

<!-- Second Name Field -->
<div class="col-sm-12">
    {!! Form::label('second_name', 'Second Name:') !!}
    <p>{{ $clients->second_name }}</p>
</div>

<!-- Phone Numbers Field -->
<div class="col-sm-12">
    {!! Form::label('phone_numbers', 'Phone Numbers:') !!}
    <p>{{ $clients->phone_numbers }}</p>
</div>

<!-- Customer Email Field -->
<div class="col-sm-12">
    {!! Form::label('customer_email', 'Customer Email:') !!}
    <p>{{ $clients->customer_email }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $clients->location }}</p>
</div>

<!-- Company Name Field -->
<div class="col-sm-12">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $clients->company_name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $clients->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $clients->updated_at }}</p>
</div>

