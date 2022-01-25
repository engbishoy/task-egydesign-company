<div class="d-flex justify-content-end flex-shrink-0 p-1">
    @foreach ($buttons as $button)
        @if ($button['conditions'])
        <a  href="javascript:;" 
            class="{{ $button['classes'] }}" 
            data-action-btn="true"
            {{-- only if tooltip enabled --}}
            {{ $button['tooltip']['disabled'] == false ? 'data-bs-toggle=tooltip data-bs-custom-class=tooltip-'.$button['tooltip']['color'].' data-bs-placement='.$button['tooltip']['placement'] : '' }}
            title="{{ $button['title'] }}"
            data-action="{{ $button['action'] }}"
            data-action-type="{{ $button['actiontype'] }}"
            data-action-url="{{ $button['url'] }}"
            data-action-method="{{ $button['actionMethod'] }}"
            {{-- only if alert --}}
            {{ ($button['actiontype'] == 'alert') ? '
            data-alert-title='.$button['alertOptions']['title'].'
            data-alert-icon='.$button['alertOptions']['icon'].'
            data-alert-confirm-text='.$button['alertOptions']['confirmButtonText'].'
            data-alert-cancel-text='.$button['alertOptions']['cancelButtonText'].'
            data-alert-confirm-btn-classes='.$button['alertOptions']['confirmButtonClasses'].'
            data-alert-cancel-btn-classes='.$button['alertOptions']['cancelButtonClasses'].'
            data-alert-show-cancel='.$button['alertOptions']['showCancelButton'].'
            data-alert-btn-style='.$button['alertOptions']['buttonsStyling']
                : ''}}
            >
            <span class="svg-icon svg-icon-3">
                @include('backend_theme::svgs.' . $button['icon'])
            </span>
        </a>
        @endif
    @endforeach
</div>