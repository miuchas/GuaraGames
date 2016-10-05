@extends('layouts.home')
@section('conteudo_principal')

@include('banners/j5')
@include('paginas/equipe')
@include('paginas/contato')

@endsection


-# .conteudo
-#   .title Laravel 5
-#   -if(isset($seriais))
-#     -foreach ($seriais as $index => $serial)
-#       %b= $serial
-#       %br
-#   %a.btn.btn-primary{:href =>"/logout", :role => "button"} Sair
