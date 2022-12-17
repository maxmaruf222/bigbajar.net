@if ($errors->any())
    <div class="m-4">
        <ul class="alert alert-danger alert-dismissible fade show">
            <h4 class="alert-heading"><i class="bi-exclamation-octagon-fill"></i> Oops! Something went wrong.</h4>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
