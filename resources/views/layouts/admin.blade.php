<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="@lang('auth.swithlang')" xml:lang="@lang('auth.swithlang')"><head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="shortcut icon" href="{{ asset('assets/admin/images/icon-phum.png') }}"> 
		<link rel="stylesheet"    href="{{ asset('assets/admin/js/bootstrap/bootstrap.min.css') }}">
		<link rel="stylesheet"    href="{{ asset('assets/admin/css/style-admin.css') }}">

		<script type="text/javascript" src="{{ asset('assets/admin/js/dashboard/jquery.min.js') }}"></script>
<!--
		<script type="text/javascript">
		window.onload = function() {
		   $('body.sidebar-mini').addClass('sidebar-collapse');
		};</script>
-->
		<?php /* data picker */ ?>
		<link rel="stylesheet" href="{{ asset('assets/admin/js/datepicker/datepicker.css') }}">
		<script type="text/javascript" src="{{ asset('assets/admin/js/datepicker/bootstrap-datepicker.js') }}"></script>

		<?php /* select chosen */ ?>
		<link rel="stylesheet" href="{{ asset('assets/admin/js/chosen/chosen.min.css') }}">
		<script src="{{ asset('assets/admin/js/chosen/chosen.jquery.min.js') }}"></script>
		
		<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
		
		<script type="text/javascript" src="{{ asset('assets/admin/js/validator/va-ch.js') }}"></script>
		<?Php /* Datatables */?>
		<script src="{{ asset('assets/admin/js/datatable/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/admin/js/datatable/dataTables.bootstrap.min.js') }}"></script>
		<?php /* for Datatable Responsive */ ?>
		<link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>


		
	</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $i = Auth::user()->images; ?>
<div class="wrapper">
    <header class="main-header">

         <a href="" class="logo">
            <span class="logo-mini">
            	<img src="{{ asset ('assets/admin/images/avatar5.png') }}">
           </span>
            <span class="logo-lg"><img src="{{ asset ('assets/admin/images/newgif.gif') }}"></span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas"role="button">
                <span class="sr-only">Toggle navigation</span>
                <img src="{{ asset('assets/admin/images/hamburger.png') }}"/>
            </a>
          

            <div class="navbar-custom-menu hidden-xs">
                <ul class="nav navbar-nav">
                  
				
                   
                    <li class="dropdown user user-menu">
                        <a href="{{ asset('/logout') }}" class="dropdown-toggle1" data-toggle="dropdown" >
                           <img src="{{ asset ('assets/admin/images/avatar5.png') }}" class="img-circle" width="25px" height="25px">
                           {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                           <div class="arrow-border"></div>
                            <li class="user-header">
                                <img src="{{ asset ('assets/admin/images/avatar5.png') }}" class="img-circle" alt="User Image">
                                <p>{{ Auth::user()->name }}</p>
                            </li>
                            <div class="col-sm-12 groups-management">
                            	<li class="edite-profile">
									<a href=""><span class="fa fa-edit"></span>edit profile</a>
								</li>
                           		<li class="sign-out">
									<a href="{{asset('/logout')}}"><span class="fa fa-sign-out"></span>Logout</a>
								</li>
                            </div>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header><!-- header -->
	
    <aside class="main-sidebar">
        <section class="sidebar">
         
         	<ul class="sidebar-menu">
				<li class="treeview">
					<a href="#">
						<i class="fa fa-list-alt"></i>
						<span>Staff</span>
						<i class="fa fa-angle-up pull-right"></i>
					</a>
					<ul class="treeview-menu" id="treeopen">
						<li><a  href=""><i class="fa fa-circle-o"></i>List All Groups</a></li>
					</ul>
				</li>
			</ul>
        
        	
         
          	 


        </section>
    </aside><!-- main-sidebar -->
</div><!-- wrapper -->

@yield('content')

<div class="wrapper">
	<div class="footer main-footer">
		<div class="col-sm-12">
			<span class="pull-left">
			sdfsd
			</span>
			<span class="pull-right hidden-xs version-system">Version 0.1</span>
		</div>
	</div>
</div>



<?Php /* theme */?>
<script src="{{ asset('assets/admin/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/dashboard/app.min.js') }}"></script>
<?Php /* validation for ajax */?>
<script src="{{ asset('assets/admin/js/validator/jquery.validate.min.js') }}"></script>


<?php /* for change images */ ?>
<link href="{{ asset('assets/admin/js/jasny-bootstrap/jasny-bootstrap.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/admin/js/jasny-bootstrap/jasny-bootstrap.min.js') }}"></script>

<?php /* For Check Password Strong Or Good.... */ ?>
<script src="{{ asset('assets/admin/js/validator/passwordscheck.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){
      $('.khmer').click(function() {
        var st = window.location.href;
        if(st.match('(\/kh)')){
           window.location.replace(window.location.href)
        }else if (st.match('(\/en)')){
            window.location.replace(st.replace('\/en','\/kh'))
        }else{
          window.location.replace(st+"kh")
        }
      });
      $('.english').click(function(){
        var st = window.location.href;
        if(st.match('(\/en)')){
           window.location.replace(window.location.href)
        }else if (st.match('(\/kh)')){
            window.location.replace(st.replace('\/kh','\/en'))
        }else{
          window.location.replace(st+"en")
        }
      });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
		window.setTimeout(function() {  
			$(".alert").fadeOut({opacity: 0}, 500).hide('slow');
		}, 3000);

		$("div.alert").on("click", "button.close", function() {
			$(this).parent().fadeOut({opacity: 0}, 500).hide('slow');
		});

        //Date picker
        $(".datepicker").datepicker({ format: 'yyyy-mm-dd',autoclose: true });
        function today(){
            var d = new Date();
            var curr_date = d.getDate();
            var curr_month = d.getMonth() + 1;
            var curr_year = d.getFullYear();
            document.write(curr_date + "-" + curr_month + "-" + curr_year);
        }

        // JQuery for active menu
        $(function(){
            var asset = window.location.href;
            $(".treeview a").each(function() {

                if(asset == (this.href)) {
                    $(this).closest(".treeview").addClass("treeview active");
                    $(this).closest(".treeview-menu li a").addClass("active-page");
                }
            });
        });

    });

    $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
    });
	
	$(function() {
	  var loc = window.location.href; // returns the full URL
	  if(/en/.test(loc)) {
		$('a .mylange').addClass('english');
	  }else if(/kh/.test(loc)) {
		$('a .mylange').addClass('khmer');
	  }else{
		  $('a .mylange').addClass('english');
	  }
	});

</script>

</body>
</html>
