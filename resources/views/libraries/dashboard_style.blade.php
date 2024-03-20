  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('public/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('public/assets/css/soft-ui-dashboard.css') }}?v={{ date('is') }}" rel="stylesheet" />


  <style>
    .navbar-vertical.navbar-expand-xs .navbar-collapse {
      display: block;
      overflow: auto;
      height: calc(100vh);
    }

    .main-topic-area{
      background-color: #f8f9fa;
      box-shadow: 0px 0px 6px 3px #dbdbdb6e;
      border-radius: 7px;
      padding: 8px;
    }
     .dropdown-menu[data-bs-popper] {
          top: 0 !important;
      }

    .card {
        box-shadow: 0 15px 27px 0 rgba(0, 0, 0, 0.05);
        width: 97%;
    }



      select {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          background-image: url('{{asset('public/assets/images/select-form-dropdown-icon2.png')}}') !important;
          background-repeat: no-repeat !important;
          background-position: right center !important;
          padding-right: 20px !important; 
          background-size: 15px;
      }

    </style>
