<div>
    <div class="page-header">
        <h1>Whoops - Error {{ $code }}</h1>
    </div>

    <div>
        <p>{{ $message ?: 'Whoops, looks like something went wrong.' }}</p>
        <a href="{{ route('pxcms.pages.home') }}" class="btn btn-info"><i class="fa fa-home"></i> Back Home</a>
    </div>
</div>
