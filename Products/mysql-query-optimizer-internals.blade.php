@extends('frontend.alayouts.main')
@include('frontend.service.partials.schema-ld-json')
@section('main-section')
     <!-- MAIN CONTENT SECTION (This section contains all the page content wrapped inside) -->
     @include('frontend.service.partials.sidebar')
                 <!-- Main Content Column (col-lg-7) -->
                 <div class="col-lg-7 main-content">
                     @php
                         // Get the current module object from the collection (or from a separate query)
                         $currentModuleObj = $allModules->firstWhere('slug', $currentModuleSlug);
                         
                         // Get module number (order_position)
                         $moduleNumber = $currentModuleObj->order_position ?? 1;
                         $moduleNumberFormatted = str_pad($moduleNumber, 2, '0', STR_PAD_LEFT);
                          
                         // Get module title
                         $moduleTitle = $currentModuleObj->title ?? 'Module Not Found';
                     @endphp
                     <h1 class="section-heading">{{ $currentModuleObj->title ?? 'Module Not Found' }}</h1>
                     <!-- Create by user name and created_at date time -->
                     @include('frontend.service.partials.create-by-user-name')
                     <hr style="border: 0; border-top: 2px dashed #bbb;">
                     @if($currentModuleObj)
                     <!-- ===================================================== -->
                     <!-- Module {{ $moduleNumberFormatted }} Start : {{ $moduleTitle }} -->
                     <!-- ===================================================== -->
                     <div class="module" id="module-{{ $moduleNumber }}">
                         
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         
                         @include('frontend.service.partials.in-article-ads')
                         <hr style="border: 0; border-top: 2px dashed #bbb;">
                         <!-- ===== Module Completion Section Start ===== -->
                         <div class="text-center mt-4 mb-4">
                             <p class="fw-bold text-success">
                                 ✅ Module {{ $moduleNumberFormatted }} : {{ $moduleTitle }} Successfully Completed
                             </p>
                             <p class="text-muted mb-2">
                                 You have successfully completed this module of 
                                 <strong>{{ $product->product_name }}</strong>.
                             </p>
                             <p class="text-muted">
                                 Keep building your expertise step by step — 
                                 <strong class="text-primary">Learn Next Module →</strong>
                             </p>
                         </div>
                         <hr style="border: 0; border-top: 2px dashed #bbb;">
                         <!-- ===== Module Completion Section End ===== -->
                     </div>
                     <!-- Module {{ $moduleNumberFormatted }} End : {{ $moduleTitle }} -->
                     <!-- ===================================================== -->
                     @else
                         <!-- No Module Selected -->
                         <div class="text-center py-5">
                             <h2 class="fw-bold" style="color: #f4952f;">Module Not Found</h2>
                             <p class="text-muted">Please select a module from the sidebar.</p>
                         </div>
                     @endif
                 </div>
                 <!-- Main Content Column Ending (col-lg-7) -->
                 @include('frontend.service.partials.footer')
@endsection