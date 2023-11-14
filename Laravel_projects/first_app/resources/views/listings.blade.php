<h1>{{$Heading}}</h1>

{{-- @dd($listings); --}}

@if (empty($listings))
<p>There are no listings</p>  
@else
{{-- @foreach ($listings as $item) --}}
<h3>   {{$listings['title']}}</h3>
<p> {{$listings['content']}}</p>
{{-- @endforeach --}}
@endif
