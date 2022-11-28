<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodisha Online House Rental</title>

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <style>
        html,
        body {
            font-family: 'Open Sans', sans-serif;
            height: 100%;
        }

        body {
            background: #FFFFFF;
            height: 100%;
        }
    </style>
</head>

<body>
    <section id="sidebar">
        <div class="white-label" style="background-color: black;">
        </div>
        <div id="sidebar-nav" style="background-color: black;">
            <div class="col-md-12" style="margin-top:30px; padding-bottom:30px;">
                <div class="profileimg">
                    <a href="#"><img title="Profile Image" style="    width: 120px; height:100px; margin-bottom: 20px; margin-left:22px;" src="{{asset('profile')}}/{{Illuminate\Support\Facades\Auth::user()->profile_img}}" alt=""></a>
                    <span style="color:white; margin-left:24px">{{Illuminate\Support\Facades\Auth::user()->adminrelation->first_name}}</span> <span style="color:red">{{Illuminate\Support\Facades\Auth::user()->adminrelation->last_name}}</span>
                </div>
            </div>
            <ul>
                <li><a href="{{route('admin_dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="{{route('tenant_info')}}"><i class="fa fa-info"></i> Tenant Info</a></li>
                <li><a href="{{route('agent_info')}}"><i class="fa fa-info"></i> Agent Info</a></li>
                <li class="active"><a href="{{route('agent_upgrade')}}"><i class="fa fa-thumbs-up"></i> Agent Upgradation</a></li>
                <li><a href="{{route('admin_profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </section>
    <section id="content">
        <div id="header">
            <div class="header-nav" style="background-color: black;">
                <div class="menu-button">
                    <!-- <i class="fa fa-navicon"></i> -->
                </div>
                <div class="nav">
                    <ul>
                        <li class="nav-settings">
                            @php
                            $count = \App\RegisterAgent::all()->where('is_recived','=',1)->where('is_upgrated','=',0)->count();
                            @endphp
                            <a href="{{route('advisor_upgrade')}}">
                                <div title="Notification" class="font-icon"><i class="fa fa-bell-o" aria-hidden="true"></i><span style="float: left; margin-right: 5px; margin-top: 3px;" class="badge badge-light">{{$count}}</span></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Jazz Transection ID</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $counter = 0;
                    @endphp
                    @foreach(App\User::all()->where('role_id_fk','=',3) as $advisor)
                    <tr>
                        <th scope="row">{{++$counter}}</th>
                        <td>{{$agent->agentrelation->first_name}}</td>
                        <td>{{$agent->agentrelation->last_name}}</td>
                        <td>{{$agent->email}}</td>
                        @if($agent->agentrelation->jazzid != null)
                        <td>{{$agent->agentrelation->jazzid->jazz_transection_id}}</td>
                        <td>{{$agent->agentrelation->jazzid->contact_no}}</td>
                        @else
                        <td>{{"Not Given"}}</td>
                        <td>{{"Not Given"}}</td>
                        @endif
                        <td>
                            @if($agent->agentrelation->is_upgrated==0)
                            <form action="{{route('advisor_upgrade_id')}}" method="post">
                                @csrf
                                <input type="hidden" name="ad_id" value="{{$agent->id}}">
                                <input style="background-color:black;color:white; border-style:none;cursor: pointer;" type="submit" value="Upgrade">
                            </form>
                            @else
                            <input style="background-color:black;color:white; border-style:none;" value="Upgraded">
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- smodel script -->

</body>

</html>