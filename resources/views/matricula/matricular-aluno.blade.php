@extends('layouts.main')

@section('title', 'Matricular Aluno')

@section('conteudo')
{{-- {{ dd($candidato) }} --}}
<main id="main" class="main" >

        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

    <form method="POST" action="" id="regForm" class="formulario-layout">
        @csrf
        @method('put')
        <div class="tab">
            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style="  text-align: center;">
                        <h2>DADOS DO INSTITUTO</h2>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col d-flex" style="margin-bottom: 15px;">
                        <div class= "d-flex"style="width: 246px;margin-right: auto; margin-left: auto;">
                            <input class=" form-control codinscricao" style="text-align: center" type="text" name="" value="{{$candidato['Id_inscricao']}}" required="" disabled readonly><button class="fas fa-search codinscricaobotao" id="pesquisa" type="submit" title="Procurar"></button>
                        </div>
                    </div>
                </div>

            <div class="form-group">
                <input class="form-control" style="text-align: center;" type="text" name="nome_completo" value="{{$candidato['Nome']}}" oninput="this.className = ''" disabled readonly>
            </div>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <input class="form-control" style="text-align: center;" type="text" name="curso_escolhido" value="{{$candidato['Curso']}}"  oninput="this.className = ''" disabled readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" col form-group">
                    <input class="form-control" style="text-align: center;" type="text" name="curso_escolhido" value="{{$candidato['Ultimo_AnoLectivo']}}"  oninput="this.className = ''" disabled readonly>
                </div>
            </div>

        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style="  text-align: center;">
                        <h2>CONFIRME OS DADOS PESSOAIS</h2>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="text" placeholder="Nome Completo do aluno" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" placeholder="Nome Completo do pai" name="" oninput="this.className = ''">
            </div>

            <div class="form-group">
                <input type="text" placeholder="Nome Completo da mãe" name="" oninput="this.className = ''">
            </div>

            <div class="row">
                <div class="col">
                    <p><input type="date" name="" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <input type="text" class="form-control" readonly="true" value="00" name="" disabled>
                </div>

                <div class="col">
                    <input type="text" placeholder="Naturalidade" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <LAbel > Sexo: </LAbel><input  style=" margin-left: 8px;"type="radio" id="masculino" name="genero" checked><label for="masculino"> Masculino</label>
                        <input type="radio" id="feminino" name="genero"><label for="feminino"> Feminino</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Número do bilhete de identidade" oninput="this.className = ''">
                    </div>
                </div>
            </div>

            <div class="row">

                <div id="clone1"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>
            </div>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style=" text-align: center;">
                        <h2>CONFIRME OS DADOS DA ESCOLA DE PROVIDÊNCIA</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <input type="text" placeholder="Nome da escola de proveniência" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Turno" oninput="this.className = ''">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Nº do aluno" oninput="this.className = ''">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <input type="text" placeholder="Turma" oninput="this.className = ''">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class=" form-group">
                    <input type="text" placeholder=" Número do aluno" name="" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">
                <div class=" form-group">
                    <input type="text" placeholder=" Ano letivo" name="" oninput="this.className = ''">
                </div>
            </div>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">
                    <div style="  text-align: center;">
                        <h2>INFORMAÇÕES IMPORTANTES PARA O INSTITUTO</h2>
                    </div>
                </div>
            </div>

            <div class=" col form-group">
                <input type="email" placeholder="Digite o E-mail do Aluno" name="" oninput="this.className = ''">
            </div>

            <div class="row">

                <div class="col-3 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="pai"selected>Pai</option>
                        <option value="mãe">Mãe</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div id="clone3"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>

            </div>

            <div class="row">

                <div class="col-lg-3 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="pai">Pai</option>
                        <option value="mãe" selected>Mãe</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div id="clone2"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>
            </div>

            <div class="row">

                <div class="col-3 form-group gap-1 ">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option disabled>Familiares:</option>
                        <option value="pai">Pai</option>
                        <option value="mãe">Mãe</option>
                        <option  value="outro"selected>Outro</option>
                    </select>
                </div>

                <div id="clone" class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                    <span style="color: #777;">+244</span>
                    <input type="text" name="" placeholder="Telefone" oninput="this.className = ''">
                </div>
            </div>

        </div>

        <div style="text-align:center;margin-top:25px;">
            <div>
                <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
                <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
            </div>
        </div>
    </form>
</main>
 @endsection
