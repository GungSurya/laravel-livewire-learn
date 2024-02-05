@if (flash()->message)
    <div class="alert alert-{{ flash()->class ?? 'success' }}" role="alert">
        @if (flash()->class == 'warning' || flash()->class == 'danger')
            <i class="me-2 bi bi-exclamation-triangle-fill"></i>
        @endif
        @if (flash()->class == 'info')
            <i class="me-2 bi bi-info-circle-fill"></i>
        @endif
        @if (!flash()->class || flash()->class == 'info')
            <i class="me-2 bi bi-check-circle-fill"></i>
        @endif
        {{ flash()->message }}
    </div>
@endif
