@extends('dashboard.layout.app')
@section('content')
    <style>
        .photo-content .cover-photo {
            background: url(../images/profile/cover.jpg);
            background-size: cover;
            background-position: center;
            min-height: 15.625rem;
            width: 100%;
        }
    </style>
<div class="content-body" style="min-height: 1056px;">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo rounded"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="{{ asset('img/avatar.png') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">{{ $user->name }}</h4>
                                    <p class="badge bg-danger text-white">Investor</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{ $user->email }}</h4>
                                    <p>Email</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center">

                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-primary mb-1 me-1 active">My Profile</a>
                                            <a href="javascript:void(0);" class="btn btn-primary mb-1 me-1">Edit Profile</a>
                                            <a href="javascript:void(0);" class="btn btn-primary mb-1" >Security</a>
                                        </div>
                                    </div>
                                    <!-- Modal -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-8">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#my-posts"  class="nav-link active show">My Profile</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#about-me"  class="nav-link" >Edit Profile</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#profile-settings"  class="nav-link" >Security</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="my-posts" class="tab-pane fade active show" role="tabpanel">
                                        <div class="my-post-content pt-3">
                                            <div class="table-responsive">
                                                <table class="table table-striped" style="width:100%">
                                                    <tr>
                                                        <th>Joined At:</th>
                                                        <td>{{ date('d M, Y', strtotime($user->created_at)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Name:</th>
                                                        <td>{{ $user->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email:</th>
                                                        <td>{{ $user->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Username:</th>
                                                        <td>{{ $user->username }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Telephone:</th>
                                                        <td>{{ $user->phone ? : "N/A" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Telegram:</th>
                                                        <td>{{ "@".$user->telegram ? : "N/A" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Country:</th>
                                                        <td>{{ $user->country ? : "N/A" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>State:</th>
                                                        <td>{{ $user->state ? : "N/A" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>City:</th>
                                                        <td>{{ $user->city ? : "N/A" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address:</th>
                                                        <td>{{ $user->address ? : "N/A" }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="about-me" class="tab-pane fade" role="tabpanel">
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">
                                                <h5 class="text-primary">About Me</h5>
                                                <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                                <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                            </div>
                                        </div>
                                        <div class="profile-skills mb-5">
                                            <h5 class="text-primary mb-2">Skills</h5>
                                            <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Admin</a>
                                            <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                            <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                            <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                            <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                            <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Crypto</a>
                                        </div>
                                        <div class="profile-lang  mb-5">
                                            <h5 class="text-primary mb-2">Language</h5>
                                            <a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a>
                                            <a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                            <a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                        </div>
                                        <div class="profile-personal-info">
                                            <h5 class="text-primary mb-4">Personal Information</h5>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Name <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>Mitchell C.Shay</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>example@examplel.com</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Availability <span class="pull-end">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>Full Time (Free Lancer)</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Age <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>27</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Location <span class="pull-end">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>Rosemont Avenue Melbourne,
                                                                Florida</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Year Experience <span class="pull-end">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>07 Year Experiences</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profile-settings" class="tab-pane fade" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h5 class="text-primary">Account Setting</h5>
                                                <form>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" placeholder="Email" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Password</label>
                                                            <input type="password" placeholder="Password" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Address</label>
                                                        <input type="text" placeholder="1234 Main St" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Address 2</label>
                                                        <input type="text" placeholder="Apartment, studio, or floor" class="form-control">
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">City</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">State</label>
                                                            <div class="dropdown bootstrap-select form-control default-select wide"><select class="form-control default-select wide" id="inputState">
                                                                    <option selected="">Choose...</option>
                                                                    <option>Option 1</option>
                                                                    <option>Option 2</option>
                                                                    <option>Option 3</option>
                                                                </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Choose..." data-id="inputState"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Choose...</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                                        </div>
                                                        <div class="mb-3 col-md-2">
                                                            <label class="form-label">Zip</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-check custom-checkbox">
                                                            <input type="checkbox" class="form-check-input" id="gridCheck">
                                                            <label class="form-check-label form-label" for="gridCheck"> Check me out</label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Sign
                                                        in</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
