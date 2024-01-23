@extends('admin.components.layout')

@section('content')

<div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        <div class="home-tab">
         {{-- tablist --}}

         {{-- end of tablist  --}}
          <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
              <div class="row">
                <div class="col-sm-12">
                 {{-- home statistic  --}}
                  @include('admin.components.statistics')
                 {{-- end of home statistic  --}}

                 {{-- Other section rows to be added below --}}
                

                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection