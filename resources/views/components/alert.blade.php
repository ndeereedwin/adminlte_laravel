<div class="row">
    <div class="col-md-10">
        @if (count($errors) > 0)
            @foreach ($errors as $error)
                <div class="alert alert-danger alert-dismissible">
                    <small>{{ $error }}</small>
                </div>
            @endforeach
        @endif


        @if (session('success'))
            <div class="alert alert-success alert-dismissible">
                <small> {{ session('success') }}</small>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times; </button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible">
                <small>{{ session('error') }}</small>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times; </button>
            </div>
        @endif
    </div>
</div>
