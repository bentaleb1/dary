@extends('Template.welcome',['titre'=>'Liste Services'])
@section('contenu')
<div class="row">
<div class="col-lg-3">  

  <div style="border: solid  2px;" >
    <h1 style="text-align: center;">Categorie</h1><br><br>
<div class="row"><div class="col-lg-8">
<input  type="button" class="d-flex type" value="climatisation"  >
</div>
<div class="col-lg-4">({{count($services->where('Type','climatisation'))}})</div>
</div> 
<div class="row"><div class="col-lg-8">
  <input  type="button" class="d-flex type" value="chauffage"  >
  </div>
  <div class="col-lg-4">({{count($services->where('Type','chauffage'))}})</div>
  </div> 
  <div class="row"><div class="col-lg-8">
    <input  type="button" class="d-flex type" value="electrecite"  >
    </div>
    <div class="col-lg-4">({{count($services->where('Type','electrecite'))}})</div>
    </div> 
         <br><br>      
        
    </div>
    <br>

    <div style="border: solid  2px; " >
        <h1 style="text-align: center;">Type</h1><br><br>
        <div class="row"><div class="col-lg-8">
            <input  type="button" class="d-flex type" value="instalation"  >
           </div>
           <div class="col-lg-4">({{count($services->where('categorie','instalation'))}})</div>
        </div>
        <div class="row"><div class="col-lg-8">
            <input  type="button" class="d-flex type" value="depanage"  >
           </div>
           <div class="col-lg-4">({{count($services->where('categorie','depanage'))}})</div>
     <br><br>
        </div>  
    </div>
    
    </div>
<div class="col-lg-8">
    <div class="card-deck" id="sear">

   
</div>

<div class="col-lg-1">  


    
</div>
</div>
@stop
<style>
  .type{
      outline:none ;
      background: transparent;     
         border :transparent 0;
       margin: auto;
     text-align: center;
      
  }
</style>