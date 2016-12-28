@if ( session()->has('alert_message'))
    <div class="alert alert-{{ session()->get('alert_class') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
        {{ ucwords(session()->get('alert_class')) }} {{ session()->get('alert_message') }}
    </div>
@endif