@component('mail::message')
<div style="text-align: right !important;direction: rtl !important">
<p style="text-align: right !important;direction: rtl !important">>وبسایتی با  مشخصات زیر برای شما ارسال شد. لطفا پیگیری  های لازم رو انجام دهید.</p>
 <p>{{ $name}}</p>
<p>{{ $phone }}</p>
<p>{{ $email }}</p>
<a href="{{ $site }}"></a>

</div>


@endcomponent
