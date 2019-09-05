@extends('emails.layout.basic')
@section('content')
    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td> 
                <p>
                    Hello {{$booking->full_name}}, <br/>
                    It will be a pleasure for us to serve you during your stay with The SR Hotel.
                    <br/>
                </p>
                <p>
                    This email is a confirmation email that we have received your booking request with the details attached below. <br/> <br/>

                    If you think any of the information is incorrect, or if you wish to modify your reservation details, please reply back and we will make the ammendments. 
                    <br/>
                </p>

                <p>
                    Once again, Thank you for choosing us.
                </p>
                <p>
                    <hr/>
                </p>

            </td>
        </tr>
        <tr>
            <td>
                <p>
                Below are the reservation details.<br/>
                Full Name: {{$booking->full_name}}<br/>
                Email: {{$booking->email_from}}<br/>
                Phone: {{$booking->phone}}<br/>
                Message: {{$booking->message}}<br/>
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
