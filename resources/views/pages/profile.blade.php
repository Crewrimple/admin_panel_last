@extends('layout.app')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><span>@lang('profile.Profile')</span></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="\dashboard"><span>@lang('profile.Home')</span></a></li>
                    <li class="breadcrumb-item"><span>@lang('profile.Users')</span></li>
                    <li class="breadcrumb-item active"><span>@lang('profile.Profile')</span></li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{ asset('assets/img/images.png') }}" alt="Profile" class="rounded-circle">
                            <h2>{{ $user->name }}</h2>
                             <h3>{{ $user->email }}</h3>

                            
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">
                                        <span>@lang('profile.Overview')</span>
                                    </button>
                                </li>
                                

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit"
                                        aria-selected="false" tabindex="-1" role="tab">
                                        <span>@lang('profile.Profile Edit')</span>
                                    </button>
                                </li>

                                

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview"
                                    role="tabpanel">
                                    

                                    <h5 class="card-title"><span>@lang('profile.Profile Details')</span></h5>
                                       
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">@lang('profile.Full Name')</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">@lang('profile.Email')</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                    </div>
                                    

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
                                    <div class="container">
                                        <h1><span>@lang('profile.Profile Edit')</span></h1>
                                        @if(session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif
                                        <form method="post" action="{{ route('profile.update') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">@lang('profile.Full Name')</label>
                                                <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">@lang('profile.Email')</label>
                                                <input name="email" type="text" class="form-control" id="email" value="{{ $user->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="current_password">@lang('profile.Current Password')</label>
                                                <input name="current_password" type="password" class="form-control" id="current_password">
                                            </div>
                                            <div class="form-group">
                                                <label for="new_password">@lang('profile.New Password')</label>
                                                <input name="new_password" type="password" class="form-control" id="new_password">
                                            </div>
                                            <div class="form-group">
                                                <label for="new_password_confirmation">@lang('profile.Confirm New Password')</label>
                                                <input name="new_password_confirmation" type="password" class="form-control" id="new_password_confirmation">
                                            </div>
                                            
                                            
                                            <button type="submit" class="btn btn-primary"><span>@lang('profile.Save Changes')</span></button>
                                        </form>
                                    </div>
                                </div>
                                
                                
                               </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
