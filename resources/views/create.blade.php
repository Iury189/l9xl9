@extends('templates.template_hunter')
@section('title', 'Cadastrar Hunter')
@section('content')
    <div class="contained">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Cadastrar Hunter
                            <a href="{{ url("/") }}" class="btn btn-secondary float-end" title="Retornar listagem"><i class="fa fa-arrow-left"></i>&nbsp;Retornar listagem</a>
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
                    <form action="{{ url("create") }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form_group">
                            <div class="form_group">
                                <div for="nome_hunter">Nome:
                                    <input type="text" class="form-control" name="nome_hunter" placeholder="Digite o nome do Hunter" maxlength="50" value="{{ old('nome_hunter') }}">
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="idade_hunter">Idade:
                                    <input type="text" class="form-control" name="idade_hunter" placeholder="Digite a idade do Hunter" onkeypress="$(this).mask('00', {reverse: true});" value="{{ old('idade_hunter') }}">
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="altura_hunter">Altura:
                                    <input type="text" class="form-control" name="altura_hunter" placeholder="Digite a altura do Hunter"onkeypress="$(this).mask('0.00', {reverse: true});" value="{{ old('altura_hunter') }}">
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="peso_hunter">Peso:
                                    <input type="text" class="form-control" name="peso_hunter" placeholder="Digite o peso do Hunter" onkeypress="$(this).mask('000.00', {reverse: true});" value="{{ old('peso_hunter') }}">
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="tipo_hunter">Tipo de Hunter:
                                    <select class="form-control" name="tipo_hunter">
                                        <option {{ old('tipo_hunter') == '' ? 'selected' : ''}} value="">Defina o tipo de Hunter</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Gourmet' ? 'selected' : ''}} value="Hunter Gourmet">Hunter Gourmet</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Arque??logo' ? 'selected' : ''}} value="Hunter Arque??logo">Hunter Arque??logo</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Cientista ou Hunter T??cnico' ? 'selected' : ''}} value="Hunter Cientista ou Hunter T??cnico">Hunter Cientista ou Hunter T??cnico</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Selvagem ou Hunter Ambientalista' ? 'selected' : ''}} value="Hunter Selvagem ou Hunter Ambientalista">Hunter Selvagem ou Hunter Ambientalista</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Musical' ? 'selected' : ''}} value="Hunter Musical">Hunter Musical</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Treasure' ? 'selected' : ''}} value="Hunter Treasure">Hunter Treasure</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Lista Negra' ? 'selected' : ''}} value="Hunter Lista Negra">Hunter Lista Negra</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Mercen??rio' ? 'selected' : ''}} value="Hunter Mercen??rio">Hunter Mercen??rio</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Medicinal' ? 'selected' : ''}} value="Hunter Medicinal">Hunter Medicinal</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Hacker' ? 'selected' : ''}} value="Hunter Hacker">Hunter Hacker</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Cabe??a' ? 'selected' : ''}} value="Hunter Cabe??a">Hunter Cabe??a</option>
                                        <option {{ old('tipo_hunter') == 'Hunter de Informa????o' ? 'selected' : ''}} value="Hunter de Informa????o">Hunter de Informa????o</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Jackspot' ? 'selected' : ''}} value="Hunter Jackspot">Hunter Jackspot</option>
                                        <option {{ old('tipo_hunter') == 'Hunter V??rus' ? 'selected' : ''}} value="Hunter V??rus">Hunter V??rus</option>
                                        <option {{ old('tipo_hunter') == 'Hunter da Juventudade e Beleza' ? 'selected' : ''}} value="Hunter da Juventudade e Beleza">Hunter da Juventudade e Beleza</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Terrorista' ? 'selected' : ''}} value="Hunter Terrorista">Hunter Terrorista</option>
                                        <option {{ old('tipo_hunter') == 'Hunter de Venenos' ? 'selected' : ''}} value="Hunter de Venenos">Hunter de Venenos</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Ca??ador' ? 'selected' : ''}} value="Hunter Ca??ador">Hunter Ca??ador</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Pale??grafo' ? 'selected' : ''}} value="Hunter Pale??grafo">Hunter Pale??grafo</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Perdido' ? 'selected' : ''}} value="Hunter Perdido">Hunter Perdido</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Provis??rio' ? 'selected' : ''}} value="Hunter Provis??rio">Hunter Provis??rio</option>
                                        <option {{ old('tipo_hunter') == 'Hunter Tempor??rio' ? 'selected' : ''}} value="Hunter Tempor??rio">Hunter Tempor??rio</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="tipo_nen">Tipo de Nen:
                                    <select class="form-control" name="tipo_nen">
                                        <option {{ old('tipo_nen') == '' ? 'selected' : ''}} value="">Defina o tipo de Nen</option>
                                        <option {{ old('tipo_nen') == 'Refor??o' ? 'selected' : ''}} value="Refor??o">Refor??o</option>
                                        <option {{ old('tipo_nen') == 'Emiss??o' ? 'selected' : ''}} value="Emiss??o">Emiss??o</option>
                                        <option {{ old('tipo_nen') == 'Transforma????o' ? 'selected' : ''}} value="Transforma????o">Transforma????o</option>
                                        <option {{ old('tipo_nen') == 'Manipula????o' ? 'selected' : ''}} value="Manipula????o">Manipula????o</option>
                                        <option {{ old('tipo_nen') == 'Materializa????o' ? 'selected' : ''}} value="Materializa????o">Materializa????o</option>
                                        <option {{ old('tipo_nen') == 'Especializa????o' ? 'selected' : ''}} value="Especializa????o">Especializa????o</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="tipo_sangue">Tipo sangu??neo:
                                    <select class="form-control" name="tipo_sangue">
                                        <option {{ old('tipo_sangue') == '' ? 'selected' : ''}} value="">Defina o tipo sangu??neo</option>
                                        <option {{ old('tipo_sangue') == 'A+' ? 'selected' : ''}} value="A+">A+</option>
                                        <option {{ old('tipo_sangue') == 'A-' ? 'selected' : ''}} value="A-">A-</option>
                                        <option {{ old('tipo_sangue') == 'B+' ? 'selected' : ''}} value="B+">B+</option>
                                        <option {{ old('tipo_sangue') == 'B-' ? 'selected' : ''}} value="B-">B-</option>
                                        <option {{ old('tipo_sangue') == 'AB+' ? 'selected' : ''}} value="AB+">AB+</option>
                                        <option {{ old('tipo_sangue') == 'AB-' ? 'selected' : ''}} value="AB-">AB-</option>
                                        <option {{ old('tipo_sangue') == 'O+' ? 'selected' : ''}} value="O+">O+</option>
                                        <option {{ old('tipo_sangue') == 'O-' ? 'selected' : ''}} value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form_group">
                                <div for="imagem_hunter">Imagem:
                                    <input type="file" class="form-control" name="imagem_hunter" value="{{ old('imagem_hunter') }}">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success" title="Cadastrar"><i class="fa fa-plus"></i>&nbsp;Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
