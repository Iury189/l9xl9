@extends('templates.template_hunter')
@section('title', "Atualizar $hunter->nome_hunter")
@section('content')
    <div class="contained">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Atualizar {{ $hunter->nome_hunter }}
                            <a href=" {{ url("/") }} " class="btn btn-secondary float-end" title="Retornar listagem"><i class="fa fa-arrow-left"></i>&nbsp;Retornar listagem</a>
                        </h4>
                    </div>
                </div>
                <br>
                <div class="card-body">
                    <!-- Errors Validation Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Form -->
                    <form action="{{ url("update/".encrypt($hunter->id)) }}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PATCH') }} {{ csrf_field() }}
                        <div class="form_group">
                            <div class="form_group">
                                <div for="nome_hunter">Nome:
                                    <input type="text" class="form-control" name="nome_hunter" placeholder="Digite o nome do Hunter" maxlength="50" value="{{ $hunter->nome_hunter }}">
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="idade_hunter">Idade:
                                    <input type="text" class="form-control" name="idade_hunter" placeholder="Digite a idade do Hunter" onkeypress="$(this).mask('00', {reverse: true});" value="{{ $hunter->idade_hunter }}">
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="altura_hunter">Altura:
                                    <input type="text" class="form-control" name="altura_hunter" placeholder="Digite a altura do Hunter" onkeypress="$(this).mask('0.00', {reverse: true});" value="{{ $hunter->altura_hunter }}">
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="peso_hunter">Peso:
                                    <input type="text" class="form-control" name="peso_hunter" placeholder="Digite o peso do Hunter" onkeypress="$(this).mask('000.00', {reverse: true});" value="{{ $hunter->peso_hunter }}">
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="tipo_hunter">Tipo de Hunter:
                                    <select class="form-control" name="tipo_hunter">
                                        <option value="" {{ $hunter->tipo_hunter == '' ? 'selected' : ''}}>Defina o tipo de Hunter</option>
                                        <option value="Hunter Gourmet" {{ $hunter->tipo_hunter == 'Hunter Gourmet' ? 'selected' : ''}}>Hunter Gourmet</option>
                                        <option value="Hunter Arque??logo" {{ $hunter->tipo_hunter == 'Hunter Arque??logo' ? 'selected' : ''}}>Hunter Arque??logo</option>
                                        <option value="Hunter Cientista ou Hunter T??cnico" {{ $hunter->tipo_hunter == 'Hunter Cientista ou Hunter T??cnico' ? 'selected' : ''}}>Hunter Cientista ou Hunter T??cnico</option>
                                        <option value="Hunter Selvagem ou Hunter Ambientalista" {{ $hunter->tipo_hunter == 'Hunter Selvagem ou Hunter Ambientalista' ? 'selected' : ''}}>Hunter Selvagem ou Hunter Ambientalista</option>
                                        <option value="Hunter Musical" {{ $hunter->tipo_hunter == 'Hunter Musical' ? 'selected' : ''}}>Hunter Musical</option>
                                        <option value="Hunter Treasure" {{ $hunter->tipo_hunter == 'Hunter Treasure' ? 'selected' : ''}}>Hunter Treasure</option>
                                        <option value="Hunter Lista Negra" {{ $hunter->tipo_hunter == 'Hunter Lista Negra' ? 'selected' : ''}}>Hunter Lista Negra</option>
                                        <option value="Hunter Mercen??rio" {{ $hunter->tipo_hunter == 'Hunter Mercen??rio' ? 'selected' : ''}}>Hunter Mercen??rio</option>
                                        <option value="Hunter Medicinal" {{ $hunter->tipo_hunter == 'Hunter Medicinal' ? 'selected' : ''}}>Hunter Medicinal</option>
                                        <option value="Hunter Hacker" {{ $hunter->tipo_hunter == 'Hunter Hacker' ? 'selected' : ''}}>Hunter Hacker</option>
                                        <option value="Hunter Cabe??a" {{ $hunter->tipo_hunter == 'Hunter Cabe??a' ? 'selected' : ''}}>Hunter Cabe??a</option>
                                        <option value="Hunter de Informa????o" {{ $hunter->tipo_hunter == 'Hunter de Informa????o' ? 'selected' : ''}}>Hunter de Informa????o</option>
                                        <option value="Hunter Jackspot" {{ $hunter->tipo_hunter == 'Hunter Jackspot' ? 'selected' : ''}}>Hunter Jackspot</option>
                                        <option value="Hunter V??rus" {{ $hunter->tipo_hunter == 'Hunter V??rus' ? 'selected' : ''}}>Hunter V??rus</option>
                                        <option value="Hunter da Juventudade e Beleza" {{ $hunter->tipo_hunter == 'Hunter da Juventudade e Beleza' ? 'selected' : ''}}>Hunter da Juventudade e Beleza</option>
                                        <option value="Hunter Terrorista" {{ $hunter->tipo_hunter == 'Hunter Terrorista' ? 'selected' : ''}}>Hunter Terrorista</option>
                                        <option value="Hunter de Venenos" {{ $hunter->tipo_hunter == 'Hunter de Venenos' ? 'selected' : ''}}>Hunter de Venenos</option>
                                        <option value="Hunter Ca??ador" {{ $hunter->tipo_hunter == 'Hunter Ca??ador' ? 'selected' : ''}}>Hunter Ca??ador</option>
                                        <option value="Hunter Pale??grafo" {{ $hunter->tipo_hunter == 'Hunter Pale??grafo' ? 'selected' : ''}}>Hunter Pale??grafo</option>
                                        <option value="Hunter Perdido" {{ $hunter->tipo_hunter == 'Hunter Perdido' ? 'selected' : ''}}>Hunter Perdido</option>
                                        <option value="Hunter Provis??rio" {{ $hunter->tipo_hunter == 'Hunter Provis??rio' ? 'selected' : ''}}>Hunter Provis??rio</option>
                                        <option value="Hunter Tempor??rio" {{ $hunter->tipo_hunter == 'Hunter Tempor??rio' ? 'selected' : ''}}>Hunter Tempor??rio</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="tipo_nen">Tipo de Nen:
                                    <select class="form-control" name="tipo_nen">
                                        <option value="" {{ $hunter->tipo_nen == '' ? 'selected' : ''}}>Defina o tipo de Nen</option>
                                        <option value="Refor??o" {{ $hunter->tipo_nen == 'Refor??o' ? 'selected' : ''}}>Refor??o</option>
                                        <option value="Emiss??o" {{ $hunter->tipo_nen == 'Emiss??o' ? 'selected' : ''}}>Emiss??o</option>
                                        <option value="Transforma????o" {{ $hunter->tipo_nen == 'Transforma????o' ? 'selected' : ''}}>Transforma????o</option>
                                        <option value="Manipula????o" {{ $hunter->tipo_nen == 'Manipula????o' ? 'selected' : ''}}>Manipula????o</option>
                                        <option value="Materializa????o" {{ $hunter->tipo_nen == 'Materializa????o' ? 'selected' : ''}}>Materializa????o</option>
                                        <option value="Especializa????o" {{ $hunter->tipo_nen == 'Especializa????o' ? 'selected' : ''}}>Especializa????o</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="tipo_sangue">Tipo sangu??neo:
                                    <select class="form-control" name="tipo_sangue">
                                        <option value="" {{ $hunter->tipo_sangue == '' ? 'selected' : ''}}>Defina o tipo sangu??neo</option>
                                        <option value="A+" {{ $hunter->tipo_sangue == 'A+' ? 'selected' : ''}}>A+</option>
                                        <option value="A-" {{ $hunter->tipo_sangue == 'A-' ? 'selected' : ''}}>A-</option>
                                        <option value="B+" {{ $hunter->tipo_sangue == 'B+' ? 'selected' : ''}}>B+</option>
                                        <option value="B-" {{ $hunter->tipo_sangue == 'B-' ? 'selected' : ''}}>B-</option>
                                        <option value="AB+" {{ $hunter->tipo_sangue == 'AB+' ? 'selected' : ''}}>AB+</option>
                                        <option value="AB-" {{ $hunter->tipo_sangue == 'AB-' ? 'selected' : ''}}>AB-</option>
                                        <option value="O+" {{ $hunter->tipo_sangue == 'O+' ? 'selected' : ''}}>O+</option>
                                        <option value="O-" {{ $hunter->tipo_sangue == 'O-' ? 'selected' : ''}}>O-</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="imagem_hunter">Imagem:
                                    <input type="file" class="form-control" name="imagem_hunter">
                                    <img src="{{ asset($hunter->imagem_hunter) }}" height=100 width=100>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" title="Atualizar"><i class="fa fa-arrows-rotate"></i>&nbsp;Atualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
