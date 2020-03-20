@extends('layouts.ava')
@section('titulo', 'AVA | Cadastro Disciplinas')
@section('conteudo')
       @include('layouts.header')
       @include('layouts.menus.aside')
        <div class="page-wrapper">
        @include('layouts.breadcrumb')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <button type="button" id="add-disciplina" class="btn btn-rounded btn-block btn-info"> Adicionar Disciplina</button>
</div>
                        <div class="col-lg-12 mt-4">
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Minhas Disciplinas </h4>
                                <div class="table-responsive">
                                    <table class="table color-table info-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Diciplina</th>
                                                <th>Descrição</th>
                                                <th>Série</th>
                                                <th>Status</th>
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
                    <div class="col-lg-4" style="z-index:1000; position:absolute; top:0px; right:0px; padding-right:0px;" id="cadastro-disciplina">
                    <div class="card" style="height: 109vh!important">
                            <div class="card-body">
                            <button type="button" class="btn btn-outline-danger btn-rounded pull-right fechar"><i class="ti-close"></i> Fechar</button>
                                
                                <form action="#" class="mt-2">
                                    <div class="form-body">
                                        <h3 class="card-title">Cadastro da Disciplina</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nome da Disciplina</label>
                                                    <input type="text" id="firstName" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label">Série</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">1 Ano</option>
                                                        <option value="">2 Ano</option>
                                                    </select>
                                               </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                    <label class="control-label">Descricao</label>
                                                    <textarea class="form-control textarea_editor"> </textarea>
                                            </div>     
                                        </div>
                    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Status</label>
                                                    <div class="m-b-10">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Ativo</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Inativo</span>
                                                        </label>
                                                    </div>
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
                    <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-success"> <i class="ti-check"></i> Mensagem de Sucesso</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xlg-2 col-xs-12">
                                <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-danger"> <i class="ti-check"></i> Mensagem de Falha</div>
                                    <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
                                </div>
                            </div>
                </div>
            </div>
@endsection