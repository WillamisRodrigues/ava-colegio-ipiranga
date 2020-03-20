@extends('layouts.ava')
@section('titulo', 'AVA | Cadastro Turma')
@section('conteudo')
       @include('layouts.header')
       @include('layouts.menus.aside')
        <div class="page-wrapper">
        @include('layouts.breadcrumb')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        <button type="button" id="add-turma" class="btn btn-rounded btn-block btn-info"> Adicionar Turma</button>
</div>
                        <div class="col-lg-12 mt-4">
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Minhas Turmas</h4>
                                <div class="table-responsive">
                                    <table class="table color-table info-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome Turma</th>
                                                <th>Série</th>
                                                <th>Turno</th>
                                                <th>Responsável pela Turma</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Nigam</td>
                                                <td>Eichmann</td>
                                                <td>Eichmann</td>
                                                <td>@Sonu</td>
                                                <td>
                                                    <a href="" class="btn btn-warning"> <i class="fa fa-pencil"></i> Editar </a>
                                                    <a href="" class="btn btn-danger ml-2"> <i class="fa fa-trash"></i> Deletar </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                <td>Prohaska</td>
                                                <td>Eichmann</td>
                                                <td>@Genelia</td>
                                                <td>
                                                    <a href="" class="btn btn-warning"> <i class="fa fa-pencil"></i> Editar </a>
                                                    <a href="" class="btn btn-danger ml-2"> <i class="fa fa-trash"></i> Deletar </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Roshan</td>
                                                <td>Rogahn</td>
                                                <td>Eichmann</td>
                                                <td>@Hritik</td>
                                                <td>
                                                    <a href="" class="btn btn-warning"> <i class="fa fa-pencil"></i> Editar </a>
                                                    <a href="" class="btn btn-danger ml-2"> <i class="fa fa-trash"></i> Deletar </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" style="z-index:1000; position:absolute; top:0px; right:0px; padding-right:0px;" id="cadastro-turma">
                    <div class="card" style="height: 100vh!important">
                            <div class="card-body">
                            <button type="button" class="btn btn-outline-danger btn-rounded pull-right fechar"><i class="ti-close"></i> Fechar</button>
                                
                                <form action="#" class="mt-2">
                                    <div class="form-body">
                                        <h3 class="card-title">Cadastro de Turma</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nome da Turma</label>
                                                    <input type="text" id="firstName" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Turno</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Manhã</option>
                                                        <option value="">Tarde</option>
                                                        <option value="">Noite</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label">Serie</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Manhã</option>
                                                        <option value="">Tarde</option>
                                                        <option value="">Noite</option>
                                                    </select>
                                            </div>     
                                        </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   <label class="control-label">Professor Responsavel </label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Professor</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Salvar</button>
                                        <button type="button" class="btn btn-inverse fechar">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection