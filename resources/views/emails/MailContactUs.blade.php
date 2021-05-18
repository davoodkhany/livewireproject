@component('mail::message')

<div style="text-align: center!important;direction: rtl !important">
    <h5 style="text-align: center!important;direction: rtl !important">{{ $name }}</h5>
    <p style="text-align: right!important;direction: rtl !important"> {{ $phone }}</p>
    <h2 style="text-align: right!important;direction: rtl !important">{{ $subject }}</h2>
    <p style="text-align: right!important;direction: rtl !important">{{ $message }}</p>

</div>


@endcomponent
