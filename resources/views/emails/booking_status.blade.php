@component('mail::message')
# Booking Status Update

Hello **{{ $booking->name }}**,

Your booking for room **{{ $booking->room?->room_title ?? 'N/A' }}** has been **{{ ucfirst($status) }}**.

@component('mail::button', ['url' => url('/')])
Visit Website
@endcomponent

Thanks,  
Hotel Management
@endcomponent
