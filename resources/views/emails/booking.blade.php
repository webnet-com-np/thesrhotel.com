@extends('emails.layout.basic')
@section('content')
    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
            	<p>
                A new booking was made from the website. Below are the bookig details.<br/>
                Full Name: {{$booking->full_name}}<br/>
                Email: {{$booking->email_from}}<br/>
                Phone: {{$booking->phone}}<br/>
                Message: {{$booking->message}}<br/>
                <br/>
                <br/>
                Reservation details are as follows <br/>
                No of Adult(s): {{$booking->adult}}<br/>
                No of Children(c): {{$booking->children}}<br/>
                Room Type: {{$booking->room_type}}<br/>
                Arrival Date: {{$booking->arrival_date}}<br/>
                Departure Date: {{$booking->departure_date}}<br/>
            	</p>
            </td>
        </tr>
    </table>
@stop
