<x-mail::message>
# Introduction

The body of your message.
__Name:__ {{ $validatedDate }}<br>



__Message__<br>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
