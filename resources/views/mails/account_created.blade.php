<x-mail::message>
# Hello {{$user->name}}

<p>Your registration for our Investing in Development conference has been confirmed! We appreciate your interest in our event and look forward to seeing you there. </p>

<p>Here are the details of your registration: </p>

 <p>Event: Investing in Development</p>
 <p>Date: Wednesday, May 10th, 2023</p>
 <p>Time: 9 AM </p>
 <p>Venue: Eko Hotel & Suites, Adetokunbo Ademola Street, Victoria Island, Lagos </p>

<p><a href="https://bit.ly/424JNxb">Add to Calendar</a> </p>

<p>Your registration includes access to all sessions, networking opportunities, and conference materials. </p>

<p>To make the most of your experience, we encourage you to arrive on time and take advantage of the opportunities to network and connect with other attendees. </p>

<p>If you have any questions or concerns, please do not hesitate to contact us at ir@chapelhilldenham.com</p>

<p>
    <img src="{{asset('images/banner.png')}}" alt="Banner" />
</p>

<p>
    <img src="{{asset("qrcode/" . $user->email . "/file.png")}}" alt="QR Code">
</p>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
