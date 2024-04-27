@extends('documents.current_document')
@section('documents')



    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h5 class="box-title">Ajouter document</h5>
                        <h10 class="box-title" ><span class="text-danger">(*= Obligatoir)</span></h10>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">


                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <h5>Type  <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="type" id="type" required=""
                                                                    class="form-control">
                                                                <option value="type" selected="" disabled="">Selectionner
                                                                </option>
                                                                <option value="Professeur">Livre</option>
                                                                <option value="Etudiant">Memoire</option>
                                                                <option value="Etudiant">Dicionnaire</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>ISBN <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="ISBN"class="form-control" placeholder="Isbn"
                                                                   required=""></div>

                                                    </div>

                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Titre <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="Titre" placeholder="Titre"class="form-control"
                                                                   required=""></div>

                                                    </div>

                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Editeur<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="Editeur" placeholder="Editeur"class="form-control"
                                                                   required=""></div>

                                                    </div>

                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Année <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="Année" placeholder="Année" class="form-control"
                                                                   required=""></div>

                                                    </div>

                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>édition</h5>
                                                        <div class="controls">
                                                            <input type="text" name="édition" placeholder="édition" class="form-control"
                                                                   required=""></div>

                                                    </div>

                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Auteur1<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="nombre" name="Auteur1" placeholder="Auteur1"class="form-control"
                                                                   required=""></div>

                                                    </div>

                                                </div> <!-- End Col Md-6 -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Auteur2</h5>
                                                        <div class="controls">
                                                            <input type="text" name="Auteur2" placeholder="Auteur2"class="form-control"
                                                                   required=""></div>

                                                    </div>

                                                </div><!-- End Col Md-6 -->


                                            </div> <!-- End Row -->


                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <h5>Nombre <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="nombre" name="nombre" placeholder="nombre" class="form-control"
                                                                   required=""></div>
                                                    

                                                    </div>

                                                </div> <!-- End Col Md-6 -->
                                            


                                            </div> <!-- End Row -->


                                            <div class="text-xs-right">
                                                <input type="submit" class="btn btn-rounded btn-info mb-5"
                                                       value="Ajouter">
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
