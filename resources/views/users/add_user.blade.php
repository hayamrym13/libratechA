@extends('users.current_user')
@section('users')



    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h5 class="box-title">Ajouter Utilisateur</h5>
                        <h10 class="box-title" ><span class="text-danger">(*= Obligatoir)</span></h10>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="{{ route('users.store',$user->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">


                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <h5>Role  <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="role" id="role" required=""
                                                                    class="form-control" >
                                                                <option value="role" selected="" >Selectionner
                                                                </option>
                                                                <option value="Professeur" >Professeur</option>
                                                                <option value="Etudiant">Etudiant(e)</option>
                                                                <option value="externe">Externe</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Code <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="code" placeholder="(CIN OU CNE)"class="form-control"
                                                                   required=""></div>

                                                    </div>

                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Nom <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" placeholder="Nom"class="form-control"
                                                                   required="name"></div>

                                                    </div>

                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>prenom<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="prenom" placeholder="prenom"class="form-control"
                                                                   required=""></div>

                                                    </div>

                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Departement</h5>
                                                        <div class="controls">
                                                            <input type="text" name="departement" placeholder="departement" class="form-control"
                                                                   ></div>

                                                    </div>

                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Filier</h5>
                                                        <div class="controls">
                                                            <input type="text" name="filier" placeholder="Filier" class="form-control"
                                                                   ></div>

                                                    </div>

                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Telephone</h5>
                                                        <div class="controls">
                                                            <input type="number" name="Telephone" placeholder="telephone"class="form-control"
                                                                   ></div>

                                                    </div>

                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Adresse</h5>
                                                        <div class="controls">
                                                            <input type="text" name="adresse" placeholder="adresse"class="form-control"
                                                                   ></div>

                                                    </div>

                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->


                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <h5>E-mail <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" placeholder="email" class="form-control"
                                                                   required=""></div>
                                                    

                                                    </div>

                                                </div> <!-- End Col Md-6 -->
                                               
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>password <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="name" name="password" class="form-control"
                                                               required=""></div>
                                                </div>
                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->


                                            <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info mb-5"
                                                       value="submit">
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





@endsection
