<!--begin::Quick Search-->
<form id="kt_sidebar_search_form" action="{{ theme()->getPageUrl('apps/devs/search') }}"  class="w-100 position-relative mb-5 mb-lg-10" autocomplete="off">
    <!--begin::Hidden input(Added to disable form autocomplete)-->
    <input type="hidden"/>
    <!--end::Hidden input-->

    <!--begin::Icon-->
    {!! theme()->getIcon("magnifier", "fs-2 text-gray700 position-absolute top-50 translate-middle-y ms-4") !!}
    <!--end::Icon-->

    <!--begin::Input-->
    <input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" value="" placeholder="Search"/>
    <!--end::Input-->
</form>
<!--end::Quick Search-->
