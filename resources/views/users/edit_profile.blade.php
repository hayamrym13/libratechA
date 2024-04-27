@extends('users.current_user')
@section('users')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border mb-4">
                        <h4 class="box-title"><i class="fa fa-fw fa-user"></i> Management profile</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-12">


                                            <div class="row mb-4">
                                                <div class="col-md-6 mb-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Name</span>
                                                        </div>
                                                        <input type="text" name="name" class="form-control"
                                                               value="{{ $user->name }}">
                                                    </div>
                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6 mb-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Prenom</span>
                                                        </div>
                                                        <input type="prenom" name="prenom" class="form-control"
                                                               value="{{ $user->prenom }}" >
                                                    </div>
                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->


                                            <div class="row mb-4">
                                                <div class="col-md-6 mb-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Telephone</span>
                                                        </div>
                                                        <input type="text" name="Telephone" class="form-control"
                                                               value="{{ $user->Telephone }}" >
                                                    </div>
                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6 mb-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Adresse</span>
                                                        </div>
                                                        <input type="text" name="addresse" class="form-control"
                                                               value="{{ $user->addresse }}" >
                                                    </div>

                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->


                                            <div class="row mb-2">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">E-mail</span>
                                                        </div>
                                                        <input type="email" name="email" class="form-control"
                                                               value="{{ $user->email }}" required="">
                                                    </div>
                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Profile Photo</span>
                                                        </div>
                                                        <input id="image" type="file" name="image"
                                                               class="form-control"
                                                               value="{{ $user->profile_photo_path }}">
                                                    </div>
                                                </div><!-- End Col Md-6 -->
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage" class=" mx-auto"
                                                                 src="{{ (!empty($user->profile_photo_path))?
                  url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" alt="User Avatar"
                                                                 style="width: 100px; border: 1px solid black;">
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-sm-6">
                                                        <div class="text-xs-right">
                                                            <input type="submit" class="btn btn-rounded btn-info mb-5"
                                                                   value="Modifier">
                                                        </div>
                                                    </div>
                                            </div> <!-- End Row -->

                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>


        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>


@endsection
