@php
    // Tasks items
    $listRows = array(
        array(
            'icon' => 'abstract-26',
            'color' => 'success',
            'title' => 'Project Briefing',
            'description' => 'Project Manager',
        ),

        array(
            'icon' => 'pencil',
            'color' => 'warning',
            'title' => 'Concept Design',
            'description' => 'Art Director'
        ),

        array(
            'icon' => 'message-text-2',
            'color' => 'primary',
            'title' => 'Functional Logics',
            'description' => 'Lead Developer'
        ),

        array(
            'icon' => 'disconnect',
            'color' => 'danger',
            'title' => 'Development',
            'description' => 'DevOps'
        ),

        array(
            'icon' => 'security-user',
            'color' => 'info',
            'title' => 'Testing',
            'description' => 'QA Managers'
        ),

        array(
            'icon' => 'file-up',
            'color' => 'success',
            'title' => 'HTML, CSS Coding',
            'description' => 'Art Director'
        ),

        array(
            'icon' => 'chart-pie-4',
            'color' => 'danger',
            'title' => 'ReactJS Developer',
            'description' => 'Web, UI/UX Design'
        )
    );
@endphp

<!--begin::Tasks-->
<div class="mx-5">
    <!--begin::Header-->
    <h3 class="fw-bolder text-dark mb-10 mx-0">
        Tasks Overview
    </h3>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="mb-12">
        @foreach($listRows as $row)
            <!--begin::Item-->
            <div class="d-flex align-items-center {{ util()->putIf(next($listRows), 'mb-7') }}">
                <!--begin::Symbol-->
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label bg-light-{{ $row['color'] }}">
                        {!! theme()->getIcon($row['icon'], "fs-2x svg-icon-" . $row['color']); !!}
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column">
                    <a href=" {{ theme()->getPageUrl('pages/profile/overview') }}" class="text-gray-800 text-hover-primary fs-6 fw-bold">{{ $row['title'] }}</a>

                    <span class="text-muted fw-bold">{{ $row['description'] }}</span>
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
        @endforeach
    </div>
    <!--end::Body-->
</div>
<!--end::Tasks-->
