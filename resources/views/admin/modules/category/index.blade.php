@extends('admin.layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12">
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="flex">
        <div class="w-1/2 xxl:col-span-3 -mb-10 pb-10 mb-5 mr-5">
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <a href="{{route('categoryCreate')}}" class="button text-white bg-theme-1 shadow-md mr-2">კატეგორიის დამატება</a>
            </div>
            <div class="intro-y datatable-wrapper box p-5 mt-5">
                <table class="table table-report table-report--bordered display datatable w-full">
                    <thead>
                    <tr>
                        <th class="border-b-2 whitespace-no-wrap">#</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">კატეგორიის სახელი ქართულად</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">მოქმედება</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $cat)
                        <tr>
                            <td class="border-b">
                                <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $cat->id }}</div>
                            </td>
                            <td class="border-b">
                                <div class="flex items-center sm:justify-center "> {{ $cat->title_ge }}</div>

                            </td>
                            <td class="border-b w-5">
                                <div class="flex sm:justify-center items-center">
                                    <a class="flex items-center mr-3" href={{route('categoryUpdate',$cat->id)}}> <i
                                                data-feather="check-square" class="w-4 h-4 mr-1"></i> რედაქტირება </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-1/2 xxl:col-span-3 -mb-10 pb-10 mb-5 mr-5">
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <a href="{{route('subCategoryCreate')}}" class="button text-white bg-theme-1 shadow-md mr-2">ქვე კატეგორიის დამატება</a>
            </div>
            <div class="intro-y datatable-wrapper box p-5 mt-5">
                <table class="table table-report table-report--bordered display datatable w-full">
                    <thead>
                    <tr>
                        <th class="border-b-2 whitespace-no-wrap">#</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">კატეგორიის სახელი ქართულად</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">მოქმედება</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subCategories as $cat)
                        <tr>
                            <td class="border-b">
                                <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $cat->id }}</div>
                            </td>
                            <td class="border-b">
                                <div class="flex items-center sm:justify-center "> {{ $cat->title_ge }}</div>

                            </td>
                            <td class="border-b w-5">
                                <div class="flex sm:justify-center items-center">
                                    <a class="flex items-center mr-3" href={{route('subCategoryUpdate',$cat->id)}}> <i
                                                data-feather="check-square" class="w-4 h-4 mr-1"></i> რედაქტირება </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('custom_scripts')
    <script type="text/javascript">
        $('.side-menu').removeClass('side-menu--active');
        $('.data-menu-item').removeClass('side-menu__sub-open');
        $('.side-menu[data-menu="shop"]').addClass('side-menu--active');
        $('.data-menu-item[data-menu="shop"]').addClass('side-menu__sub-open');
    </script>
@endsection