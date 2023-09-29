@php
    // Notifications items
    $listRows = array(
        array(
            'color' => 'warning',
            'icon' => 'abstract-26',
            'title' => 'Group lunch celebration',
            'text' => 'Due in 29 Days',
            'number' => '+28%'
        ),

        array(
            'color' => 'success',
            'icon' => 'file-added',
            'title' => 'Navigation optimization',
            'text' => 'Due in 2 Days',
            'number' => '+50%'
        ),

        array(
            'color' => 'danger',
            'icon' => 'message-text-2',
            'title' => 'Humbert Bresnen',
            'text' => 'Due in 5 Days',
            'number' => '-27%'
        ),

        array(
            'color' => 'info',
            'icon' => 'briefcase',
            'title' => 'Air B & B - Real Estate',
            'text' => 'Due in 8 Days',
            'number' => '+21%'
        ),

        array(
            'color' => 'primary',
            'icon' => 'arrows-loop',
            'title' => 'B & Q - Food Company',
            'text' => 'Due in 6 Days',
            'number' => '+12%'
        ),

        array(
            'color' => 'danger',
            'icon' => 'pencil',
            'title' => 'Nexa - Next generation',
            'text' => 'Due in 4 Days',
            'number' => '+34%'
        )
    );
@endphp

<!--begin::Notifications-->
<div class="mx-5">
    <!--begin::Header-->
    <h3 class="fw-bolder text-dark mb-10 mx-0">Notifications</h3>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="mb-12">
        @foreach($listRows as $row)
            <!--begin::Item-->
            <div class="d-flex align-items-center bg-light-{{ $row['color'] }} rounded p-5 {{ util()->putIf(next($listRows), 'mb-7') }}">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-{{ $row['color'] }} me-5">
                    {!! theme()->getIcon($row['icon'], "fs-1 svg-icon-" . $row['color']); !!}
                </span>
                <!--end::Icon-->

                <!--begin::Title-->
                <div class="flex-grow-1 me-2">
                    <a href=" {{ theme()->getPageUrl('widgets/lists') }}" class="fw-bolder text-gray-800 text-hover-primary fs-6">{{ $row['title'] }}</a>

                    <span class="text-muted fw-bold d-block">{{ $row['text'] }}</span>
                </div>
                <!--end::Title-->

                <!--begin::Lable-->
                <span class="fw-bolder text-{{ $row['color'] }} py-1">{{ $row['number'] }}</span>
                <!--end::Lable-->
            </div>
            <!--end::Item-->
        @endforeach
    </div>
    <!--end::Body-->
</div>
<!--end::Notifications-->
