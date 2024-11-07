<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Second Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('second_name', 'Second Name:') !!}
    {!! Form::text('second_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Phone Numbers Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_numbers', 'Phone Numbers:') !!}
    {!! Form::text('phone_numbers', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Customer Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_email', 'Customer Email:') !!}
    {!! Form::text('customer_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
</div>