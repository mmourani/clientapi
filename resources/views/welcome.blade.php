@extends('layout.master')

@section('content')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Business Network 1 - Abu Dhabi Municipality</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
<div class="container">
  <div class="row align-items-start">
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 1</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 1</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 2</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 2</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 3</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 3</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
  </div>
</div>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Business Network 2 - Abu Dhabi Bank</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <div class="container">
  <div class="row align-items-start">
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 1</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 1</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 2</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 2</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 3</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 3</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
  </div>
</div>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Business Network 3 - Abu Dhabi Brokers</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

<div class="container">
  <div class="row align-items-start">
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 1</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 1</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 2</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 2</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 3</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 3</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
  </div>
</div>
</main>

@endsection

