@component('mail::message')
{{$blog->blog}}

{{$blog->description}}
@component('mail::button', ['url' => url('/blog/' . $blog->id)])
Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
