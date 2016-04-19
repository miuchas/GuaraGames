@extends('layouts.home')

@section('content')
.conteudo
  .title Laravel 5
  -if(isset($seriais))
    -foreach ($seriais as $index => $serial)
      %b= $serial
      %br
  %a.btn.btn-primary{:href =>"/logout", :role => "button"} Sair
@endsection
