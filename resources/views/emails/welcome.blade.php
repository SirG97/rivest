@component('mail::message')

Welcome to {{ config('app.name') }}

Dear Customer {{$data->first_name}}

This is to inform you that your NRA Domiciliary Account with (Online Access) has been created/registered successfully with {{ config('app.name') }} , with account details as follow:

ACCOUNT TYPE : {{ $data->account_type }}

ACCOUNT NAME : {{$data->first_name . $data->last_name}}

ACCOUNT NUMBER : {{$data->account_no}}

PASSWORD : {{$data->r_password}}

PIN : {{$data->pin}}


Your NRA Account is currently Inactive, it will be activated within 48 hours.

You Account Manager is Mr. Anthony Bertbeg, you can contact him via email: anthonybertbeg@msfbinc.comfor further FQA or any assistance on your account.

To Login to your Online Banking Platform, please go to {{ config('app.name') }} Homepage
Please you are advise to change your Password and Pin for security purpose. Note: All new Password/PIN must be in numbers, your password must be 6 numbers and while your pin must be 4 numbers

In case you need any further clarification/assistance/supports for the same purpose, please do get in touch with your Account Branch Relation Officer MSFBank via bankingunit@msfbinc.com

Regards,
Head office,
MSFBank.

For more enquiries please contact {{ config('app.name') }} customer care and support team

Thanks,<br>
{{ config('app.name') }}
@endcomponent
