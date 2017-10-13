<h1>Hello new things</h1>
<h2>O proekte: {{$bodyMessage}}</h2>
{{$company}}
{{$full_name}}
{{$phone}}
{{$budget}}
<br>
@foreach($orders as $order)
    @switch($num =(int)$order)
        @case(1)
        1 input is empty!
        @break
        @case(2)
        2 input is empty!
        <br>
        @break
        @case(3)
        3 input is empty!
        @break
        @case(4)
        4 input is empty!
        @break
        @case(5)
        5 input is empty!
        @break
        @case(6)
        6 input is empty!
        @break
        @case(7)
        7 input is empty!
        @break
        @case(8)
        8 input is empty!
        @break
    @endswitch
@endforeach
<p>Sent an email {{$email}}</p>


